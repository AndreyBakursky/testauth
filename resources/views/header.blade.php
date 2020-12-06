<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Тестовое задание</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Главная</a>
    </nav>
    @if (Route::has('login'))
            @auth
                <nav class="my-2 my-md-0 mr-md-3">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </nav>
            @else
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="btn btn-outline-success" href="{{ route('login') }}">Войти</a>
                </nav>
                <nav class="my-2 my-md-0 mr-md-3">
                    @if (Route::has('register'))
                        <a class="btn btn-outline-primary" href="{{ route('register') }}" class="my-2 my-md-0 mr-md-3">Зарегестрироваться</a>
                    @endif
                </nav>
            @endauth
        </div>
    @endif
</div>
