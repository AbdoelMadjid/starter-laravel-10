<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">@yield('title', 'My App')</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @isset($level_1)
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $level_1 }}</a></li>
                    @endisset
                    @isset($level_2)
                        <li class="breadcrumb-item">{{ $level_2 }}
                        </li>
                    @endisset
                    @isset($level_3)
                        <li class="breadcrumb-item">{{ $level_3 }}
                        </li>
                    @endisset
                    <li class="breadcrumb-item active">@yield('title', 'My App')</li>
                </ol>
            </div>

        </div>
    </div>
</div>
