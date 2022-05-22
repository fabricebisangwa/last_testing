
<?php require 'header.php'; ?>
<div class="container w-25">
  <div class="card mt-5">
    <div class="card-header">
      <h2> Levels</h2>
    </div>
    <div class="card-body">  
    
      <form method="post">
        <div class="form-group">
          <label for="email"><b>Level</b></label>
          <div class="form-outline">
  <select class="form-control" id="sel1">
    <option>Level One</option>
    <option>Level Two</option>
    <option>Level Three</option>
  </select>
</div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add</button>
        </div>
      </form>
    
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
