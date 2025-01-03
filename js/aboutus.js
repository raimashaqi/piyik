document.addEventListener('DOMContentLoaded', function() {
    // Counter Animation
    function animateCounter() {
        const counters = document.querySelectorAll('.fables-counter-value');
        const decimalCounters = document.querySelectorAll('.fables-counter-value-decimal');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            let current = 0;
            const increment = target / 50;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });

        decimalCounters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-count'));
            let current = 0;
            const increment = target / 50;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = current.toFixed(1) + '%';
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target.toFixed(1) + '%';
                }
            };
            
            updateCounter();
        });
    }

    // Progress Circle Animation
    function animateCircleProgress() {
        const progressBars = document.querySelectorAll('.progress-bar');
        
        progressBars.forEach(bar => {
            const percentage = bar.getAttribute('data-percentage');
            const color = bar.getAttribute('data-color');
            const numberElement = bar.parentElement.querySelector('.progress-number');
            
            bar.style.setProperty('--color', color);
            
            let current = 0;
            const increment = percentage / 50;
            
            const updateProgress = () => {
                if (current < percentage) {
                    current += increment;
                    const progress = (current * 3.6) + 'deg';
                    bar.style.setProperty('--progress', progress);
                    numberElement.textContent = `${Math.round(current)}%`;
                    requestAnimationFrame(updateProgress);
                } else {
                    numberElement.textContent = `${percentage}%`;
                }
            };
            
            updateProgress();
        });
    }

    // Intersection Observer for animations
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('fables-counter-section')) {
                    animateCounter();
                } else if (entry.target.classList.contains('circle-progress')) {
                    animateCircleProgress();
                }
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, {
        threshold: 0.5
    });

    // Observe elements
    const counterSection = document.querySelector('.fables-counter-section');
    const progressSection = document.querySelector('.circle-progress');

    if (counterSection) observer.observe(counterSection);
    if (progressSection) observer.observe(progressSection);
}); 