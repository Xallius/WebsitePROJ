
<!-- table for displaying services! -->
<div class="container">
  <table  class="highlight grey lighten-5">
    <thead>
      <tr>
        <th>Services Available</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($servicesRow as $sRow): ?>
        <tr>
          <td><?php echo $sRow->sService; ?></td>
          <td><?php echo $sRow->sPrice; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>