@extends('backend.layouts.app')
@section('title', 'Admin Dashboard')
@section('crm', 'active show')

@push('css')
@endpush

@section('app_content')
    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card offset-lg-1">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Create CRM</h6>
                    <hr class="my-2 mb-4">
                    <form class="forms-sample" method="POST" action="{{ route('admin.crm.store') }}" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class=" col-lg-6 mb-3">
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" id="name" autocomplete="off"
                                    placeholder="Role Name">
                                @if ($errors->has('name'))
                                    <label id="name-error" class="error invalid-feedback"
                                        for="name">{{ $errors->first('name') }}</label>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="form-label"> Email</label>
                                <input type="email" required
                                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" id="email" autocomplete="off"
                                    placeholder=" email@gmail.com">
                                @if ($errors->has('email'))
                                    <label id="name-error" class="error invalid-feedback"
                                        for="email">{{ $errors->first('email') }}</label>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="phone" class="form-label"> Phone</label>
                                <input type="phone" maxlength="11" required
                                    class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                                    value="{{ old('phone') }}" id="email" autocomplete="off" placeholder="01xxxxxxxxx">
                                @if ($errors->has('phone'))
                                    <label id="name-error" class="error invalid-feedback"
                                        for="phone">{{ $errors->first('phone') }}</label>
                                @endif
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="mb-3">
                                    <label for="role" class="form-label">Select a Role For Crm</label>
                                    <select class="form-select {{ $errors->has('role') ? ' is-invalid' : '' }}" id="role" name="role">
                                        <option selected="" disabled="">Select Crm</option>
                                        @foreach ($roles as $role)

                                        <option value="{{$role->id}}" {{ old('role') == $role->id ? "selected" : "" }}>{{$role->name}}</option>
                                        @endforeach

                                    </select>
                                @if ($errors->has('role'))
                                    <label id="name-error" class="error invalid-feedback"
                                        for="role">{{ $errors->first('crm') }}</label>
                                @endif
                                </div>
                            </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"
                                             placeholder="********" minlength="8" name="password" required>
                                        @if ($errors->has('password'))
                                            <label id="name-error" class="error invalid-feedback"
                                                for="password">{{ $errors->first('password') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation"
                                            name="password_confirmation" required>
                                        @if ($errors->has('password_confirmation'))
                                            <label id="name-error" class="error invalid-feedback"
                                                for="password">{{ $errors->first('password') }}</label>
                                        @endif
                                    </div>
                                </div>


                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
