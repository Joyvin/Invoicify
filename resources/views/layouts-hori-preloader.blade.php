@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Preloader')
@endsection
@section('body')

    <body data-layout="horizontal" data-topbar="colored">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <i class="uil-shutter-alt spin-icon"></i>
                </div>
            </div>
        </div>
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle') Horizontal @endslot
            @slot('title') Preloader @endslot
        @endcomponent

    @endsection
    @section('script')

    @endsection
