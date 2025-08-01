//[Dashboard Javascript]

//Project:	Master Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	 window.Apex = {
      markers: {
        size: 0
      }
    };
	
  var barNegativeChartoptions = {
    chart: {
      height: 114,
      stacked: true,
      type: 'bar',
      toolbar: { show: false },
      sparkline: {
        enabled: true,
      },
    },
	  
    plotOptions: {
      bar: {
        columnWidth: '20%',
        endingShape: 'rounded',
      },
      distributed: true,
    },
    colors: ['#2e62b9', '#fad050'],
    series: [{
      name: 'New Clients',
      data: [75, 150, 225, 200, 35, 50, 150, 180, 50, 150, 240, 140, 75, 35, 60, 120]
    }, {
      name: 'Retained Clients',
      data: [-100, -55, -40, -120, -70, -40, -60, -50, -70, -30, -60, -40, -50, -70, -40, -50],
    }],
    grid: {
      show: false,
    },
    legend: {
      show: false,
    },
    dataLabels: {
      enabled: false
    },
    tooltip: {
      x: { show: false }
    },
  }

  var barNegativeChart = new ApexCharts(
    document.querySelector("#bar-negative-chart"),
    barNegativeChartoptions
  );

  barNegativeChart.render();
	
  var successLineChartOption = {
    chart: {
      height: 100,
      type: 'line',
      toolbar: {
        show: false
      }
    },
    grid: {
      show: false,
      padding: {
        bottom: -20,
      }
    },
    colors: ['#ff0000'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 3,
      curve: 'smooth'
    },
    series: [{
      data: [50, 0, 50, 40, 90, 0, 40, 25, 80, 40, 45]
    }],
    xaxis: {
      show: false,
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: {
      show: false
    },
  }

  var successLineChart = new ApexCharts(
    document.querySelector("#success-line-chart"),
    successLineChartOption
  );
  successLineChart.render();
	
	
	  var primaryLineChartOption = {
		chart: {
		  height: 114,
		  // width: 180,
		  type: 'line',
		  toolbar: {
			show: false
		  },
		  sparkline: {
			enabled: true,
		  },
		},
		grid: {
		  show: false,
		  padding: {
			bottom: 5,
			top: 5,
			left: 10,
			right: 0
		  }
		},
		colors: ['#40a2ed'],
		dataLabels: {
		  enabled: false,
		},
		stroke: {
		  width: 3,
		  curve: 'smooth'
		},
		series: [{
		  data: [50, 100, 0, 60, 20, 30]
		}],
		fill: {
		  type: 'gradient',
		  gradient: {
			shade: 'dark',
			type: "horizontal",
			gradientToColors: ['#40a2ed'],
			opacityFrom: 0,
			opacityTo: 0.9,
			stops: [0, 30, 70, 100]
		  }
		},
		xaxis: {
		  show: false,
		  labels: {
			show: false
		  },
		  axisBorder: {
			show: false
		  }
		},
		yaxis: {
		  show: false
		},
	  }

	  var primaryLineChart = new ApexCharts(
		document.querySelector("#primary-line-chart"),
		primaryLineChartOption
	  );
	  primaryLineChart.render();
	
	
	 var warningLineChartOption = {
		chart: {
		  height: 114,
		  // width: 90,
		  type: 'line',
		  toolbar: {
			show: false
		  },
		  sparkline: {
			enabled: true,
		  },
		},
		grid: {
		  show: false,
		  padding: {
			bottom: 5,
			top: 5,
			left: 10,
			right: 0
		  }
		},
		colors: ['#e84a50'],
		dataLabels: {
		  enabled: false,
		},
		stroke: {
		  width: 3,
		  curve: 'smooth'
		},
		series: [{
		  data: [30, 60, 30, 80, 20, 70]
		}],
		fill: {
		  type: 'gradient',
		  gradient: {
			shade: 'dark',
			type: "horizontal",
			gradientToColors: ['#e84a50'],
			opacityFrom: 0,
			opacityTo: 0.9,
			stops: [0, 30, 70, 100]
		  }
		},
		xaxis: {
		  show: false,
		  labels: {
			show: false
		  },
		  axisBorder: {
			show: false
		  }
		},
		yaxis: {
		  show: false
		},
	  }

	  var warningLineChart = new ApexCharts(
		document.querySelector("#warning-line-chart"),
		warningLineChartOption
	  );
	  warningLineChart.render();
	
	
	
	  var orderSummaryChartOptions = {
		chart: {
		  height: 280,
		  type: 'line',
		  stacked: false,
		  toolbar: {
			show: false,
		  },
		  sparkline: {
			enabled: true
		  },
		},
		colors: ['#2e62b9', '#FF2829'],
		dataLabels: {
		  enabled: false
		},
		stroke: {
		  curve: 'smooth',
		  width: 2.5,
		  dashArray: [0, 8]
		},
		fill: {
		  type: 'gradient',
		  gradient: {
			inverseColors: false,
			shade: 'light',
			type: "vertical",
			gradientToColors: ['#a1bce8', '#FF2829'],
			opacityFrom: 0.7,
			opacityTo: 0.55,
			stops: [0, 80, 100]
		  }
		},
		series: [{
		  name: 'Weeks',
		  data: [165, 175, 162, 173, 160, 195, 160, 170, 160, 190, 180, 165, 175, 162, 173],
		  type: 'area',
		}, {
		  name: 'Months',
		  data: [168, 168, 155, 178, 155, 170, 190, 160, 150, 170, 140, 168, 168, 155, 178],
		  type: 'line',
		}],

		xaxis: {
		  offsetY: -50,
		  categories: ['', 1, 2, 3, 4, 5, 6, 7, 8, 9, ''],
		  axisBorder: {
			show: false,
		  },
		  axisTicks: {
			show: false,
		  },
		  labels: {
			show: true,
			style: {
			  colors: '#8097b1'
			}
		  }
		},
		tooltip: {
		  x: { show: false }
		},
	  }

	  var orderSummaryChart = new ApexCharts(
		document.querySelector("#order-summary-chart"),
		orderSummaryChartOptions
	  );

	  orderSummaryChart.render();
	
	
	  $('#vmap').vectorMap({
		map: 'us_aea_en',
		showTooltip: true,
		backgroundColor: '#fff',
		color: '#d1e6fa',
		regionStyle : {
			initial : {
				fill : '#69b2f8'
			}
		},
		selectedColor: '#00cccc',
		enableZoom: false,
		borderWidth: 1,
		borderColor: '#fff',
		hoverOpacity: .85
	  });
	
	
	var customerData = {
		labels: ['2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
		datasets: [{
			label: 'Revenue',
			data: [30, 55, 60, 50, 35, 45, 25, 60, 50, 40, 60, 55, 30, 55, 60, 50, 35, 45, 25],
			backgroundColor: [
				'#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#e9e9e9', '#e9e9e9', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE','#e9e9e9', '#e9e9e9', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE',
			],
			borderColor: [
				'#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#e9e9e9', '#e9e9e9', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE','#e9e9e9', '#e9e9e9', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE', '#5A8DEE',
			],
			borderWidth: 1,
			fill: false
		}
		]
	};
	var customerOptions = {
		scales: {
			xAxes: [{
			barPercentage: 0.8,
			position: 'bottom',
			display: true,
			gridLines: {
				display: false,
				drawBorder: false,
			},
			ticks: {
				display: false, //this will remove only the label
				stepSize: 300,
			}
			}],
			yAxes: [{
				display: false,
				gridLines: {
					drawBorder: false,
					display: true,
					color: "#f0f3f6",
					borderDash: [8, 4],
				},
				ticks: {
					display: false,
					beginAtZero: true,
				},
			}]
		},
		legend: {
			display: false
		},
		tooltips: {
			enabled: true,
			backgroundColor: 'rgba(0, 0, 0, 1)',
		},
		plugins: {
			datalabels: {
				display: false,
				align: 'center',
				anchor: 'center'
			}
		}				
	};
	if ($("#customer").length) {
		var barChartCanvas = $("#customer").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		if(screen.width>767) {
			var chartHeight = document.getElementById("customer");
			chartHeight.height = 60;
		}
		var barChart = new Chart(barChartCanvas, {
			type: 'bar',
			data: customerData,
			options: customerOptions
		});
	}
	
		
	
	
}); // End of use strict
