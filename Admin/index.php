<?php
require '../connection.php';
$sql = 'SELECT * FROM student';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Students <a style="margin-left:900px;" href="logout.php">logout</a></h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Names</th>
          <th>Reg No</th>
          <th>Department</th>
          <th>Level</th>
          <th>Sex</th>
          <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->fname; ?> <?= $person->lname; ?></td>
            <td><?= $person->regno; ?></td>
            <td><?= $person->depart; ?></td>
            <td><?= $person->level; ?></td>
            <td><?= $person->sex; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->regno ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->regno ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
