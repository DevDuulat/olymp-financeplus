@extends('layouts.app')

@section('content')
    <section>
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 lg:text-3xl dark:text-white">Часто задаваемые вопросы</h1>

            <hr class="my-6 border-gray-200 dark:border-gray-700">

            <div>
                @foreach($faqs as $faq)
                    <div>
                        <button class="faq-question flex items-center focus:outline-none" data-target="faq-{{ $faq->id }}">
                            <svg class="faq-icon flex-shrink-0 w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path class="minus-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                <path class="plus-icon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <h1 class="mx-4 text-xl text-gray-700 dark:text-white">{{ $faq->question }}</h1>
                        </button>

                        <div id="faq-{{ $faq->id }}" class="faq-answer flex mt-8 md:mx-10">
                            <span class="border border-blue-500"></span>
                            <p class="max-w-3xl px-4 text-gray-500 dark:text-gray-300">
                                {{ $faq->answer }}
                            </p>
                        </div>
                    </div>

                    <hr class="my-8 border-gray-200 dark:border-gray-700">
                @endforeach
            </div>
        </div>
    </section>
    <script src="{{ asset('js/faq.js') }}"></script>
@endsection
