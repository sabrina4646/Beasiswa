<div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>DATA PENDAFTARAN BEASISWA</h2>
            </div>
        </div>
        <div class="row text-right">
            <div class="col table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Daftar</th>
                            <th>nim</th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                            <th>Nomor HP</th>
                            <th>Semester</th>
                            <th>IPK</th>
                            <th>Pilihan Beasiswa</th>
                            <th>Berkas</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $NO=1;
                            include "koneksi.php";
                            
                            $perintah=mysqli_query($db,"SELECT * FROM tb_daftar WHERE status='D'");
                            
                            foreach($perintah as $data){

                                $data2=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM akun_mahasiswa where nim='$data[nim]'"));

                                
                                switch($data['pil_beasiswa']){
                                    case "A" : $pil_beasiswa="Akademik"; break;
                                    case "NA" : $pil_beasiswa="Non Akademik"; break;
                                }

                                switch($data['status']){
                                    case "B" : $status="Belum Terverifikasi"; break;
                                    case "D" : $status="Diterima"; break;
                                    case "T" : $status="Ditolak"; break;
                                }

                                echo "<tr>
                                    <td>$NO</td>
                                    <td>$data[tgl_daftar]</td>
                                    <td>$data[nim]</td>
                                    <td>$data2[nama]</td>
                                    <td>$data[email]</td>
                                    <td>$data[no_hp]</td>
                                    <td>$data[semester]</td>
                                    <td>$data[ipk]</td>
                                    <td>$pil_beasiswa</td>                                    
                                    <td><a href='lihat_berkas.php?filename=$data[berkas]' target='_blank'>$data[berkas]</a></td>
                                    <td>$status</td>
                                </tr>";
                            $NO++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>