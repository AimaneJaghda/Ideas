<style>
    .pagination{
        justify-content: center
    }
</style>


@extends('layout.layout')


@section('content')
    <div class="row">
        @include('shared.left-sidebar')
        <div class="col-6">
            @include('shared.success-message')
            @include('shared.submit-idea')
            <hr>
                <div class="mt-3">
                    @include('shared.idea-card')
                </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
