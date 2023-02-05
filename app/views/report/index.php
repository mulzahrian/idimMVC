<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <!-- <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Akses
        </button>
      </div>
    </div> -->
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Report data penjualan</h3>
          <ul class="list-group">
            <?php foreach( $data['br'] as $br ) : ?>
              <li class="list-group-item">
                  <?= $br['HargaJual'];?>
                  <?= $br['JumlahPenjualan'];?>
              </li>
            <?php endforeach; ?>
            <li>
                <p>Total Harga Jual :</p>
                <?= $data['br1']['TOTAL']; ?>

            </li>
          </ul>      
        </div>
    </div>

</div>





