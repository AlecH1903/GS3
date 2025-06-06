 const track = document.getElementById('carouselTrack1');
    const slides = document.querySelectorAll('.carousel-slide1');
    const prevBtn = document.querySelector('.prev1');
    const nextBtn = document.querySelector('.next1');
    let index = 0;

    function showSlide(i) {
      const slideWidth = slides[0].clientWidth;
      track.style.transform = `translateX(-${slideWidth * i}px)`;
    }

    nextBtn.addEventListener('click', () => {
      index = (index + 1) % slides.length;
      showSlide(index);
    });

    prevBtn.addEventListener('click', () => {
      index = (index - 1 + slides.length) % slides.length;
      showSlide(index);
    });

    // Auto slide
    setInterval(() => {
      index = (index + 1) % slides.length;
      showSlide(index);
    }, 8000);