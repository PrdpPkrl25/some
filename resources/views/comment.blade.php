<html>
<body>
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>Gunaso</th>
        <th>File </th>
        <th>Info </th>
        <th>User</th>
        <th>Discription</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/comment">{{csrf_field()}}
            <td></td>

            <td>
                <select class="form-control" name="gunaso_id">
                    <option>Choose</option>
                    @foreach ($gunasos as $gunaso)
                        <option value="{{$gunaso->id}}">{{$gunaso->topic}}</option>
                    @endforeach

                </select>
            </td>
            <td>
                <select class="form-control" name="file_id">
                    <option>Choose</option>
                    @foreach ($files as $file)
                        <option value="{{$file->id}}">{{$file->file_id}}</option>
                    @endforeach

                </select>
            </td>
            <td>
                <select class="form-control" name="info_id">
                    <option>Choose</option>
                    @foreach ($infos as $info)
                        <option value="{{$infos->id}}">{{$info->id}}</option>
                    @endforeach

                </select>
            </td>
            <td>
                <select class="form-control" name="user_id">
                    <option>Choose</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->first_name}}</option>
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


    @foreach($comments as $comment)
        <tr>

            <td>{{$comment->id}}</td>
            <td>{{$comment->gunaso->gunaso_id}}</td>
            <td>{{$comment->file->file_id}}</td>
            <td>{{$comment->info->info_id}}</td>
            <td>{{$comment->user->user_id}}</td>
            <td>{{$comment->discription}}</td>
            <td><a href="/comment_view/{{$comment->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
