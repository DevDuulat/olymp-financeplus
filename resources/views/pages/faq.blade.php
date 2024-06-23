@extends('layouts.app')

@section('content')
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row gy-5 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded" loading="lazy" src="./assets/img/faq-img-1.png" alt="How can we help you?">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-11">
                            <h2 class="h1 mb-3">How can we help you?</h2>
                            <p class="lead fs-4 text-secondary mb-5">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</p>
                            <div class="accordion accordion-flush" id="accordionExample">
                                @foreach($faqs as $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-{{ $faq->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="true" aria-controls="collapse-{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse-{{ $faq->id }}" class="accordion-collapse collapse show" aria-labelledby="heading-{{ $faq->id }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $faq->answer !!} <!-- Assuming answer might have HTML content -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
