@extends('layout')
@section('content')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Tên lớp học</th>
                <th>Avatar</th>
                <th>Tên môn học</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
                </thead>
                <tbody>
{{--                {{dd($list_class)}}--}}
                @foreach($list_class as $key => $class)
                    <tr>
                        <td>{{$class->id}}</td>
                        <td>{{$class->name}}</td>
                        <td><img src="{{$class->avatar}}" alt="" width="50px"></td>
                        <td>{{$class->subjectName}}</td>
                        @if($class->status === 1)
                            <td style="color: green">ACTIVE</td>
                        @else
                            <td style="color: red">INACTIVE</td>
                        @endif
                        <td>{{$class->created_at}}</td>
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
