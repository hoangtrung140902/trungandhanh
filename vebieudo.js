function fetchData() {
    fetch('getdata.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('value1').textContent = data[0].value1;
            document.getElementById('value2').textContent = data[0].value2;
            document.getElementById('value3').textContent = data[0].value3;
        })
        .catch(error => console.error('Lỗi:', error));
}

fetchData();

setInterval(fetchData, 1000);

var ctx = document.getElementById('chart').getContext('2d');
var chartData = {
    type: 'line', 
    data: {
        labels: ['Value'], 
        datasets: [
            {
                label: 'Value 1',
                data: [0],
                borderColor: 'red', 
                fill: false, 
            },
            {
                label: 'Value 2',
                data: [0],
                borderColor: 'green',
                fill: false,
            },
            {
                label: 'Value 3',
                data: [0],
                borderColor: 'blue',
                fill: false,
            },
        ],
    },
    options: {
        responsive: false,
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
};

var chart = new Chart(ctx, chartData);

function updateChart() {
    var value1 = parseFloat(document.getElementById('value1').textContent);
    var value2 = parseFloat(document.getElementById('value2').textContent);
    var value3 = parseFloat(document.getElementById('value3').textContent);

    chartData.data.datasets[0].data.push(value1); 
    chartData.data.datasets[1].data.push(value2);
    chartData.data.datasets[2].data.push(value3);

    
    if (chartData.data.datasets[0].data.length > 10) {
        chartData.data.datasets[0].data.shift(); 
        chartData.data.datasets[1].data.shift();
        chartData.data.datasets[2].data.shift();
    }

    chart.update();
}

setInterval(updateChart, 1000);


