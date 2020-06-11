<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-gray-500">Data Tabel hasil Pembayaran</div>
        <div class="card-body">
          <form method="POST" action="<?= base_url('page/bayar_edit'); ?>">
            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" id="id" name="id" class="form-control" value="<?= $bayar['id']; ?>">
                <label class="control-label">No Transaksi</label>
                <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" placeholder="Masukan no Transaksi" value="<?= $bayar['no_transaksi']; ?>" required readonly>
                <label class="control-label">Tgl Bayar</label>
                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" placeholder="Masukan tgl_bayar" value="<?= $bayar['tgl_bayar']; ?>" required readonly>
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukan no Pelanggan" value="<?= $bayar['nama']; ?>" required readonly>
                <label>No Pelanggan</label>
                <input type="text" class="form-control form-control-user" id="no_pelanggan" name="no_pelanggan" placeholder="Masukan no Pelanggan" value="<?= $bayar['no_pelanggan']; ?>" required readonly>
                <label>Zona</label>
                <input type="text" class="form-control form-control-user" id="zona" value="<?= $bayar['zona']; ?>" name="zona" placeholder="Masukan Zona" required readonly>
                <div class="perhitungan">
                  <label>Tarif</label>
                  <input type="text" class="form-control form-control-user" id="tarif" value="<?= $bayar['tarif']; ?>" name="tarif" placeholder="Masukan tarif" required readonly>
                  <label>Catat/Meter</label>
                  <input type="text" class="form-control form-control-user" value="<?= $bayar['catat_meter']; ?>" id="catat_meter" name="catat_meter" placeholder="Masukan Catatan Meter" required readonly>
                  <label>Total bayar</label>
                  <input type="text" class="form-control form-control-user" id="total_bayar" value="<?= $bayar['total_bayar']; ?>" name="total_bayar" placeholder="total_bayar" required readonly>
                  <b><label>langsung isi ke biaya admin dan denda</label></b><br>
                  <label>Biaya Admin</label>
                  <input type="text" class="form-control form-control-user" id="biaya_admin" value="<?= $bayar['biaya_admin']; ?>" name="biaya_admin" placeholder="Biaya Admin" required>
                  <label>Denda</label>
                  <input type="text" class="form-control form-control-user" id="denda" value="<?= $bayar['denda']; ?>" name="denda" placeholder="Denda" required>
                  <label>Grand Total</label>
                  <input type="text" class="form-control form-control-user" value="<?= $bayar['grand_total']; ?>" id="grand_total" name="grand_total" placeholder="grand_total" required>
                </div>
                <input type="hidden" class="form-control" id="user_update" name="user_update" value="<?= $this->session->userdata('nama_user'); ?>" required>
                <input name="update_date" type="hidden" id="update_date" value=" <?php echo date('Y-m-d'); ?> " readonly>
              </div>
            </div>

            <div class="modal-footer">
              <a href="<?= base_url('page/pembayaran'); ?>" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-undo"></i>&nbsp;&nbsp;Batal&nbsp;</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;&nbsp;Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  <?php echo $jsArray; ?>

  function changeValue(id) {
    document.getElementById('no_pelanggan').value = Nama_prd1[id].name;
    document.getElementById('zona').value = Nama_prd1[id].desc;
    document.getElementById('tarif').value = Nama_prd1[id].des;
    document.getElementById('catat_meter').value = Nama_prd1[id].de;
  };
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  $(".perhitungan").keyup(function() {
    var tarif = parseInt($("#tarif").val())
    var catat_meter = parseInt($("#catat_meter").val())
    var biaya_admin = parseInt($("#biaya_admin").val())
    var denda = parseInt($("#denda").val())
    var total_bayar = tarif * catat_meter;
    var grand_total = total_bayar + biaya_admin + denda;
    $("#total_bayar").attr("value", total_bayar)
    $("#grand_total").attr("value", grand_total)
  });
</script>