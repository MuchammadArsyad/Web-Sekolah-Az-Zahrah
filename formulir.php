<form class="form-horizontal style-form" method="POST" action="pages/surat/aksi_tambah.php">
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap </label>
        <div class="col-sm-10">
          <input type="text" class="form-control " name="namalengkap">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nama Panggilan </label>
        <div class="col-sm-10">
          <input type="date" class="form-control " name="namapanggilan">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nomor Induk Asal</label>
        <div class="col-sm-10">
          <input type="date" class="form-control " name="nomorindukasal">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">NISN</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="nisn">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Tempat & Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="ttl">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="jeniskelamin">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Agama</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="agama">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Sifat</label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="radio" class="form-check-input" id="radio1" name="sifat" value="Sangat Segera" > Sangat Segera
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="radio2" name="sifat" value="Segera"> Segera
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio3">
              <input type="radio" class="form-check-input" id="radio3" name="sifat" value="Rahasia" > Rahasia
            </label>
          </div>
          <div class="form-check-inline">
            <div class="form-check-label" for="radio4">
              <div class="">
                <input type="radio" class="form-check-input" id="radio4" name="sifat" value="lain" aria-label="Checkbox for following text input">
                <div style="margin-left: 20px; margin-top: -25px;">
                  <input type="text" class="form-control" name="sifat2" aria-label="Text input with checkbox">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Hal</label>
        <div class="col-sm-10">
          <!-- <textarea name="" id="input" class="form-control" rows="3"></textarea> -->
          <input type="text" class="form-control " name="hal" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Sifat Hal</label>
        <div class="col-sm-10">
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="checkbox" class="form-check-input" id="checkbox4" name="sifathal[]" value="Bupati" > Bupati
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="checkbox" class="form-check-input" id="checkbox5" name="sifathal[]" value="Sekda"> Sekda
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
              <input type="checkbox" class="form-check-input" id="checkbox6" name="sifathal[]" value="Temb" > Temb.
            </label>
          </div>
          <div class="form-check-inline">
            <div class="input-group-prepend">
              <div class="">
                <input type="checkbox" class="form-check-input" id="checkbox7" name="sifathal2c" value="lain" aria-label="Checkbox for following text input">
                <div style="margin-left: 20px; margin-top: -25px;">
                  <input type="text" class="form-control" name="sifathal2" aria-label="Text input with checkbox">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div style="float:right; margin-right: 2%;">
        <button type="submit" class="btn btn-theme03" name="submit">Masukan</button>
        <button type="reset" class="btn btn-theme04">Reset</button>
      </div>
    </div>
  </div>
</form>

<h3>Halaman Disposisi</h3>
<div class="row mb">
  <div class="content-panel">
    <div class="adv-table" style="padding: 15px;">
      <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
        <thead>
          <tr>
            <th style="display:none">ID</th>
            <th>Nomor Agenda</th>
            <th>Tanggal Diterima</th>
            <th>Pengirim</th>
            <th>Nomor Surat</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
</script> 