@extends('layout')
@section('content')

<body>
<table class="table table-condensed table-responsive table-striped text-center table-bordered table-hover">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Authority Name</th>
            <th>Gunaso Id</th>
            <th>Action</th>
            <
        </tr>
    </thead>
    <tbody>
        <tr>
            <form method="post" action="/authority">{{csrf_field()}}
                <td></td>
                <td>
                    <input type="name" class="form-control" name="authority_name" placeholder="Authority Name">
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


        @foreach($authorities as $authority)
    <tr>

        <td>{{$authority->id}}</td>
        <td>{{$authority->authority_name}}</td>
        <td>{{$authority->gunaso->topic}}</td>
        <td><a href="/authority_view/{{$authority->id}}">View</a></td>
    </tr>
            @endforeach
    </tbody>
</table>
@endsection
