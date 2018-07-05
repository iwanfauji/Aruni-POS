<div class="content-header">
  <h4><i class="fa fa-<?=$access->module_icon?>"></i> <?=$title?></h4>
</div>
<div class="content-body">
  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-primary" href="<?=base_url()?>par_report_log/monthly_pdf/<?=$month?>" target="_blank"><i class="fa fa-print"></i> Download PDF</a>
      <br><br>
      <table class="table table-condensed table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jenis</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($monthly != null): ?>
            <?php $i=1; foreach ($monthly as $row): ?>
              <tr>
                <td class="text-center"><?=$i++?></td>
                <td><?=$row->user_realname?></td>
                <td class="text-center"><?=$row->log_type?></td>
                <td class="text-center"><?=$row->log_date?></td>
                <td class="text-center"><?=$row->log_time?></td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td class="text-center" colspan="10">Tidak ada data</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>