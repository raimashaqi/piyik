(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    // Kelembaban Chart
var ctx1 = $("#kelembaban-chart").get(0).getContext("2d");
var myChart1;

const kelembaban_data = {
    detik: {
        labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
        data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
    },
    menit: {
        labels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55],
        data: [5, 6, 7, 8, 8, 9, 9, 10, 11, 12, 13]
    },
    jam: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        data: [3, 4, 5, 6, 7, 7, 8, 8, 9, 9, 10]
    },
    hari: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        data: [2, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8]
    }
};

function updateKelembabanChart(timeFilter) {
    if (myChart1) {
        myChart1.destroy();
    }

    myChart1 = new Chart(ctx1, {
        type: "line",
        data: {
            labels: kelembaban_data[timeFilter].labels,
            datasets: [{
                label: "Waktu",
                fill: true,
                backgroundColor: "rgba(0, 156, 255, .3)",
                borderColor: "rgba(0, 156, 255, 1)",
                data: kelembaban_data[timeFilter].data
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

// DHT Chart
var ctx2 = $("#dht-chart").get(0).getContext("2d");
var myChart2;

const dht_data = {
    detik: {
        labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
        data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
    },
    menit: {
        labels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55],
        data: [5, 6, 7, 8, 8, 9, 9, 10, 11, 12, 13]
    },
    jam: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        data: [3, 4, 5, 6, 7, 7, 8, 8, 9, 9, 10]
    },
    hari: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        data: [2, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8]
    }
};

function updateDHTChart(timeFilter) {
    if (myChart2) {
        myChart2.destroy();
    }

    myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: dht_data[timeFilter].labels,
            datasets: [{
                label: "Waktu",
                fill: true,
                backgroundColor: "rgba(0, 156, 255, .3)",
                borderColor: "rgba(0, 156, 255, 1)",
                data: dht_data[timeFilter].data
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

// Thermo Chart (unchanged from your original code)
var ctx3 = $("#thermo-chart").get(0).getContext("2d");
var myChart3;

const chartData = {
    detik: {
        labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
        data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
    },
    menit: {
        labels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55],
        data: [5, 6, 7, 8, 8, 9, 9, 10, 11, 12, 13]
    },
    jam: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        data: [3, 4, 5, 6, 7, 7, 8, 8, 9, 9, 10]
    },
    hari: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        data: [2, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8]
    }
};

function updateChart(timeFilter) {
    if (myChart3) {
        myChart3.destroy();
    }

    myChart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: chartData[timeFilter].labels,
            datasets: [{
                label: "Waktu",
                fill: true,
                backgroundColor: "rgba(0, 156, 255, .3)",
                borderColor: "rgba(0, 156, 255, 1)",
                data: chartData[timeFilter].data
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

// Initialize all charts with "detik" data
updateKelembabanChart('detik');
updateDHTChart('detik');
updateChart('detik');

// Handle button clicks for all charts
$('.kelembaban-filter-button').click(function() {
    $('.kelembaban-filter-button').removeClass('active');
    $(this).addClass('active');
    updateKelembabanChart($(this).data('filter'));
});

$('.dht-filter-button').click(function() {
    $('.dht-filter-button').removeClass('active');
    $(this).addClass('active');
    updateDHTChart($(this).data('filter'));
});

$('.thermo-filter-button').click(function() {
    $('.thermo-filter-button').removeClass('active');
    $(this).addClass('active');
    updateChart($(this).data('filter'));
});
    


    // Single Bar Chart
    var ctx4 = $("#bar-chart").get(0).getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "bar",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Pie Chart
    var ctx5 = $("#pie-chart").get(0).getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "pie",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Doughnut Chart
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });

    
})(jQuery);

