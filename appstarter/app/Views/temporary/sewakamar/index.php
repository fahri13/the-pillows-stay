<?= $this->extend('dashboard/index'); ?>
<?= $this->section('content'); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Jumlah Tamu</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach($kamar as $kmr) : ?>
    <tr>
      <th scope="row"><?= $kmr['id']; ?></th>
      <td><?= $kmr['tipe_kamar']; ?></td>
      <td><?= $kmr['jumlah_tamu']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection(); ?>
