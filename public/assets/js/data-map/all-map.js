(function ($) {
    "use strict";
var basic_choropleth = new Datamap({
    element: document.getElementById("basic_choropleth"),
    projection: 'mercator',
    fills: {
      defaultFill: "#ABDDA4",
      authorHasTraveledTo: "#fa0fa0"
    },
    data: {
      USA: { fillKey: "authorHasTraveledTo" },
      JPN: { fillKey: "authorHasTraveledTo" },
      ITA: { fillKey: "authorHasTraveledTo" },
      CRI: { fillKey: "authorHasTraveledTo" },
      KOR: { fillKey: "authorHasTraveledTo" },
      DEU: { fillKey: "authorHasTraveledTo" },
    }
  });

  var colors = d3.scale.category10();

  window.setInterval(function() {
    basic_choropleth.updateChoropleth({
      USA: colors(Math.random() * 10),
      RUS: colors(Math.random() * 100),
      AUS: { fillKey: 'authorHasTraveledTo' },
      BRA: colors(Math.random() * 50),
      CAN: colors(Math.random() * 50),
      ZAF: colors(Math.random() * 50),
      IND: colors(Math.random() * 50),
    });
  }, 2000);
   /*----------------------------------------*/
	/*  2.  Bar Chart
	/*----------------------------------------*/
	var ctx = document.getElementById("barchart1");
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["18-24", "25-34", "35-44", "45-54", "55-64", "65+"],
			datasets: [{
				label: 'Bar Chart',
				data: [36, 30, 24, 18, 12, 6],
				backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#000", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#000", // this here
					}
				}]
			}
		}
	});
    /*----------------------------------------*/
	/*  3.  Google Map
	/*----------------------------------------*/
        var chicago = new google.maps.LatLng(41.850, -87.650);
        var map = new google.maps.Map(document.getElementById('map'), {
            center: chicago,
            zoom: 3
        });

        var map1 = new google.maps.Map(document.getElementById('map1'), {
            zoom: 8,
            center: {lat: 35.717, lng: 139.731}
        });
    /*----------------------------------------*/
	/*  4.  lineChart
	/*----------------------------------------*/
    c3.generate({
        bindto: '#lineChart',
        data:{
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ],
            colors:{
                data1: '#d93025',
                data2: '#1a73e8'
            }
        }
    });
    jQuery('#data_5 .input-daterange').datepicker({
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true
	});
})(jQuery); 
  