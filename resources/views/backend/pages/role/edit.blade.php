@extends('backend.layouts.app')
@section('title', 'Admin Dashboard')
@section('role', 'active show')

@push('css')
@endpush

@section('app_content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card offset-lg-3">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Edit Role</h6>

                    <form class="forms-sample" method="POST" action="{{route('admin.role.update',['id'=>$role->id])}}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Role Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name') ?? $role->name }}" name="name" id="name" autocomplete="off"
                                placeholder="Role Name">
                            @if ($errors->has('name'))

                                <label id="name-error" class="error invalid-feedback" for="name">{{ $errors->first('name') }}</label>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
