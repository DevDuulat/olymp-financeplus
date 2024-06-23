<style>
    .card-header {
        background-color: #f8f9fa;
        cursor: pointer;
    }
    .card-header:hover {
        background-color: #e2e6ea;
    }
    .btn-link {
        text-decoration: none !important;
        color: #007bff;
    }
    .btn-link:hover {
        color: #0056b3;
    }
    .card {
        border: none;
        margin-bottom: 10px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        background-color: #fff;
        border-top: 1px solid #e2e6ea;
        border-radius: 0 0 8px 8px;
    }
    .faq-section {
        padding: 2rem 0;
    }
</style>
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h1 class="h3 font-weight-bold mb-3">FAQ</h1>
                <p class="mb-4">
                    Здесь вы найдете ответы на часто задаваемые вопросы о нашем сервисе обмена криптовалют. Если у вас возникли дополнительные вопросы, не стесняйтесь задать их нам.
                </p>
                <a class="btn btn-outline-primary d-inline-flex align-items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                    Задать вопрос
                </a>
            </div>

            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    @foreach ($faqs as $faq)
                        <div class="card">
                            <div class="card-header" id="heading{{ $loop->index }}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left @if(!$loop->first) collapsed @endif" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="@if($loop->first) true @else false @endif" aria-controls="collapse{{ $loop->index }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{ $loop->index }}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $loop->index }}" data-parent="#faqAccordion">
                                <div class="card-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('#faqAccordion').on('show.bs.collapse', function (e) {
        $(e.target).prev('.card-header').find('.faq-icon').toggleClass('show hide');
    });

    $('#faqAccordion').on('hide.bs.collapse', function (e) {
        $(e.target).prev('.card-header').find('.faq-icon').toggleClass('show hide');
    });
</script>
