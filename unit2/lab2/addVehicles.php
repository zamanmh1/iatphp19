<html>
<body>
  <?php
  if (!empty ($_POST )) {
    require_once('connectdb.php');

    $reg_no = $_POST['regNo'];
    if(empty($reg_no)) {
      echo ("You must enter a registration number. ");
      exit;
    }
  }

  $category = $_POST['category'];
  if(empty($category)) {
    echo ("You must enter a category");
    exit;
  }

  $brand = $_POST['brand'];

  $dailyRate = round($_POST['dailyRate'], 2);
  if (empty($dailyRate) || $dailyRate <= 0) {
    echo ("Invalid daily rate");
    exit;
  }

  try {
    $stmt = $db->prepare("INSERT INTO `vehicles` (`reg_no`, `category`, `brand`,`dailyrate`)") . "VALUES (?, ?, ?, ?)";

    $stmt->execute(array($reg_no, $category, $brand, $dailyRate));

    echo ("Successful");

  } catch (PDOException $e) {
    echo ("Failed to save data to databse.<br />");
    echo ($e->getMessage());
    exit;

  }

  ?>
</body>
</html>
