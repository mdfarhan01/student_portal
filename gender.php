
<?php

require_once 'bd-connection.php';
// echo '<pre>';

?>



<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <h1 class="heading">Gender</h1>
    <form action="stor-gender.php" method="POST" enctype="multipart/form-data">
    <div class="formbold-form-title">
      <label class="formbold-form-label" for="semster_name">Gender</label>
      <input type="text" name="gender" id="gender" class="formbold-form-input" required />
    </div>
      <button type="submit" class="formbold-btn">Add</button>
    </form>
  </div>
</div>


<link rel="stylesheet" href="style.css"/>