@extends('page')

@section('article')
<div class="row about">
    <div class="tile">
        <a href="https://github.com/krisanalfa/bono-blade">
            <img src="{{ Theme::base('images/icons/png/Octocat.png') }}" alt="Compas" class="tile-image big-illustration">
        </a>
        <!-- Another ternary operator -->
        <h3 class="tile-title">{{ $name or 'John Doe' }}</h3>
        <p>
            CodeFest 2014 – <a href="http://xinix.co.id">PT. Sagara Xinix Solusitama</a>
        </p>
    </div>
</div>
@endsection

@section('footer')
@endsection
