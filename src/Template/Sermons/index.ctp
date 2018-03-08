<h1>Sermons<h1>

<table>
  <tr>
    <th>Title</th>
    <th>Created</th>
  </tr>
  <?php foreach ($sermons as $sermon): ?>
    <tr>
      <td><?php echo $sermon->title; ?></td>
      <td><?php echo $sermon->created; ?></td>
    </tr>
  <?php endforeach; ?>
</table>