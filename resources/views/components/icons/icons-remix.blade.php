@extends('layouts.master')
@section('title', 'Remix')
@push('page-script')
    <!-- materialdesign icon js-->
    <script src="{{ asset('') }}assets/js/pages/remix-icons-listing.js"></script>
@endpush

@section('content')
    <!-- start page title -->
    @include('layouts.breadcrumb', ['level_1' => 'Icons'])
    <!-- end page title -->

    <div class="row">

    </div><!-- end row -->

    <div class="row">
        <div class="col-12" id="icons"></div> <!-- end col-->
    </div><!-- end row -->
@endsection
