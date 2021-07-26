<h1>Members List</h1>
<table border="1">
<tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
</tr>
@foreach($people as $people)
<tr>
    <td>{{$people['id']}}</td>
    <td>{{$people['name']}}</td>
    <td>{{$people['email']}}</td>
    <td>{{$people['address']}}</td>

    

</tr>
@endforeach
</table>