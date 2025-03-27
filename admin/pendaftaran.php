<div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>DATA PENDAFTARAN BEASISWA</h2>
            </div>
        </div>
        <div class="row text-right">
            <div class="col table-responsive">
                <table class="table table-bordered" id="myTable" width="90%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Daftar</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                            <th>Nomor HP</th>
                            <th>Semester</th>
                            <th>IPK</th>
                            <th>Pilihan Beasiswa</th>
                            <th>Berkas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $NO=1;
                            include "koneksi.php";
                            
                            function active_status($value, $input){
                                $resul = $value==$input?'selected':'';
                                return $resul;
                            }
                            

                            $perintah=mysqli_query($db,"SELECT * FROM tb_daftar");
                            
                            foreach($perintah as $data){
                                
                                $data2=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM akun_mahasiswa where nim='$data[nim]'"));

                                

                                switch($data['pil_beasiswa']){
                                    case "A" : $pil_beasiswa="Akademik"; break;
                                    case "NA": $pil_beasiswa="Non Akademik"; break;
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
                                    <td>
                                        <form method=post action=index.php?pg=update_status>
                                        <input type=hidden name=id value=$data[id_daftar]>
                                            <select name=status>
                                                <option value='B'". active_status('B', $data['status']).">Belum Terverifikasi</option>
                                                <option value='D'". active_status('D', $data['status']).">Diterima</option>
                                                <option value='T'". active_status('T', $data['status']).">Ditolak</option>
                                            </select>
                                            <button type='submit' name='update_status' class='bg-success' style='color:white'>UPDATE STATUS</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href='index.php?pg=edit_pendaftaran&id=$data[id_daftar]'>
                                            <button class='btn btn-primary'>EDIT</button>
                                        </a>
                                        <a href='index.php?pg=hapus_pendaftaran&id=$data[id_daftar]'>
                                            <button type='button' class='btn btn-danger text-white'>HAPUS</button>
                                        </a>
                                    </td>
                                </tr>";
                            $NO++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>