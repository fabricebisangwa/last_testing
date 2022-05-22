<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = 'INSERT INTO people(name, email) VALUES(:name, :email)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container w-50">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Student Marks</h2>
    </div>
    <div class="card-body">
    <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->

  <div class="row mb-4">
  <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Marks</b></label><br>
        <input type="text" id="form3Example2" class="form-control" />
      
      </div>
    </div>

  </div>
  <div class="row mb-4">

    <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Student</b></label><br>
      <div class="form-outline">
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
  </select>
</div>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Module</b></label><br>
      <div class="form-outline">
  <select class="form-control" id="sel1">
    <option>IT</option>
    <option>RE</option>
   
  </select>
</div>
      </div>
    </div>
  </div>



  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Add Marks</button>

</form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
