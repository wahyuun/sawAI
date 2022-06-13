<!-- judul -->
<div class="panel">
    <div class="panel-middle" id="judul">
        <!-- <img src="asset/image/rank.svg"> -->
        <div id="judul-text">
            <h2 class="text-green">HASIL</h2>
            Halamanan Utama Hasil Akhir Penilaian
        </div>
    </div>
</div>
<!-- judul -->
<div class="panel">
    <div class="panel-top">
        <div style="float:left;width: 300px;">
            <select class="form-custom" name="pilih"  id="pilihHasil">
                <option disabled selected value="">-- Pilih Nomor NIM/NPM --</option>;
                <?php
                $query="SELECT*FROM jenis_barang";
                $execute=$konek->query($query);
                if ($execute->num_rows > 0){
                    while ($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=$data[id_jenisbarang]>$data[namaBarang]</option>";
                    }
                }else{
                    echo '<option disabled value="">Tidak ada data</option>';
                }
                ?>
            </select>
        </div>
        <div style="clear: both"></div>
    </div>
    <div class="panel-middle">
        <div id="valueHasil">
            <p class='text-center'><b>Pilih Nomor NIM/NPM, untuk menampilkan hasil</b></p>
        </div>
    </div>
    <div class="panel-bottom"></div>
</div>