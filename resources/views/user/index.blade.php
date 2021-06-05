@extends('home')
@section('page-content')
@include('user.create')
<section id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title"><h4>Danh sách tài khoản</h4></div>
                <div style="display: inline-block;">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalStoreUser"><i class="fa fa-plus"></i> Thêm tài khoản</button>
                </div>
                <input type="text" class="form-control col-lg-6" placeholder="Tìm kiếm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listUser as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>0123456789</td>
                                        <td><span class="badge badge-primary">Sale</span></td>
                                        <td>
                                            @if ($item->status == 0)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Offline</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="http://" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="http://" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            <a href="http://" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        {{ $listUser->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection