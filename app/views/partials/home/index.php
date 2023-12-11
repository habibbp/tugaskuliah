<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 ></h4>
                    <div class=""><div>    <style>
                        body
                        {
                        background-image:no-repeat;
                        background-size:cover;
                        }
                    </style>
                <div><center><h1></h1>SELAMAT DATANG DI PENJUALAN MOTOR</center></h1></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 comp-grid">
        <?php $rec_count = $comp_model->getcount_motor();  ?>
        <a class="animated jello record-count card bg-dark text-white"  href="<?php print_link("motor/") ?>">
            <div class="row">
                <div class="col-2">
                    <i class="fa fa-motorcycle fa-3x"></i>
                </div>
                <div class="col-10">
                    <div class="flex-column justify-content align-center">
                        <div class="title">Motor</div>
                        <small class=""></small>
                    </div>
                </div>
                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
            </div>
        </a>
    </div>
    <div class="col-md-4 comp-grid">
        <?php $rec_count = $comp_model->getcount_transaksi();  ?>
        <a class="animated jello record-count card bg-dark text-white"  href="<?php print_link("transaksi/") ?>">
            <div class="row">
                <div class="col-2">
                    <i class="fa fa-th fa-3x"></i>
                </div>
                <div class="col-10">
                    <div class="flex-column justify-content align-center">
                        <div class="title">Transaksi</div>
                        <small class=""></small>
                    </div>
                </div>
                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
            </div>
        </a>
    </div>
    <div class="col-md-4 comp-grid">
        <?php $rec_count = $comp_model->getcount_transaksidetail();  ?>
        <a class="animated jello record-count card bg-dark text-white"  href="<?php print_link("transaksi_detail/") ?>">
            <div class="row">
                <div class="col-2">
                    <i class="fa fa-star-o fa-3x"></i>
                </div>
                <div class="col-10">
                    <div class="flex-column justify-content align-center">
                        <div class="title">Transaksi Detail</div>
                        <small class=""></small>
                    </div>
                </div>
                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
            </div>
        </a>
    </div>
    <div class="col-md-4 comp-grid">
    </div>
</div>
</div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 comp-grid">
                <div class=""><div><style>
                    body
                    {
                    text-align: center;
                    text-transform: uppercase;
                    }
                </style></div></div>
                <div class="text-dark">
                    <?php 
                    $chartdata = $comp_model->barchart_transaksi();
                    ?>
                    <div>
                        <h4>Transaksi</h4>
                        <small class="text-muted"></small>
                    </div>
                    <hr />
                    <canvas id="barchart_transaksi"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'total Transaksi',
                        backgroundColor:'rgba(255 , 128 , 0, 0.5)',
                        borderColor:'rgba(255 , 255 , 0, 0.7)',
                        type:'bar',
                        borderWidth:1,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('barchart_transaksi');
                        var chart = new Chart(ctx, {
                        type:'bar',
                        data: chartData,
                        options: {
                        scaleStartValue: 0,
                        responsive: true,
                        scales: {
                        xAxes: [{
                        ticks:{display: true},
                        gridLines:{display: true},
                        categoryPercentage: 1.0,
                        barPercentage: 0.8,
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        },
                        }],
                        yAxes: [{
                        ticks: {
                        beginAtZero: true,
                        display: true
                        },
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }]
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
            <div class="col-sm-6 comp-grid">
                <div class="text-dark">
                    <?php 
                    $chartdata = $comp_model->barchart_datatransaksipenjualmotor();
                    ?>
                    <div>
                        <h4>Data Transaksi penjual motor</h4>
                        <small class="text-muted"></small>
                    </div>
                    <hr />
                    <canvas id="barchart_datatransaksipenjualmotor"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'Jumlah motor',
                        backgroundColor:'rgba(0 , 255 , 255, 0.5)',
                        borderColor:'rgba(0 , 64 , 128, 0.7)',
                        type:'bar',
                        borderWidth:3,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('barchart_datatransaksipenjualmotor');
                        var chart = new Chart(ctx, {
                        type:'bar',
                        data: chartData,
                        options: {
                        scaleStartValue: 0,
                        responsive: true,
                        scales: {
                        xAxes: [{
                        ticks:{display: true},
                        gridLines:{display: true},
                        categoryPercentage: 1.0,
                        barPercentage: 0.8,
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        },
                        }],
                        yAxes: [{
                        ticks: {
                        beginAtZero: true,
                        display: true
                        },
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }]
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
            <div class="col-md-4 comp-grid">
                <div class="card card-body">
                    <?php 
                    $chartdata = $comp_model->doughnutchart_diagramtransaksi();
                    ?>
                    <div>
                        <h4>Diagram Transaksi</h4>
                        <small class="text-muted"></small>
                    </div>
                    <hr />
                    <canvas id="doughnutchart_diagramtransaksi"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'transaksi',
                        borderColor:'rgba(0 , 0 , 0, 0.7)',
                        backgroundColor:'rgba(0 , 0 , 255, 0.5)',
                        borderWidth:3,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('doughnutchart_diagramtransaksi');
                        var chart = new Chart(ctx, {
                        type:'doughnut',
                        data: chartData,
                        options: {
                        responsive: true,
                        scales: {
                        yAxes: [{
                        ticks:{display: false},
                        gridLines:{display: false},
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }],
                        xAxes: [{
                        ticks:{display: false},
                        gridLines:{display: false},
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }],
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
            <div class="col-md-4 comp-grid">
                <div class="card card-body">
                    <?php 
                    $chartdata = $comp_model->doughnutchart_diagramtranksaksidetail();
                    ?>
                    <div>
                        <h4>Diagram Tranksaksi Detail</h4>
                        <small class="text-muted"></small>
                    </div>
                    <hr />
                    <canvas id="doughnutchart_diagramtranksaksidetail"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'Transaksi_detail',
                        borderColor:'rgba(64 , 0 , 0, 0.7)',
                        backgroundColor:'rgba(0 , 255 , 255, 0.5)',
                        borderWidth:3,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('doughnutchart_diagramtranksaksidetail');
                        var chart = new Chart(ctx, {
                        type:'doughnut',
                        data: chartData,
                        options: {
                        responsive: true,
                        scales: {
                        yAxes: [{
                        ticks:{display: false},
                        gridLines:{display: false},
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }],
                        xAxes: [{
                        ticks:{display: false},
                        gridLines:{display: false},
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }],
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
