<!DOCTYPE html>
<html>
<head>
    <title>Laravel Unlimited Hierarchical Category Tree View Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="{{ asset('assets/css/treeview.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Unlimited Hierarchical Book Tree View</div>
            <div class="panel-body">
                <div class="row">

                    <div class="col-md-6">
                        <h3>Book List</h3>
                        <ul id="tree1">
                            @foreach($books as $book)
                            <li>
                                {{ $book->title }}
                                @if(count($book->childs))
                                @include('book.manageChild',['childs' => $book->childs])
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h3>Add New Book</h3>
                        <form role="form" id="book" method="POST" action="{{ route('add.book') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

                                <label>Title:</label>
                                <input type="text" id="title" name="title" value="" class="form-control" placeholder="Enter Title">
                                
                                @if ($errors->has('title'))
                                <span class="text-red" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif

                            </div>


                            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">

                                <label>Book:</label>
                                <select id="parent_id" name="parent_id" class="form-control">
                                    <option value="0">Select</option>
                                    @foreach($allBooks as $rows)
                                    <option value="{{ $rows->id }}">{{ $rows->title }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('parent_id'))
                                <span class="text-red" role="alert">
                                    <strong>{{ $errors->first('parent_id') }}</strong>
                                </span>
                                @endif

                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Add New</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/treeview.js') }}"></script>

</body>
</html>