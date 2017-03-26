<html>
<body>
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>User Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Topic</th>
        <th>Heading</th>
        <th>Description</th>
        <th>Action</th>
        <
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/gunaso">{{csrf_field()}}
            <td></td>

            <td>
                <select class="form-control" name="user_id">
                    <option>Choose</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->d}}</option>
                    @endforeach

                </select>
            </td>
            <td>
                <input type="name" class="form-control" name="first_name" placeholder="First Name">
            </td>
            <td>
                <input type="name" class="form-control" name="last_name" placeholder="Last Name">
            </td>
            <td>
                <input type="name" class="form-control" name="topic" placeholder="Topic">
            </td>
            <td>
                <input type="name" class="form-control" name="heading" placeholder="Heading">
            </td>
            <td>
                <input type="name" class="form-control" name="discription" placeholder="Discription">
            </td>
            <td>
                <input type="submit" value="submit" class="btn btn-info">
            </td>
        </form>


    </tr>


    @foreach($gunasos as $gunaso)
        <tr>

            <td>{{$gunaso->id}}</td>
            <td>{{$gunaso->user->user_id}}</td>
            <td>{{$gunaso->first_name}}</td>
            <td>{{$gunaso->last_name}}</td>
            <td>{{$gunaso->topic}}</td>
            <td>{{$gunaso->heading}}</td>
            <td>{{$gunaso->discription}}</td>
            <td><a href="/gunaso_view/{{$gunaso->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
