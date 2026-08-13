document.addEventListener("DOMContentLoaded", function () {

    const ctx = document.getElementById("trafficChart");

    if (!ctx) return;

    // Gradient
    const gradient = ctx.getContext("2d").createLinearGradient(0, 0, 0, 350);

    gradient.addColorStop(0, "rgba(79,70,229,.45)");
    gradient.addColorStop(.5, "rgba(79,70,229,.18)");
    gradient.addColorStop(1, "rgba(79,70,229,0)");

    new Chart(ctx, {

        type: "line",

        data: {

            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec"
            ],

            datasets: [

                {

                    label: "Visitors",

                    data: [
                        1200,
                        1800,
                        1600,
                        2500,
                        3200,
                        3000,
                        3900,
                        4200,
                        4800,
                        5300,
                        6100,
                        6800
                    ],

                    fill: true,

                    backgroundColor: gradient,

                    borderColor: "#4f46e5",

                    borderWidth: 3,

                    tension: .4,

                    pointRadius: 5,

                    pointHoverRadius: 8,

                    pointBackgroundColor: "#ffffff",

                    pointBorderColor: "#4f46e5",

                    pointBorderWidth: 3

                }

            ]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: {

                    display: false

                },

                tooltip: {

                    backgroundColor: "#1e293b",

                    padding: 14,

                    titleColor: "#fff",

                    bodyColor: "#fff",

                    cornerRadius: 10,

                    displayColors: false

                }

            },

            scales: {

                x: {

                    grid: {

                        display: false

                    },

                    ticks: {

                        color: "#64748b"

                    }

                },

                y: {

                    beginAtZero: true,

                    grid: {

                        color: "#eef2f7"

                    },

                    ticks: {

                        color: "#64748b"

                    }

                }

            }

        }

    });

});

