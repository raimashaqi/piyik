$(document).ready(function() {
    function createCircleProgress() {
        $('.progress').each(function() {
            const $this = $(this);
            const percentage = $this.data('percentage');
            const color = $this.data('color');
            
            // Set initial progress value to 0
            $this.find('.progress-value').text('0%');
            
            // Create SVG
            const svgHTML = `
                <svg viewBox="0 0 36 36" class="circular-chart">
                    <path class="circle"
                        d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                        fill="none"
                        stroke="${color}"
                        stroke-width="2.5"
                        stroke-dasharray="0, 100"
                    />
                </svg>
            `;
            
            $this.append(svgHTML);
        });
    }

    function animateProgress() {
        $('.progress').each(function() {
            const $this = $(this);
            const percentage = $this.data('percentage');
            const $circle = $this.find('.circle');
            const $value = $this.find('.progress-value');
            
            // Animate the circle
            $circle.css('stroke-dasharray', `${percentage}, 100`);
            
            // Animate the number
            $({ Counter: 0 }).animate({
                Counter: percentage
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $value.text(Math.ceil(this.Counter) + '%');
                }
            });
        });
    }

    // Create circles first
    createCircleProgress();

    // Add scroll trigger for animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateProgress();
                observer.unobserve(entry.target);
            }
        });
    });

    // Observe the progress section
    observer.observe($('.circle-progress').parent()[0]);
}); 