@extends('layouts.main')

@section('content')
    <main>
        <header>
            <!-- БАННЕР -->
            <div class="banner">
                <h1>Hpace Shop</h1>
                <p>Доверьте IT-работу профессионалам и забудьте о бюрократии и постоянном напоминании.
                    Мы сами сообщим вам, когда будет результат работ и напомним о проверке.</p>
                <button class="action-btn" href="{{ route('catalog')}}">Изучить товары</button>
            </div>
        </header>
        <!-- ТОП ТОВАРОВ -->
        <div class="main-page-block">
            <h2>Топ товаров</h2>
            <div class="products-list">
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>

                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
                <a class="product-card" href="">
                    <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                    <h3>Кто-то что-что</h3>
                    <p class="card-price">50000 p</p>
                </a>
            </div>
            <button class="action-btn">Перейти в Каталог</button>
        </div>

        <!-- ГАРАНТИИ -->

        <div class="main-page-block">
            <h2>Гарантии</h2>
            <div class="guarantees-list">
                <div class="guarantees-card">
                    <h3>01</h3>
                    <h3>Поддержка</h3>
                    <p>После покупки наших продуктов вы не останетесь с проблемой один на один</p>
                </div>
                <div class="guarantees-card">
                    <h3>02</h3>
                    <h3>Качественный код</h3>
                    <p>Тут какой-то крутой текст о том какой крутой у нас код</p>
                </div>
                <div class="guarantees-card">
                    <h3>03</h3>
                    <h3>Качественный код</h3>
                    <p>Тут какой-то крутой текст о том какой крутой у нас код</p>
                </div>
                <div class="guarantees-card">
                    <h3>04</h3>
                    <h3>Качественный код</h3>
                    <p>Тут какой-то крутой текст о том какой крутой у нас код</p>
                </div>
            </div>
        </div>

        <!-- FQA-->

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Вопрос 1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Вопрос 2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Вопрос 3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </main>
@endsection
