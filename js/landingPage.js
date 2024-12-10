
// Heroes section
document.addEventListener('DOMContentLoaded', function() {
    let currentSlide = 1;
    const totalSlides = 2;

    function changeSlide(direction) {
        const currentElement = document.getElementById(`slide${currentSlide}`);
        currentElement.classList.remove('active');
        
        currentSlide = currentSlide + direction;
        if (currentSlide > totalSlides) currentSlide = 1;
        if (currentSlide < 1) currentSlide = totalSlides;
        
        const nextElement = document.getElementById(`slide${currentSlide}`);
        nextElement.classList.add('active');
    }

    // Event listeners untuk tombol panah
    document.querySelector('.arrow-left').addEventListener('click', function() {
        changeSlide(-1);
    });

    document.querySelector('.arrow-right').addEventListener('click', function() {
        changeSlide(1);
    });
});