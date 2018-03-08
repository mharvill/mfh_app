<h1>Speakers<h1>

<table>
  <tr>
    <th>Name</th>
    <th>Created</th>
  </tr>
  <?php foreach ($speakers as $speaker): ?>
    <tr>
      <td><?php echo $speaker->name; ?></td>
      <td><?php echo $speaker->created; ?></td>
    </tr>
  <?php endforeach; ?>
</table>