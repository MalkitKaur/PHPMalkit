<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Malkit Pizzeria</title>
  <meta name="description" content="Malkit Pizza Form">
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <header>
    <nav>
      <div>
        <a href="index.php"><img src="./img/pizzalogo.png" alt="header logo"></a>
        <div>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">View</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="masthead">
    <div>
      <h2>LIP SMACKING PIZZAS!</h2>
    </div>
  </section>

  <main>
    <section>
      <div class="indexBody">
        <form method="post">
          <div>
            <label for="input1" class="field">Name:</label>
            <div>
              <input type="text" name="fullName" id="input1">
            </div>
          </div>
          <div>
            <label for="input2" class="field">Address:</label>
            <div>
              <input type="text" name="addr" id="input2">
            </div>
          </div>
          <div>
            <label for="input3" class="field">Contact Number:</label>
            <div>
              <input type="tel" name="contactNum" id="input3">
            </div>
          </div>
          <div>
            <label for="s" class="field">Size of Pizza:</label>
            <p>
              <input type="radio" id="s" name="size" value="small">
              <label for="s">Small</label>
              <input type="radio" id="m" name="size" value="medium">
              <label for="m">Medium</label>
              <input type="radio" id="l" name="size" value="large">
              <label for="l">Large</label>
              <input type="radio" id="xl" name="size" value="extra-large">
              <label for="xl">Extra Large</label>
            </p>
          </div>

          <div>
            <label for="input5" class="field">Choose Pizza Crust:</label>
            <select name="crust" id="input5">
              <option value="stuffed">Stuffed Crust</option>
              <option value="thin">Thin Crust</option>
              <option value="thick">Thick Crust</option>
            </select>
          </div>
          <div>
            <label class="field">Select Toppings:</label>
            <p>
              <input type="checkbox" id="pizz1" name="pizzas[]" value=" corns ">
              <label for="pizz1">Corns</label>
              <input type="checkbox" id="pizz2" name="pizzas[]" value=" pepper ">
              <label for="pizz2">Bell pepper</label>
              <input type="checkbox" id="pizz3" name="pizzas[]" value=" tomatoes ">
              <label for="pizz3">Tomatoes</label>
              <input type="checkbox" id="pizz4" name="pizzas[]" value=" pineapple ">
              <label for="pizz4">Pineapple</label>
              <input type="checkbox" id="pizz5" name="pizzas[]" value=" Onion ">
              <label for="pizz5">Onions</label>
              <input type="checkbox" id="pizz6" name="pizzas[]" value=" Olives ">
              <label for="pizz6">Olives</label>
              <input type="checkbox" id="pizz7" name="pizzas[]" value=" Spinach ">
              <label for="pizz7">Spinach</label>
            </p>
          </div>
          <div>
            <label class="field">Select Dips:</label>
            <input type="checkbox" id="dip1" name="dips[]" value=" garlic ">
            <label for="dip1">Creamy Garlic</label>
            <input type="checkbox" id="dip2" name="dips[]" value=" ranch ">
            <label for="dip2">Ranch Sauce</label>
            <input type="checkbox" id="dip3" name="dips[]" value=" bbq ">
            <label for="dip3">BBQ Sauce</label>
            <input type="checkbox" id="dip4" name="dips[]" value=" hot ">
            <label for="dip4">Hot Sauce</label>
          </div>

          <div>
            <input type="submit" value="Submit">
          </div>
        </form>
        <div>
          <?php
            require_once('database.php');
            if(isset($_POST) & !empty($_POST)){
              $fullName = $database->sanitize($_POST['fullName']);
              $addr = $database->sanitize($_POST['addr']);
              $contactNum = $database->sanitize($_POST['contactNum']);
              $size = $database->sanitize($_POST['size']);
              $crust = $database->sanitize($_POST['crust']);
              $cheese = $database->sanitize($_POST['cheese']);
              $pizzaToppings = " ";
              $toppingName = $_POST['pizzas'];
              foreach($toppingName as $pizzaValue){
                $pizzaToppings .= $pizzaValue;
              }
              $pizzaDips = " ";
              $dipName = $_POST['dips'];
              foreach($dipName as $dipValue){
                $pizzaDips .= $dipValue;
              }
              $res = $database->create($fullName, $addr, $contactNum, $size, $crust, $cheese, $pizzaToppings, $pizzaDips);
              if($res){
                echo "<p>Successfully inserted data!! Woohoo!</p>";
              }else{
                echo "<p>Failed!! Try Again!!</p>";
							}
						}
					 ?>
        </div>
      </div>
    </section>
  </main>
</body>

</html>