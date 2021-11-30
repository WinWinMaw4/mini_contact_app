<ul>
    @foreach(\App\Models\Contact::all() as $contact)
        <li>
            [<a href="{{route('edit',$contact->id)}}">edit</a>,
            <form action="{{route('destory',$contact->id)}}" style="display: inline" method="post">
                @csrf
                @method('delete');
                <button>Delete</button>
            </form>]{{$contact->name}}{{$contact->phone}}
        </li>
    @endforeach
</ul>
