<div class="content-header">
  <h4><i class="fa fa-<?=$access->module_icon?>"></i> <?=$title?></h4>
  <small>Kolom dengan tanda <b class="required-field">*</b> wajib diisi!</small>
</div>
<div class="content-body">
  <div class="row">
    <form id="form" class="" action="<?=base_url()?>hot_service/<?=$action?>" method="post">
      <div class="col-md-6">
        <input class="form-control" type="hidden" name="service_id" value="<?php if($service != null){echo $service->service_id;}?>">
        <div class="form-group">
          <label>Nama Pelayanan Kamar<small class="required-field">*</small></label>
          <input class="form-control" type="text" name="service_name" value="<?php if($service != null){echo $service->service_name;}?>">
        </div>
        <div class="form-group">
          <label>Harga<small class="required-field">*</small></label>
          <input class="form-control" type="number" name="service_price" value="<?php if($service != null){echo $service->service_price;}?>">
        </div>
        <div class="form-group">
          <label>Tersedia?</label><br>
          <input class="" type="checkbox" name="is_active" value="1" <?php if($service != null){if($service->is_active == 1){echo 'checked';}}else{echo 'checked';}?>>
        </div>
        <div class="form-group pull-right">
          <a class="btn btn-default" href="<?=base_url()?>hot_service/index"><i class="fa fa-close"></i> Batal</a>
          <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $("#form").validate({
      rules: {
        'service_id': {
          required: true
        },
        'service_name': {
          required: true
        }
      },
      messages: {
        'service_id': {
          required: '<i style="color:red">Wajib diisi!</i>'
        },
        'service_name': {
          required: '<i style="color:red">Wajib diisi!</i>'
        }
      }
    });
  })
</script>