<div class="container">
    <h5>Selamat Datang <?php echo $this->session->userdata('nama_member')?></h5>
    <p class="lead">
        Melalui panel ini Anda dapat mengelola kategori produk dan transaksi yang terjadi di marketplace
    </p>

    <!-- <div id="grafik-member-distrik"> -->

    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/non-cartesian-zoom.js"></script>
<script src="https://code.highcharts.com/modules/mouse-wheel-zoom.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!-- <script>
    Highcharts.chart('grafik-member-distrik', {
        chart: {
            type: 'pie',
            zooming: {
                type: 'xy'
            },
            panning: {
                enabled: true,
                type: 'xy'
            },
            panKey: 'shift'
        },
        title: {
            text: 'Jumlah Member Berdasarkan Distrik'
        },
        tooltip: {
            valueSuffix: 'orang'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: [{
                    enabled: true,
                    distance: 20
                }, {
                    enabled: true,
                    distance: -40,
                    format: '{point.percentage:.1f}%',
                    style: {
                        fontSize: '1.2em',
                        textOutline: 'none',
                        opacity: 0.7
                    },
                    filter: {
                        operator: '>',
                        property: 'percentage',
                        value: 10
                    }
                }]
            }
        },
        series: [{
            name: 'jumlah',
            colorByPoint: true,
            data: [
                <?php foreach ($jumlah_member_distrik as $k => $v): ?>
                <?php endforeach ?> {
                    name: "<?php echo $v['nama_distrik_member']?>',
                    y: <?php echo $value['jumlah']?>
                }
            ]
        }]
    });
</script> -->