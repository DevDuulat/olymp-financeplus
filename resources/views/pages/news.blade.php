@extends('layouts.app')

@section('content')
    <section class="">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl light:text-white">Новости</h1>

                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Последние обновления и новости из мира криптовалют. Будьте в курсе всех событий и изменений.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="https://placehold.co/600x400" alt="Новость 1">
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 light:text-white">
                        Все, что вы хотели знать о криптовалютах
                    </h1>

                    <hr class="w-32 my-6 text-blue-500">

                    <p class="text-sm text-gray-500 light:text-gray-400">
                        Узнайте все последние новости и тренды в мире криптовалют. Будьте в курсе изменений и нововведений.
                    </p>

                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Читать далее</a>
                </div>

                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="https://placehold.co/600x400" alt="Новость 2">
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 light:text-white">
                        Особенности и преимущества нашей платформы
                    </h1>

                    <hr class="w-32 my-6 text-blue-500">

                    <p class="text-sm text-gray-500 light:text-gray-400">
                        Узнайте обо всех возможностях и преимуществах нашей платформы для обмена криптовалют. Мы предлагаем лучшие условия для вас.
                    </p>

                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Читать далее</a>
                </div>

                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="https://placehold.co/600x400" alt="Новость 3">
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 light:text-white">
                        Какие услуги вы получаете от нашей платформы
                    </h1>

                    <hr class="w-32 my-6 text-blue-500">

                    <p class="text-sm text-gray-500 light:text-gray-400">
                        Узнайте, какие услуги предлагает наша платформа для удобного и безопасного обмена криптовалют. Мы работаем для вас.
                    </p>

                    <a href="#" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Читать далее</a>
                </div>
            </div>
        </div>
    </section>
@endsection
