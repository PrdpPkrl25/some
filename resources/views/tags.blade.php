<html>
<body>
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>Tag Name</th>
        <th>Gunaso Id</th>
        <th>Action</th>
        <
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/tag">{{csrf_field()}}
            <td></td>
            <td>
                <input type="name" class="form-control" name="tag_name" placeholder="Tag Name">
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
                <input type="submit" value="submit" class="btn btn-info">
            </td>
        </form>


    </tr>


    @foreach($tags as $tag)
        <tr>

            <td>{{$tag->id}}</td>
            <td>{{$tag->tag_name}}</td>
            <td>{{$tag->gunaso->topic}}</td>
            <td><a href="/tag_view/{{$tag->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
