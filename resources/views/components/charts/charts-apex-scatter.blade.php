@extends('layouts.master')
@section('title', 'Scatter')
@push('vendor-script')
    <!-- apexcharts -->
    <script src="{{ asset('') }}assets/libs/apexcharts/apexcharts.min.js"></script>
@endpush

@push('page-script')
    <!-- scatter charts init -->
    <script src="{{ asset('') }}assets/js/pages/apexcharts-scatter.init.js"></script>
@endpush

@section('content')
    <!-- start page title -->
    @include('layouts.breadcrumb', ['level_1' => 'Charts', 'level_2' => 'ApexCharts'])
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Scatter Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_scatter" data-colors='["--vz-primary", "--vz-success", "--vz-warning"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Scatter - Datetime Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="datetime_scatter"
                        data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-warning", "--vz-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Scatter Images Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="images_scatter" data-colors='["--vz-primary", "--vz-danger"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
