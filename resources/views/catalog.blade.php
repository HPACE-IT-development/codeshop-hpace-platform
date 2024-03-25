@extends('layouts.main')
@section('content')
    <header class="page-header">
        <h1>Каталог</h1>
    </header>
    <main class="main-catalog">
        <aside>
            <form method="get" class="row g-1">
                <h2>Фильтры</h2>
                <div class="filter-block">
                    <h3><label for="customRange3" class="form-label">Цена</label></h3>
                    <input name="filter[price]" type="range" class="form-range"
                           min="{!! \App\Models\Project::all()->min('price') !!}}"
                           max="{!! \App\Models\Project::all()->max('price') !!}}" step="1" id="customRange3">
                    <div class="row g-3">
                        <div class="col-sm">
                            <input type="number" class="form-control" name="filter[price][min]" placeholder="Мин"
                                   aria-label="Min">
                        </div>
                        <div class="col-sm">
                            <input type="number" class="form-control" name="filter[price][max]" placeholder="Макс"
                                   aria-label="Max">
                        </div>
                    </div>
                </div>
                <div class="filter-block">
                    <h3>Категории</h3>
                    <div class="filter-sub-block">
                        @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input col" type="checkbox" value="{{ $category->id }}"
                                       id="flexCheckDefault" name="filter[categories][]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $category->title }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Отфильтровать</button>
            </form>
        </aside>
        <div class="product-grid">
            <div class="products-list col-8">
                @if($products->isNotEmpty())
                    @foreach($products as $product)
                        <a class="product-card" href="{{ route('product', $product->id) }}">
                            <img src="{{ Vite::asset('resources/assets/products/dt.png') }}" alt="product-card">
                            <h3>{{ $product->title}}</h3>
                            <p class="card-price">{{ $product->price }}</p>
                        </a>
                    @endforeach
                @else
                    <p class="not-found-message">К сожалению, по вашему запросу ничего не найдено</p>
                @endif
            </div>
            <div class="pagination">
                {{ $products->links() }}
            </div>
        </div>
    </main>
@endsection
