document.addEventListener('DOMContentLoaded', function () {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(button => {
        button.addEventListener('click', function () {
            const target = document.getElementById(this.dataset.target);
            target.classList.toggle('hidden');

            const icon = this.querySelector('.faq-icon');
            icon.querySelector('.minus-icon').classList.toggle('hidden');
            icon.querySelector('.plus-icon').classList.toggle('hidden');
        });
    });
});
