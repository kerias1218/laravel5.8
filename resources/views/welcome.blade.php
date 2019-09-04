@extends('layouts.master')

@section('content')
    @include('partials.footer')
@endsection

@section('script')
    <script>

        alert('자식뷰의 script welcome')
    </script>

@endsection