@extends('layouts.master')
@section('title', 'Radar')
@push('vendor-script')
    <!-- apexcharts -->
    <script src="{{ asset('') }}assets/libs/apexcharts/apexcharts.min.js"></script>
@endpush

@push('page-script')
    <!-- radarcharts init -->
    <script src="{{ asset('') }}assets/js/pages/apexcharts-radar.init.js"></script>
@endpush

@section('content')
    <!-- start page title -->
    @include('layouts.breadcrumb', ['level_1' => 'Charts', 'level_2' => 'ApexCharts'])
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Radar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_radar" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Radar Chart - Multiple series</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multi_radar" data-colors='["--vz-danger", "--vz-success", "--vz-primary"]' class="apex-charts"
                        dir="ltr"></div>
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
                    <h4 class="card-title mb-0">Radar Chart - Polygon Fill</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="polygon_radar" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
