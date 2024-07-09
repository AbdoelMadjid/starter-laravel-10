@extends('layouts.auth-cover')
@section('title', 'Log Out')
@section('content-cover')
    <div class="col-lg-6">
        <div class="p-lg-5 p-4 text-center">
            <lord-icon src="https://cdn.lordicon.com/hzomhqxz.json" trigger="loop" colors="primary:#405189,secondary:#08a88a"
                style="width:180px;height:180px"></lord-icon>

            <div class="mt-4 pt-2">
                <h5>You are Logged Out</h5>
                <p class="text-muted">Thank you for using <span class="fw-semibold">velzon</span> admin template</p>
                <div class="mt-4">
                    <a href="auth-signin-cover" class="btn btn-success w-100">Sign
                        In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
@endsection
