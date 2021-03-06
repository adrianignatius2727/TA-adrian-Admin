
               <!-- /.row -->
               <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="collapse m-t-15" id="pgr1" aria-expanded="true"> <pre class="line-numbers language-javascript m-t-0"></pre> </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Jumlah Pengguna</h3>
                                        <ul class="list-inline two-part">
                                            <li><i class="icon-people text-info"></i></li>
                                            <li class="text-right"><span class="counter"><?php echo $jumlah_user?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Total laporan Lost & Found Masuk</h3>
                                        <ul class="list-inline two-part">
                                            <li><i class="ti-location-pin text-purple"></i></li>
                                            <li class="text-right"><span class="counter"><?php echo $jumlah_laporan_lostfound?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Total laporan Kriminalitas Masuk</h3>
                                        <ul class="list-inline two-part">
                                            <li><i class="ti-location-pin text-danger"></i></li>
                                            <li class="text-right"><span class="counter"><?php echo $jumlah_laporan_kriminalitas?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">

                    <div class="col-md-12 col-lg-6 col-xs-12">
                        <div class="white-box">
                        <h3 class="box-title">Headline Laporan Lost Found</h3>
                            <div class="message-center">
                                <?php foreach ((array)$headline_laporan_lostfound as $laporan  ): ?> 
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url(); ?>optimum/plugins/images/avatar-profile.png" alt="user" class="img-circle"></div>
                                            <div class="mail-contnet">
                                            <h5><?php echo $laporan["judul_laporan"]?></h5> <span class="mail-desc">Dilaporkan oleh: <?php echo $laporan["nama_user_pelapor"]?></span> <span class="time"><?php echo $laporan["tanggal_laporan"]?>, Pukul<?php echo $laporan["waktu_laporan"]?></span> 
                                        </div>
                                    </a>
                                <?php endforeach ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xs-12">
                        <div class="white-box">
                        <h3 class="box-title">Headline Laporan Kriminalitas</h3>
                            <div class="message-center">
                                <?php foreach ((array)$headline_laporan_kriminalitas as $laporan  ): ?> 
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url(); ?>optimum/plugins/images/avatar-profile.png" alt="user" class="img-circle"></div>
                                            <div class="mail-contnet">
                                            <h5><?php echo $laporan["judul_laporan"]?></h5> <span class="mail-desc">Dilaporkan oleh: <?php echo $laporan["nama_user_pelapor"]?></span> <span class="time"><?php echo $laporan["tanggal_laporan"]?>, Pukul<?php echo $laporan["waktu_laporan"]?></span> 
                                        </div>
                                    </a>
                                <?php endforeach ?> 
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 col-lg-6 col-xs-12">
                        <div class="white-box">
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Browser Stats</h3>
                            <ul class="basic-list">
                                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                            </ul>
                        </div>
                    </div> -->
                </div>	
            </div>
    <!-- Row -->
<script type="text/javascript">
    // var kategori_laporan_lostfound=<?php echo json_encode($data_kategori_laporan_lostfound);?>;
    // var dataChartLaporan=[];
    // kategori_laporan_lostfound.forEach(function(obj){
    //     dataChartLaporan.push({y:obj.jumlah_laporan,label:obj.kategori_laporan});
    // });
    // window.onload = function () {
    //     var chart = new CanvasJS.Chart("chartContainer", {
    //         title:{
    //             text: "My First Chart in CanvasJS"              
    //         },
    //         data: [              
    //         {
    //             type: "pie",
    //             dataPoints: dataChartLaporan
    //         }
    //         ]
    //     });
    //     chart.render();
    }
</script>