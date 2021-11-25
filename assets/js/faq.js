document.querySelectorAll('.faq-item').forEach(function (faq) {
    faq.addEventListener('click', function (e) {
        faq.classList.toggle('active')
    })
})
