<table>
    <thead>
    <tr>
        <th>S.No</th>
        <th>User</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="post" action="/registration">{{csrf_field()}}
            <td></td>
            <td>
                <select class="form-control" name="user_id">
                    <option>Choose</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->first_name}}</option>
                    @endforeach

                </select>
            </td>


        </form>
    </tr>


    @foreach($registrations as $registration)
        <tr>

            <td>{{$registration->id}}</td>
            <td>{{$regestration->user->user_id}}</td>
            <td><a href="/registration_view/{{$registration->id}}">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
