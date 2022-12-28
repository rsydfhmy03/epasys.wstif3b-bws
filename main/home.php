<style>
	.chart{
		position: relative;
  		bottom: 0;
	}
</style>
<main>

			<div class="head-title">
				<div class="left">
					<h1><?php include 'includes/greetings.php'?>, Administrator</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
				<i class='bx bxs-parking'></i>
					<span class="text">
						<h3 id="total-parkir">
						<?php
							// panggil file total_parkir.php
							include 'includes/total_parkir.php';
							// tampilkan data
							// echo '<script>document.getElementById("total-parkir").innerHTML = "' . $total_parkir . '";</script>';
							?>
						</h3>
						<p>Total Parkir</p>
						
					</span>
				</li>
				<li>
					<i class='bx bx-log-in' ></i>
					<!-- <i class="bx"><ion-icon name="enter-outline"></ion-icon></i> -->
					<span class="text">
					<?php include 'counters/invehicles_count.php'?> 
						<h3 id="in-parkir">
						<?php
							// panggil file 
							include 'includes/total_inParkir.php';
							?>												
						</h3>
						<p>Kendaraan Masuk</p>
					</span>
				</li>
				<li>
					<i class='bx bx-log-out' ></i>
					<!-- <i class='bx'><ion-icon name="exit-outline"></ion-icon></i> -->
					<span class="text">
						<h3 id="out-parkir">
						<?php
							// panggil file 
							include 'includes/total_outParkir.php';
							?>
						</h3>
						<p>Kendaraan Keluar</p>
					</span>
				</li>
			</ul>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Riwayat Parkir</h3>
						<!-- <i class='bx bx-search' ></i> -->
						<i class='bx bx-filter' ></i>
					</div>
					<div style="height: 15px;"></div>
					<div>
						<div class="chart-content" >
						<canvas class="chart" id="myChart"></canvas>
						</div>
					</div>
			</div>

				<div class="todo">
					<div class="head">
						<h3>Aktivitas Parkir</h3>
						<!-- <i class='bx bx-plus' ></i> -->
						<i class='bx bx-filter' ></i>
					</div>
					<div>
						
						<div class="chart-content" >
						<canvas id="myChartStatus"></canvas>
						</div>
					</div>
				</div>
			
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.34.3/collect.min.js" integrity="sha512-PMQSST5BbDOTPTzFifLEy01C6GUYDzWVN/+s0aopu70S6m7NPGeistFqL3EIQc8fMMzbiXULAybnI/gFV0p9LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
function getData(){
	// Bar chart activity parkir
    $.ajax({
        type: 'GET',
        url :'includes/chart.php',
        data :{
            functionName:'getDataParkir'
        },
        success: function(response){
            // console.log(response)
            let parkir = JSON.parse(response)
            // console.log(parkir)

            let hari = collect(parkir).map(function(item){
                return item.day
            }).all() 

            // console.log(hari)
            let jumlahParkir = collect(parkir).map(function(item){
                return item.jumlah
            }).all()
            // console.log(jumlahPenduduk)


            const ctx = document.getElementById('myChart');

		//bar chart activity parkir
        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: hari,
            datasets: [{
                label: 'Jumlah Parkir',
                borderColor : '#54321',
                backgroundColor : '#C0DEFF',
                data: jumlahParkir,
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        }

    }),
	// pie chart status parkir
	$.ajax({
    type: 'GET',
    url: 'includes/chart.php',
    data: {
      functionName: 'getStatus'
    },
    success: function(response) {
    //   console.log(response)
      let data = JSON.parse(response)
    //   console.log(data)

    //   let masuk = data.masuk
    //   let keluar = data.keluar
    let masuk = collect(data).map(function(item){
        return item.masuk
    }).all() 

    let keluar = collect(data).map(function(item){
        return item.keluar
    }).all()
    
    // console.log(masuk)
      const ctx = document.getElementById('myChartStatus');

      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Masuk', 'Keluar'],
          datasets: [{
            label: 'Jumlah',
            borderColor: '#9575CD',
            backgroundColor: ["#03A9F4","#FF8A65"],
            data: [masuk, keluar],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }
  })


}
  

</script>