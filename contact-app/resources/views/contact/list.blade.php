<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<br>
<hr>
<br>
<h4>Contact List</h4>
<table style="border: 2px solid;width: 100%;text-align: center;border-radius: 5px">
    <tr style="border: 1px dotted white;background-color: #315c62">{{-- #54aaa0,#315c62--}}
        <th>Name</th>
        <th>Phone</th>
        <th>Control</th>
    </tr>
    @foreach(\App\Models\Contact::all() as $contact)
        <tr style="text-align: center;">
            <td>{{$contact->name}}</td>
            <td>{{$contact->phone}}</td>
            <td> <a href="{{route('edit',$contact->id)}}" class="edit"><i class="fas fa-edit"></i></a> |
                <form action="{{route('destory',$contact->id)}}" style="display: inline" method="post">
                    @csrf
                    @method('delete')
                    <button class="delete" style="border:none;background: none;color: #aa0019;cursor: pointer"><i class="fas fa-trash-alt"></i></button>
                </form></td>
        </tr>
    @endforeach
</table>
