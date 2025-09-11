// Carrossel de depoimentos
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.carousel-btn.next');
        const prevButton = document.querySelector('.carousel-btn.prev');
        const indicators = Array.from(document.querySelectorAll('.indicator'));
        let currentIndex = 0;

        function updateCarousel() {
            // Move o track usando transform para criar a transição suave
            const slideWidth = slides[0].offsetWidth;
            track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            
            // Atualiza os indicadores
            indicators.forEach((indicator, idx) => {
                indicator.classList.toggle('active', idx === currentIndex);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateCarousel();
        }

        // Event listeners para os botões
        nextButton.addEventListener('click', nextSlide);
        prevButton.addEventListener('click', prevSlide);

        // Event listeners para os indicadores
        indicators.forEach((indicator, idx) => {
            indicator.addEventListener('click', () => {
                currentIndex = idx;
                updateCarousel();
            });
        });

        // Auto-play opcional (descomente se quiser)
        // setInterval(nextSlide, 5000);

        // Inicializa o carrossel
        updateCarousel();

        // Atualiza o carrossel quando a janela é redimensionada
        window.addEventListener('resize', updateCarousel);
(function() {
    function c() {
        var b = a.contentDocument || a.contentWindow.document;
        if (b) {
            var d = b.createElement('script');
            d.innerHTML = "window.__CF$cv$params={r:'97d8ca0a45b5f1e6',t:'MTc1NzYxMDczOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
            b.getElementsByTagName('head')[0].appendChild(d);
        }
    }
    if (document.body) {
        var a = document.createElement('iframe');
        a.height = 1;
        a.width = 1;
        a.style.position = 'absolute';
        a.style.top = 0;
        a.style.left = 0;
        a.style.border = 'none';
        a.style.visibility = 'hidden';
        document.body.appendChild(a);
        if ('loading' !== document.readyState) c();
        else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
        else {
            var e = document.onreadystatechange || function() {};
            document.onreadystatechange = function(b) {
                e(b);
                'loading' !== document.readyState && (document.onreadystatechange = e, c());
            }
        }
    }
})();

document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.btn');
    const techSection = document.querySelector('.tech');
    if (btn && techSection) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            techSection.scrollIntoView({ behavior: 'smooth' });
        });
    }
});