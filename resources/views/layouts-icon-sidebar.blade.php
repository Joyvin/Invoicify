@extends('layouts.master')
@section('title')
    @lang('translation.Icon_Sidebar')
@endsection
@section('body')

    <body data-keep-enlarged="true" class="vertical-collpsed">
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle') Vertical @endslot
            @slot('title') Icon Sidebar @endslot
        @endcomponent

    @endsection
    @section('script')

    @endsection
