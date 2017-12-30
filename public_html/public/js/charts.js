var ctx = $("#chart2");

var data = {
    labels: ["Groep 1", "Groep 2", "Groep 3"],
    datasets: [
        {
            label: "Groepenverdeling",
            fill: false,
            lineTension: 0.1,
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            backgroundColor: ["#3e95cd", "#8e5ea2"],
            pointBorderWidth: 1,
            pointHoverRadius: 3,
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [200, 300, 1],
            spanGaps: false,
        }
    ]
};

var options = {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
        display: true,
    },
    tooltips: {
        bodyFontColor: '#fff',
    }
}

var myLineChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: options
});








var ctx = $("#chart1");

var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "Website traffic",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#F44336",
            borderColor: "#F44336",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "#F44336",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "#F44336",
            pointHoverBorderColor: "#F44336",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [103265, 128259, 85290, 115923, 91238, 108295, 102295],
            spanGaps: false,
        }
    ]
};

var options = {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
        display: false,
    },
    tooltips: {
        bodyFontColor: '#fff',
    },
    scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                },
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                }
            }]
        }
}

var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
