<html>
  <body>
    <?php
    // get user input and store in array
    $firstOperand = $_REQUEST["first"];
    $secondOperand = $_REQUEST["second"];

      if (isset($_GET['first'])) {
        $first = $_GET['first'];
      } else {
        echo "Please enter the first number";
        exit;
      }

      if (isset ($_GET['second'])) {
        $second = $_GET['second'];
      } else {
        echo "Please enter the second number";
        exit;
      }

      if ($_GET['second'] == 0 ) {
        echo 'Can\'t divide by zero!' ;
      }

      // perfom calculations
      $add_result = $firstOperand + $secondOperand;
      $subtract_result = $firstOperand - $secondOperand;
      $multiplication_result = $firstOperand * $secondOperand;
      $division_result = $firstOperand / $secondOperand;

      // display results
      echo 'Your first input is: ' . "$first". '<br />';
      echo 'Your second input is: ' . "$secondOperand".'<br />';
      echo '<h1>Addition result: </h1>'. "$add_result".'<br />';
      echo '<h1>Deduction result: </h1>'. "$subtract_result". '<br />';
      echo '<h1>Multiplication result: </h1>'. "$add_result". '<br />';
      echo '<h1>Division result</h1>'. "$division_result". '<br />';
      ?>

  </body>
</html>
