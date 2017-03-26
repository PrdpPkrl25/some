<html>
<body>
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>User</th>
        <th>Gunaso</th>
        <th>Discription</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/info">{{csrf_field()}}
            <td></td>
            <td>
                <select class="form-control" name="user_id">
                    <option>Choose</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->first_name}}</option>
                    @endforeach

                </select>
            </td>

            <td>
                <select class="form-control" name="gunaso_id">
                    <option>Choose</option>
                    @foreach ($gunasos as $gunaso)
                        <option value="{{$gunaso->id}}">{{$gunaso->topic}}</option>
                    @endforeach

                </select>
            </td>

            <td>
                <input type="name" class="form-control" name="discription" placeholder="Discription">
            </td>
            <td>
                <input type="submit" value="submit" class="btn btn-info">
            </td>
        </form>


    </tr>


    @foreach($infos as $info)
        <tr>

            <td>{{$info->id}}</td>
            <td>{{$info->user->user_id}}</td>
            <td>{{$info->gunaso->gunaso_id}}</td>
            <td>{{$info->discription}}</td>
            <td><a href="/info_view/{{$info->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
