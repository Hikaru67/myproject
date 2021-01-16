@extends('layout')
@section('content')
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Tên môn học</th>
                <th>Avatar</th>
                <th>Mô tả</th>
                <th>Người tạo</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
                </thead>
                <tbody>
                {{--{{dd($list_class)}}--}}
                @foreach($list_subject as $key => $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->name}}</td>
                        <td><img src="{{$subject->avatar}}" alt="" width="50px"></td>
                        <td>{{$subject->description}}</td>
                        <td>{{$subject->nameCreator}}</td>
                        <td class="status-{{$subject->status}}">{{getStatus($subject->status)}}</td>
                        <td>{{$subject->created_at}}</td>
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
