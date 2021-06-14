var barChartData = {
	labels: [
		"November",
		"Desember",
		"Maret"
	],
	datasets: [{
			label: "Belum Memilih Jenis Wisuda",
			backgroundColor: "pink",
			borderColor: "red",
			borderWidth: 1,
			data: [3, 5, 6]
		},
		// {
		// 	label: "Mastercard",
		// 	backgroundColor: "lightblue",
		// 	borderColor: "blue",
		// 	borderWidth: 1,
		// 	data: [4, 7, 3]
		// },
		{
			label: "Sudah Mendaftar dan Terdaftar Wisuda",
			backgroundColor: "lightgreen",
			borderColor: "green",
			borderWidth: 1,
			data: [10, 7, 4]
		},
		{
			label: "Belum Terdaftar",
			backgroundColor: "yellow",
			borderColor: "orange",
			borderWidth: 1,
			data: [6, 9, 7]
		}
	]
};

var chartOptions = {
	responsive: true,
	legend: {
		position: "top"
	},
	title: {
		display: true,
		text: ""
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}

window.onload = function () {
	var ctx = document.getElementById("canvas").getContext("2d");
	window.myBar = new Chart(ctx, {
		type: "bar",
		data: barChartData,
		options: chartOptions
	});
};
