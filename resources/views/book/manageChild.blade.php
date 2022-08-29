<ul>

    @foreach($childs as $child)

    <li>

        {{ $child->title }}

        @if(count($child->childs))

        @include('book.manageChild',['childs' => $child->childs])

        @endif

    </li>

    @endforeach

</ul>