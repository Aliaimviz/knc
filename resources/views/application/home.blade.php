@extends('layouts.app')

@section('content')
    
    @if(count($page))
        {!! $page->content !!}
    @endif
@endsection('content')