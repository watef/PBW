
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<!-- end load library -->

<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $tahun[] = $result->tahun; //ambil bulan
        $pendaftar[] = (float) $result->pendaftar; //ambil nilai
    }
    /* end mengambil query*/
     
?>
 
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 90,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },

        title: {
            text: 'Report Pendaftaran',
            style: {
                    fontSize: '25px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'pendaftaran siswa ke perguruan tinggi',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif',
            }
        },

        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($tahun);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah Siswa'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Pendaftar',
            data: <?php echo json_encode($pendaftar);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>
<br>
<br>
        <center>
            <a style="color: black;font-size: 20px; font-weight: bold;" href="<?php echo base_url()?>Welcome">back</a>
        </center>