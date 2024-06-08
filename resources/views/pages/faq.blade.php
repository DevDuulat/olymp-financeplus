@extends('layouts.app')

@section('content')
    <section>
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 lg:text-3xl light:text-white">Часто задаваемые вопросы</h1>

            <hr class="my-6 border-gray-200 light:border-gray-700">

            <div>
                <div>
                    <button class="flex items-center focus:outline-none">
                        <svg class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>

                        <h1 class="mx-4 text-xl text-gray-700 light:text-white">Как я могу оплатить услугу ?</h1>
                    </button>

                    <div class="flex mt-8 md:mx-10">
                        <span class="border border-blue-500"></span>

                        <p class="max-w-3xl px-4 text-gray-500 light:text-gray-300">
                            Оплатить услугу вы можете различными способами, включая банковские карты, электронные кошельки и криптовалюты. Мы обеспечиваем безопасные транзакции и защиту ваших данных.
                        </p>
                    </div>
                </div>

                <hr class="my-8 border-gray-200 light:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 light:text-white">Чего ожидать на первой консультации ?</h1>
                    </button>
                </div>

                <hr class="my-8 border-gray-200 light:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 light:text-white">Каковы ваши часы работы ?</h1>
                    </button>
                </div>

                <hr class="my-8 border-gray-200 light:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 light:text-white">Нужна ли мне рекомендация ?</h1>
                    </button>
                </div>

                <hr class="my-8 border-gray-200 light:border-gray-700">

                <div>
                    <button class="flex items-center focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 х-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>

                        <h1 class="mx-4 text-xl text-gray-700 light:text-white">Покрываются ли расходы на услуги частной медицинской страховкой ?</h1>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
