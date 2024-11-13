<div>
    <!-- Well begun is half done. - Aristotle -->
     <h1>Display All</h1>
     <table border="1" cellpadding="15">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Hobby</td>
            <td>City</td>
            <td>DOB</td>
            <td>Delete</td>
        </tr>
        @foreach ($employee as $e )
            <tr>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->gender}}</td>
                <td>{{$e->hobby}}</td>
                <td>{{$e->city}}</td>
                <td>{{$e->dob}}</td>
                <td>
                    <form action="/delete/{{$e->eid}}" method="get">       
                <button type="submit">Delete</button>
                </form> 
            </td>
            </tr>
        @endforeach
     </table>
</div>
