@extends('layouts.layout')

@section('content')
    @foreach ($contents as $key => $item)
        @switch($key)
            @case(0)
                @include('sections.section_one')
                @break
            @case(1)
                @include('sections.section_two')
                @break
            @case(2)
                @include('sections.section_three')
                @break
            @case(3)
                @include('sections.section_four')
                @break
            @case(4)
                @include('sections.section_four')
                @break
            @case(5)
                @include('sections.section_five')
                @break
            @default
                
        @endswitch
    @endforeach
@endsection
