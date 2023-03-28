@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Noteify @endslot
        @slot('title') Dashboard @endslot
    @endcomponent

    <dashboard />
@endsection
@section('script')

@endsection
