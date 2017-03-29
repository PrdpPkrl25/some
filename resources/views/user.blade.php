@include('layout')
@section('content')
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Mobile No</th>
        <th>Date Of Birth</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Action</th>
        <
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/user">{{csrf_field()}}
            <td></td>
            <td>
                <input type="name" class="form-control" name="first_name" placeholder="First Name">
            </td>
            <td>
                <input type="name" class="form-control" name="last_name" placeholder="Last Name">
            </td>
            <td>
                <input type="name" class="form-control" name="file_size" placeholder="Address">
            </td>
            <td>
                <input type="number" class="form-control" name="mobile_number" placeholder="Mobile Number">
            </td>
            <td>
                <input type="date" class="form-control" name="date_of_birth" placeholder="Date Of Birth">
            </td>
            <td>
                <input type="number" class="form-control" name="age" placeholder="Age">
            </td>
            <td>
                <select class="form-control" name="gender">
                    <option>Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </td>
            <td>
                <input type="submit" value="submit" class="btn btn-info">
            </td>
        </form>


    </tr>


    @foreach($users as $user)
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->mobile_number}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->gender}}</td>
            <td><a href="/user_view/{{$user->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
