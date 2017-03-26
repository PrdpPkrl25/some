<html>
<body>
<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>Authority Id</th>
        <th>Gunaso Date</th>
        <th>Action</th>
        <
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/followup">{{csrf_field()}}
            <td></td>
            <td>
                <select class="form-control" name="authority_id">
                    <option>Choose</option>
                    @foreach ($authorities as $authority)
                        <option value="{{$authority->id}}">{{$auhtority->authority_name}}</option>
                    @endforeach

                </select>
            </td>
            <td>
                <input type="date" class="form-control" name="gunaso_date" placeholder="Gunaso Date">
            </td>
            <td>
                <input type="submit" value="submit" class="btn btn-info">
            </td>
        </form>


    </tr>


    @foreach($followups as $followup)
        <tr>

            <td>{{$followup->id}}</td>
            <td>{{$followup->authority->authority_name}}</td>
            <td>{{$followup->gunaso_date}}</td>
            <td><a href="/followup_view/{{$followup->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
