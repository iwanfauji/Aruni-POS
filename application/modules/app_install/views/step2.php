<div class="col-md-6 col-md-offset-3">
  <?php if ($install->type_id == 1): ?>
    <form id="form" class="" action="<?=base_url()?>app_install/update_client" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">Identitas Perusahaan</div>
          <div class="panel-body">
            <h4>Profil Perusahaan</h4>
            <div class="form-group">
              <label>Nama Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_name" value="">
            </div>
            <div class="form-group">
              <label>Nama Brand <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_brand" value="">
            </div>
            <div class="form-group">
              <label>Status Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_status" value="">
            </div>
            <hr>
            <h4>Alamat Perusahaan</h4>
            <div class="form-group">
              <label>Jalan <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_street" value="">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_subdistrict" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_district" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kota/Kabupaten <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_city" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Provinsi <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_province" value="">
                </div>
              </div>
            </div>
            <hr>
            <h4>Kontak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 1<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_1" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 2<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_2" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Email <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_email" value="">
            </div>
            <hr>
            <h4>Wajib Pajak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWP<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwp" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWPD<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwpd" value="">
                </div>
              </div>
            </div>
            <h4>Pemilik</h4>
            <div class="form-group">
              <label>Nama Pemilik<small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_owner_name" value="">
            </div>
            <div class="form-group">
              <label>Alamat Pemilik<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_owner_address"></textarea>
            </div>
            <hr>
            <h4>Data Lain</h4>
            <div class="form-group">
              <label>Keterangan Tambahan<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_notes"></textarea>
            </div>
            <div class="form-group">
              <label>Serial Number <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_serial_number" value="">
            </div>
          </div>
          <div class="panel-footer">
            <button type="submit" class="btn btn-info">Selesai</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php endif; ?>
  <?php if ($install->type_id == 2): ?>
    <form id="form" class="" action="<?=base_url()?>app_install/update_client" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">Identitas Perusahaan</div>
          <div class="panel-body">
            <h4>Profil Perusahaan</h4>
            <div class="form-group">
              <label>Nama Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_name" value="">
            </div>
            <div class="form-group">
              <label>Nama Brand <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_brand" value="">
            </div>
            <div class="form-group">
              <label>Status Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_status" value="">
            </div>
            <hr>
            <h4>Alamat Perusahaan</h4>
            <div class="form-group">
              <label>Jalan <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_street" value="">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_subdistrict" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_district" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kota/Kabupaten <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_city" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Provinsi <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_province" value="">
                </div>
              </div>
            </div>
            <hr>
            <h4>Kontak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 1<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_1" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 2<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_2" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Email <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_email" value="">
            </div>
            <hr>
            <h4>Wajib Pajak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWP<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwp" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWPD<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwpd" value="">
                </div>
              </div>
            </div>
            <h4>Pemilik</h4>
            <div class="form-group">
              <label>Nama Pemilik<small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_owner_name" value="">
            </div>
            <div class="form-group">
              <label>Alamat Pemilik<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_owner_address"></textarea>
            </div>
            <hr>
            <h4>Data Lain</h4>
            <div class="form-group">
              <label>Keterangan Tambahan<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_notes"></textarea>
            </div>
            <div class="form-group">
              <label>Serial Number <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_serial_number" value="">
            </div>
          </div>
          <div class="panel-footer">
            <button type="submit" class="btn btn-info">Selesai</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php endif; ?>
  <?php if ($install->type_id == 3): ?>
    <form id="form" class="" action="<?=base_url()?>app_install/update_client" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">Identitas Perusahaan</div>
          <div class="panel-body">
            <h4>Profil Perusahaan</h4>
            <div class="form-group">
              <label>Nama Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_name" value="">
            </div>
            <div class="form-group">
              <label>Nama Brand <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_brand" value="">
            </div>
            <div class="form-group">
              <label>Status Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_status" value="">
            </div>
            <hr>
            <h4>Alamat Perusahaan</h4>
            <div class="form-group">
              <label>Jalan <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_street" value="">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_subdistrict" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_district" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kota/Kabupaten <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_city" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Provinsi <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_province" value="">
                </div>
              </div>
            </div>
            <hr>
            <h4>Kontak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 1<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_1" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 2<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_2" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Email <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_email" value="">
            </div>
            <hr>
            <h4>Wajib Pajak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWP<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwp" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWPD<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwpd" value="">
                </div>
              </div>
            </div>
            <h4>Pemilik</h4>
            <div class="form-group">
              <label>Nama Pemilik<small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_owner_name" value="">
            </div>
            <div class="form-group">
              <label>Alamat Pemilik<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_owner_address"></textarea>
            </div>
            <hr>
            <h4>Data Lain</h4>
            <div class="form-group">
              <label>Keterangan Tambahan<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_notes"></textarea>
            </div>
            <div class="form-group">
              <label>Serial Number <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_serial_number" value="">
            </div>
          </div>
          <div class="panel-footer">
            <button type="submit" class="btn btn-info">Selesai</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php endif; ?>
  <?php if ($install->type_id == 4): ?>
    <form id="form" class="" action="<?=base_url()?>app_install/update_client" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">Identitas Perusahaan</div>
          <div class="panel-body">
            <h4>Profil Perusahaan</h4>
            <div class="form-group">
              <label>Nama Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_name" value="">
            </div>
            <div class="form-group">
              <label>Nama Brand <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_brand" value="">
            </div>
            <div class="form-group">
              <label>Status Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_status" value="">
            </div>
            <hr>
            <h4>Alamat Perusahaan</h4>
            <div class="form-group">
              <label>Jalan <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_street" value="">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_subdistrict" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_district" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kota/Kabupaten <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_city" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Provinsi <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_province" value="">
                </div>
              </div>
            </div>
            <hr>
            <h4>Kontak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 1<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_1" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 2<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_2" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Email <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_email" value="">
            </div>
            <hr>
            <h4>Wajib Pajak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWP<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwp" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWPD<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwpd" value="">
                </div>
              </div>
            </div>
            <h4>Pemilik</h4>
            <div class="form-group">
              <label>Nama Pemilik<small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_owner_name" value="">
            </div>
            <div class="form-group">
              <label>Alamat Pemilik<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_owner_address"></textarea>
            </div>
            <hr>
            <h4>Data Lain</h4>
            <div class="form-group">
              <label>Keterangan Tambahan<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_notes"></textarea>
            </div>
            <div class="form-group">
              <label>Serial Number <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_serial_number" value="">
            </div>
          </div>
          <div class="panel-footer">
            <button type="submit" class="btn btn-info">Selesai</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php endif; ?>
  <?php if ($install->type_id == 5): ?>
    <form id="form" class="" action="<?=base_url()?>app_install/update_client" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">Identitas Perusahaan</div>
          <div class="panel-body">
            <h4>Profil Perusahaan</h4>
            <div class="form-group">
              <label>Nama Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_name" value="">
            </div>
            <div class="form-group">
              <label>Nama Brand <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_brand" value="">
            </div>
            <div class="form-group">
              <label>Status Usaha <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_status" value="">
            </div>
            <hr>
            <h4>Alamat Perusahaan</h4>
            <div class="form-group">
              <label>Jalan <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_street" value="">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_subdistrict" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_district" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kota/Kabupaten <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_city" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Provinsi <small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_province" value="">
                </div>
              </div>
            </div>
            <hr>
            <h4>Kontak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 1<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_1" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Telepon 2<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_phone_2" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Email <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_email" value="">
            </div>
            <hr>
            <h4>Wajib Pajak</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWP<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwp" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPWPD<small class="required-field">*</small></label>
                  <input class="form-control" type="text" name="client_npwpd" value="">
                </div>
              </div>
            </div>
            <h4>Pemilik</h4>
            <div class="form-group">
              <label>Nama Pemilik<small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_owner_name" value="">
            </div>
            <div class="form-group">
              <label>Alamat Pemilik<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_owner_address"></textarea>
            </div>
            <hr>
            <h4>Data Lain</h4>
            <div class="form-group">
              <label>Keterangan Tambahan<small class="required-field">*</small></label>
              <textarea class="form-control" type="text" name="client_notes"></textarea>
            </div>
            <div class="form-group">
              <label>Serial Number <small class="required-field">*</small></label>
              <input class="form-control" type="text" name="client_serial_number" value="">
            </div>
          </div>
          <div class="panel-footer">
            <button type="submit" class="btn btn-info">Selesai</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php endif; ?>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    //form validation
    $("#form").validate({
      rules : {
        'client_name' : {
          required : true
        },
        'client_street' : {
          required : true
        },
        'client_district' : {
          required : true
        },
        'client_province' : {
          required : true
        },
        'client_serial_number' : {
          required : true
        }
      },
      messages : {
        'client_name' : {
          required: '<i style="color:red">Wajib diisi!</i>'
        },
        'client_street' : {
          required: '<i style="color:red">Wajib diisi!</i>'
        },
        'client_district' : {
          required: '<i style="color:red">Wajib diisi!</i>'
        },
        'client_province' : {
          required: '<i style="color:red">Wajib diisi!</i>'
        },
        'client_serial_number' : {
          required: '<i style="color:red">Wajib diisi!</i>'
        }
      }
    });
  })
</script>