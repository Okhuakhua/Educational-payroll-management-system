<?php 

  include("db.php");
  include("auth.php");

  $id           = $_POST['id'];
  $deduction    = $_POST['deduction'];
  $allowance    = $_POST['allowance'];
  $overtime     = $_POST['overtime'];
  $bonus        = $_POST['bonus'];

  $sql = mysql_query("UPDATE employee SET deduction='$deduction', allowance='$allowance', overtime='$overtime', bonus='$bonus' WHERE emp_id='$id'");

  if ($sql)
  {
    ?>
    <script>
      alert('Account successfully updated.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
    echo "Invalid";
  }
?>