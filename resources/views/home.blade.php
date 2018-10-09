@extends('main.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @include('main.sections.section_main')

    <section class="section">
        <div class="container">
            <h2 class="section__title">Наши услуги</h2>
        </div>
    </section>
    <section class="section"></section>
    <section class="section"></section>
    <section class="section"></section>
    
@endsection
