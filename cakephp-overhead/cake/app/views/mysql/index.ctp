  <h1><?php echo $title ?></h1>
  <?php
  echo $form->create('query', array('type' => 'GET', 'url' => '/mysql.php'));
  echo $form->input('id', array('id' => 'id', 'name' => 'id', 'value' => $id, 'size' => 4));
  echo $form->submit('Go');
  echo $form->end();
  ?>
  <table>
   <thead>
    <tr>
     <th>Id</th>
     <th>Name</th>
     <th>Abbr</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td><?php echo $item['Country']['id'] ?></td>
     <td><?php echo $item['Country']['name'] ?></td>
     <td><?php echo $item['Country']['abbr'] ?></td>
   </tbody>
  </table>