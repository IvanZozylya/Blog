@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')
    <br><br><br>
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas">
        <h4>About</h4>
        <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em>
            Accusantium, ad aliquam error facere hic ipsa iusto libero nam non numquam pariatur porro
            <em>praesentium quaerat quam quia vero voluptas voluptate?</em> Beatae.</p>
    </div>
@endsection

@section('content')
    @include('default.content')
@endsection