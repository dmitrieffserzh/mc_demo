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
            <h2 class="section__title">То, что мы делаем</h2>
            <p class="section__subtitle">Основные услуги нашей компании</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Кто мы и как работаем</h2>
            <p class="section__subtitle">Коротко о нас и этапах сотрудничества</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Почему мы?</h2>
            <p class="section__subtitle">Наши основные преимущества</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Наши работы</h2>
            <p class="section__subtitle">Список некоторых проектов выполненных нашей компанией</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Нас рекомендуют</h2>
            <p class="section__subtitle">Несколько отзывов от наших клиентов</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Наши контакты</h2>
            <p class="section__subtitle">Получите бесплатную консультацию специалиста</p>
        </div>
    </section>
@endsection
