<html>
<body>
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>File Id</th>
        <th>File Type</th>
        <th>File Size</th>
        <th>Path</th>
        <th>Action</th>
        <
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/file">{{csrf_field()}}
            <td></td>
            <td>
                <input type="number" class="form-control" name="file_id" placeholder="File Id">
            </td>
            <td>
                <input type="name" class="form-control" name="file_type" placeholder="File Type">
            </td>
            <td>
                <input type="number" class="form-control" name="file_size" placeholder="File Size">
            </td>
            <td>
                <input type="name" class="form-control" name="path" placeholder="Path">
            </td>
            <td>
                <input type="submit" value="submit" class="btn btn-info">
            </td>
        </form>


    </tr>


    @foreach($files as $file)
        <tr>

            <td>{{$file->id}}</td>
            <td>{{$file->file_id}}</td>
            <td>{{$file->file_type}}</td>
            <td>{{$file->file_size}}</td>
            <td>{{$file->path}}</td>

            <td><a href="/file_view/{{$file->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
