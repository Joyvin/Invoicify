@extends('layouts.master')
@section('title')
    @lang('translation.Boxed_Width')
@endsection
@section('body')

    <body data-keep-enlarged="true" class="vertical-collpsed" data-layout-size="boxed">
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle') Layouts @endslot
            @slot('title') Boxed Width @endslot
        @endcomponent

    @endsection
    @section('script')

    @endsection
