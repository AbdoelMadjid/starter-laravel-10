@extends('layouts.auth-cover')
@section('title', 'Successfully')
@section('content-cover')
    <div class="col-lg-6">
        <div class="p-lg-5 p-4 text-center">
            <div class="avatar-lg mx-auto mt-2">
                <div class="avatar-title bg-light text-success display-3 rounded-circle">
                    <i class="ri-checkbox-circle-fill"></i>
                </div>
            </div>
            <div class="mt-4 pt-2">
                <h4>Well done !</h4>
                <p class="text-muted mx-4">Aww yeah, you successfully read this important
                    message.</p>
                <div class="mt-4">
                    <a href="auth-signin-basic" class="btn btn-success w-100">Back to
                        Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
@endsection
