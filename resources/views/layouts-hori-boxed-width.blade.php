@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Boxed_Width')
@endsection
@section('body')

    <body data-layout="horizontal" data-topbar="colored" data-layout-size="boxed">
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle') Horizontal @endslot
            @slot('title') Boxed Width @endslot
        @endcomponent

    @endsection
    @section('script')

    @endsection
