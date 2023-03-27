@extends('layouts.master')
@section('title') Storage @endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Invoicify @endslot
        @slot('title') Storage @endslot
    @endcomponent
    <storage :user="{{Auth::user()}}"></storage>
@endsection
@section('script')

@endsection
