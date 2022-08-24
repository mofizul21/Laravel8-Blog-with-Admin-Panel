<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'website_name' => 'required|max:255',
            'website_logo' => 'nullable', 
            'website_favicon' => 'nullable', 
            'description' => 'nullable', 
            'meta_title' => 'required|max:255',
            'meta_keyword' => 'nullable',
            'meta_description' => 'nullable', 
        ]);

        if($validator->fails()){
            return redirect()->back() ->withErrors($validator);
        }

        $setting = Setting::where('id', '1')->first();

        if($setting){
            // Update
            $setting->website_name = $request->website_name;
            if ($request->hasfile('website_logo')) {
                $destination = 'uploads/setting/' . $setting->logo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('website_logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/', $filename);
                $setting->logo = $filename;
            }
            if ($request->hasfile('website_favicon')) {
                $destination = 'uploads/setting/' . $setting->website_favicon;
                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('website_favicon');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/', $filename);
                $setting->favicon = $filename;
            }
            $setting->description = $request->description;
            $setting->meta_title = $request->meta_title;
            $setting->meta_keyword = $request->meta_keyword;
            $setting->meta_description = $request->meta_description;
            $setting->save();

            $this->setSuccessMessage('Setting updated');
            return redirect('admin/settings');
        } else {
            // Create new
            $setting = new Setting; 
            $setting->website_name = $request->website_name;
            if($request->hasfile('website_logo')){
                $file = $request->file('website_logo'); 
                $filename = time() . '.' . $file->getClientOriginalExtension(); 
                $file->move('uploads/settings/', $filename); 
                $setting->logo = $filename;
            }
            if($request->hasfile('website_favicon')){
                $file = $request->file('website_favicon'); 
                $filename = time() . '.' . $file->getClientOriginalExtension(); 
                $file->move('uploads/settings/', $filename); 
                $setting->favicon = $filename;
            }
            $setting->description = $request->description; 
            $setting->meta_title = $request->meta_title; 
            $setting->meta_keyword = $request->meta_keyword; 
            $setting->meta_description = $request->meta_description;
            $setting->save();

            $this->setSuccessMessage('Setting added');
            return redirect('admin/settings');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
