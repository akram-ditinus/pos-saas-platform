(function () {
    "use strict";

    // Chart
    const chartEl = $(".report-bar-chart-6");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: Array.from(
                        { length: 15 },
                        (_, index) => index + 15
                    ),
                    datasets: [
                        {
                            categoryPercentage: 0.5,
                            barPercentage: 0.8,
                            borderRadius: 2,
                            data: Array.from({ length: 15 }, (index) =>
                                _.random(1, 1000)
                            ),
                            borderWidth: 1,
                            borderColor: getColor("primary", 0.7),
                            backgroundColor: getColor("primary", 0.35),
                        },
                        {
                            categoryPercentage: 0.5,
                            barPercentage: 0.8,
                            borderRadius: 2,
                            data: Array.from({ length: 15 }, (index) =>
                                _.random(1, 1000)
                            ),
                            borderWidth: 1,
                            borderColor: getColor("success", 0.7),
                            backgroundColor: getColor("success", 0.35),
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        x: {
                            ticks: {
                                color: getColor("slate.500", 0.7),
                            },
                            grid: {
                                display: false,
                            },
                            border: {
                                display: false,
                            },
                        },
                        y: {
                            ticks: {
                                autoSkipPadding: 15,
                                color: getColor("slate.500", 0.9),
                                beginAtZero: true,
                            },
                            grid: {
                                color: getColor("slate.200", 0.7),
                            },
                            border: {
                                display: false,
                            },
                        },
                    },
                },
            });
        });
    }
})();
