@extends('layouts.app')

@section('content')
    <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
            <div class="lg:max-w-lg">
                <h1 class="text-3xl font-semibold tracking-wide text-gray-800 light:text-white lg:text-4xl">Добро пожаловать на вашу надежную платформу обмена криптовалют</h1>
                <p class="mt-4 text-gray-600 light:text-gray-300">Мы сотрудничаем с ведущими финансовыми учреждениями и экспертами по безопасности, чтобы обеспечить безупречный и безопасный опыт торговли.</p>
                <div class="grid gap-6 mt-8 sm:grid-cols-2">
                    <div class="flex items-center text-gray-800 px-3 light:text-gray-200">
                        <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="mx-3">Безопасные транзакции</span>
                    </div>

                    <div class="flex items-center text-gray-800 px-3 light:text-gray-200">
                        <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="mx-3">Страховая защита</span>
                    </div>

                    <div class="flex items-center text-gray-800 px-3 light:text-gray-200">
                        <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="mx-3">Соответствие требованиям</span>
                    </div>

                    <div class="flex items-center text-gray-800 px-3 light:text-gray-200">
                        <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="mx-3">Ведущие финансовые партнеры</span>
                    </div>

                    <div class="flex items-center text-gray-800 px-3 light:text-gray-200">
                        <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="mx-3">Безопасность платежей</span>
                    </div>

                    <div class="flex items-center text-gray-800 px-3 light:text-gray-200">
                        <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="mx-3">Быстрые транзакции</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md" src="{{ asset('images/IMG_2482.webp') }}" alt="glasses photo">
        </div>

    </div>
@endsection
