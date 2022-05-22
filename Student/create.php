
<?php require 'header.php'; ?>
<div class="container w-50">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create student</h2>
    </div>
    <div class="card-body">
    <form method="post" action="insertstudent.php">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1"><b>First name</b></label>
        <input type="text"class="form-control" name="fname"/>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1"><b>Last name</b></label>
        <input type="text" class="form-control" name="lname"/>
      </div>
    </div>
  </div>
  <div class="row mb-4">

    <div class="col">
    <label class="form-label" ><b>Sex</b></label><br>
    <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="sex" value="Male">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="sex" value="Female">Female
  </label>
</div>

    </div>
    <div class="col">
    <label class="form-label" ><b>Department</b></label><br>
    <div class="form-outline">
  <select class="form-control" name="depart">
    <option>IT</option>
    <option>RE</option>
    <option>ET</option>
    <option>MET</option>
  </select>
</div>


    </div>
  </div>
  <div class="row mb-4">
  
    <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Accademic Year</b></label><br>
      <div class="form-outline">
  <select class="form-control" name="academic">
    <option value="19RP">2019-2020</option>
    <option value="20RP">2020-2021</option>
    <option value="21RP">2021-2022</option>
  </select>
</div>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" ><b>Level</b></label><br>
      <div class="form-outline">
  <select class="form-control" name="level">
    <option value="Level One">Level One</option>
    <option value="Level Two">Level Two</option>
    <option value="Level Three">Level Three</option>
  </select>
</div>
      </div>
    </div>
  </div>



  <!-- Submit button -->
  <button name="add_student" type="submit" class="btn btn-primary btn-block mb-4">Add Student</button>

</form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
