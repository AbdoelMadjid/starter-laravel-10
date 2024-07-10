@extends('layouts.auth-cover')
@section('title', 'Two Step')
@section('content-cover')
    <div class="col-lg-6">
        <div class="p-lg-5 p-4">
            <div>
                <h5 class="text-primary">Lock Screen</h5>
                <p class="text-muted">Enter your password to unlock the screen!</p>
            </div>
            <div class="user-thumb text-center">
                <img src="{{ asset('') }}assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail avatar-lg"
                    alt="thumbnail">
                <h5 class="mt-3">Anna Adame</h5>
            </div>

            <div class="mt-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                    </div>
                    <div class="mb-2 mt-4">
                        <button class="btn btn-success w-100" type="submit">Unlock</button>
                    </div>
                </form><!-- end form -->
            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Not you ? return <a href="auth-signin-cover"
                        class="fw-semibold text-primary text-decoration-underline">
                        Signin</a></p>
            </div>
        </div>
    </div>
    <!-- end col -->
@endsection
