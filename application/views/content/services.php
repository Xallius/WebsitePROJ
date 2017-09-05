
<!-- table for displaying services! -->
<div class="container">
  <table class="highlight grey lighten-5">
    <thead>
      <tr>
        <th colspan="2" style="text-align: center;">Basic Hair Services</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($servicesRow as $sRow): ?>
          <?php if($sRow->sCategory === "Basic Hair Services"): ?>
          <tr>
            <td><?php echo $sRow->sService; ?></td>
            <td><?php echo $sRow->sPrice; ?></td>
          </tr>
          <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
    <thead>
      <tr>
        <th colspan="2" style="text-align: center;">Special Services</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($servicesRow as $sRow): ?>
          <?php if($sRow->sCategory === "Special Services"): ?>
            <tr>
              <td><?php echo $sRow->sService; ?></td>
              <td><?php echo $sRow->sPrice; ?></td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
    <thead>
      <tr>
        <th colspan="2" style="text-align: center;">Nails Services</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($servicesRow as $sRow): ?>
          <?php if($sRow->sCategory === "Nails Services"): ?>
          <tr>
            <td><?php echo $sRow->sService; ?></td>
            <td><?php echo $sRow->sPrice; ?></td>
          </tr>
          <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>