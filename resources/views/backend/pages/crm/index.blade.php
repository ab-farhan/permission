@extends('backend.layouts.app')
@section('title','Admin Dashboard')
@section('crm','active show')

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
                    <h6 class="card-title">All CRM</h6>
                    <a href="{{route('admin.crm.create')}}" class="btn btn-sm btn-success"><i data-feather="plus"></i> Add CRM</a>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Name</th>
                                <th> Email</th>
                                <th> Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crms as  $crm)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$crm->name}}</td>
                                <td>{{$crm->email}}</td>
                                <td>{{$crm->phone}}</td>
                                <td>
                                    <div class="">
                                        <a href="{{route('admin.crm.edit',['id'=>$crm->id])}}"  class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></a>
                                        <a href=""  class="btn btn-sm  btn-warning ">Deactive</a>

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
