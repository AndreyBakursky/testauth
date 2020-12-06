<x-app-layout>
    @section('title-block')Домашняя@endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Домашняя страница') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-8 mt-7">
                <h3>Приветствую авторизованного пользователя!</h3>
                <div class="mt-3">
                    <p>В верхнем правом углу ты можешь открыть интерактивное меню с возможностью перехода к личным настройкам, а также выход из профиля.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
