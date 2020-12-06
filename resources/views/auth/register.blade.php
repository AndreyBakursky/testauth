<title>Регистрация</title>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-3">
                <x-jet-label for="firstname" value="{{ __('Имя') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            </div>

            <div class="mt-3">
                <x-jet-label for="lastname" value="{{ __('Фамилия') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            </div>

            <div class="mt-3">
                <x-jet-label for="phone" value="{{ __('Телефон') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-3">
                <x-jet-label for="invitename" value="{{ __('Кто пригласил') }}" />
                <x-jet-input id="invitename" class="block mt-1 w-full" type="text" name="invitename" :value="old('invitename')" required autofocus autocomplete="invitename" />
            </div>

            <div class="mt-3">
                <x-jet-label for="organization" value="{{ __('Организация') }}" />
                <x-jet-input id="organization" class="block mt-1 w-full" type="text" name="organization" :value="old('organization')" required autofocus autocomplete="organization" />
            </div>

            <div class="mt-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-3">
                <x-jet-label for="password" value="{{ __('Пароль') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-3">
                <x-jet-label for="password_confirmation" value="{{ __('Подтвердите пароль') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Зарегистрироваться') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
