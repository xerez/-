<h1>Index</h1>

<table>
<?php foreach ($datas as $data): ?>
  <tr>
    <td><?php echo $data['SampleData']['name']; ?></td>
    <td><?php echo $data['SampleData']['description']; ?></td>
    <td><?php echo $data['SampleData']['img']; ?></td>
  </tr>
<?php endforeach; ?>

<a href="/cakephp/sample_datas/add">追加</a>
</table>