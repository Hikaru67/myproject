@extends('layout')
@section('content')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Quê quán</th>
                <th>Quyền</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($list_users as $key => $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->fullName}}</td>
                        <td><img src="{{$users->avatar}}" alt="" width="50px"></td>
                        <td>{{$users->email}}</td>
                        <td>
                            <a style="" href="{{$users->facebook}}" target="_blank">
                                <span class="d-inline-block text-truncate" style="max-width: 150px">{{$users->facebook}}</span></a>
                        </td>
                        <td>{{date('d/m/Y',$users->birthday)}}</td>
                        <td>{{$users->gender === 1 ? 'Nam':'Nữ'}}</td>
                        <td>{{$users->country}}</td>
                        <td>{{getRoleUser($users->role)}}</td>
                        <td class="status-{{$users->status}}">{{getStatus($users->status)}}</td>
                        <td>{{$users->created_at}}</td>
                        <td><a href=""><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
