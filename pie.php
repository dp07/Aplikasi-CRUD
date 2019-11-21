
	<div id="canvas-holder" style="width:90%;">
		<canvas id="chart-area"></canvas>
	</div>

	<?php
	$color = ['red', 'orange', 'yellow',  'green','blue'];

	$data = get_rekap_asal();

	$str_value = implode(",", array_values($data));

	$i = 0;
	foreach($data as $asal => $presentase){

	$str_color[] = "window.chart.Colors.".$color[$i];
}
	?>
	
	<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
	<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
	<script>
		

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						20, 30, 20, 10, 20,
					],
					backgroundColor: [
						php
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue'
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
	</script>

