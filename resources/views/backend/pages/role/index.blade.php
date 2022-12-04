@extends('backend.layouts.app')
@section('title','Admin Dashboard')
@section('role','active show')

@push('css')

@endpush

@section('app_content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                @if(session()->has('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                    </div>

                @endif



                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <h4 class="my-0 text-uppercase">All Roles</h4>
                    <a href="{{route('admin.role.create')}}" class="btn btn-sm btn-success"><i data-feather="plus"></i> Add Role</a>
                </div>
                <hr class=" mb-3">
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as  $role)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$role->name}}</td>
                                <td>
                                    <div class="">
                                        <a href="{{route('admin.role.edit',['id'=>$role->id])}}"  class="btn btn-sm btn-warning"><i data-feather="edit-3"></i> <i class="feather feather-edit"></i></a>
                                        <a href="{{route('admin.permission.assign',['id'=>$role->id])}}"  class="btn btn-sm  btn-primary ">Permision</a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush
