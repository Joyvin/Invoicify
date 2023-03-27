@extends('layouts.master')
@section('title')
    @lang('translation.Dark_Sidebar')
@endsection
@section('body')

    <body data-sidebar="dark">
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle') Vertical @endslot
            @slot('title') Dark Sidebar @endslot
        @endcomponent

    @endsection
    @section('script')

    @endsection
