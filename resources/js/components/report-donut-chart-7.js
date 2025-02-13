(function () {
    "use strict";

    // Chart
    const chartEl = $(".report-donut-chart-7");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");
            const chartData = [35, 65];

            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: ["31 - 50 Years old", ">= 50 Years old"],
                    datasets: [
                        {
                            data: chartData,
                            backgroundColor: [
                                getColor("primary", 0.5),
                                getColor("slate.300"),
                            ],
                            hoverBackgroundColor: [
                                getColor("primary", 0.5),
                                getColor("slate.300"),
                            ],
                            borderWidth: 1,
                            borderColor: [
                                getColor("primary", 0.5),
                                getColor("slate.400", 0.4),
                            ],
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
                    cutout: "78%",
                },
            });
        });
    }
})();
