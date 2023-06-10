<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD in OOP PHP | Create & Read</title>
	<meta name="description" content="Malkit Pizza Form">
	<meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="indexBody">
  <header>
    <nav >
      <div >
        <a href="index.php"><img src="./img/php-logo.png" alt="header logo"></a>
        <button  type="button">
        </button>
        <div>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="view.php">View</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
	<section class="masthead">
		<div>
			<h1>LIP SMACKING PIZZAS!</h1>
		</div>
	</section>
  <main >
	   <section class="form section" >
		     <form method="post">
					 <h2>Create User</h2>
					 <div>
						 <label for="input1" >Name:</label>
						 <div>
							 <input type="text" name="fullName"  id="input1">
						 </div>
					 </div>
					 <div>
						 <label for="input2">Address:</label>
						 <div>
							 <input type="text" name="addr"  id="input2">
						 </div>
					 </div>
                     <div>
						 <label for="input3">Contact Number:</label>
						 <div>
							 <input type="tel" name="contactNum"  id="input3">
						 </div>
					 </div>
					 <div>
                        <label for="input4">Size of Pizza:</label>
                        <input type="radio" id="s" name="size" value="small">
                        <label for="s">Small</label>
                        <input type="radio" id="m" name="size" value="medium">
                        <label for="m">Medium</label>
                        <input type="radio" id="l" name="size" value="large">
                        <label for="l">Large</label>
                        <input type="radio" id="xl" name="size" value="extra-large">
                        <label for="xl">Extra Large</label>
                    </div>

                     <div>
                            <label for="input5">Choose Pizza Crust:</label>
                            <select name="crust" id="input5">
                                <option value="stuffed">Stuffed Crust</option>
                                <option value="thin">Thin Crust</option>
                                <option value="thick">Thick Crust</option>
                            </select>
                     </div>
                     <div>
						 <label for="input6">Cheese:</label>
                         <select name="cheese" id="input6">
                                <option value="Mozzarella">Mozzarella</option>
                                <option value="Cheddar">Cheddar</option>
                                <option value="Parmesan">Parmesan</option>
                            </select>
					 </div>
					 <div>
                        <label>Select Toppings:</label>
                        <p>
                        <input type="checkbox" id="pizz1" name="pizzas[]" value=" corns ">
                        <label for="pizz1">Corns</label>
                        <input type="checkbox" id="pizz2" name="pizzas[]" value=" pepper ">
                        <label for="pizz2">Bell pepper</label>
                        <input type="checkbox" id="pizz3" name="pizzas[]" value=" tomatoes ">
                        <label for="pizz3"> Tomatoes</label>
                        <input type="checkbox" id="pizz4" name="pizzas[]" value=" pineapple ">
                        <label for="pizz4"> Pineapple</label>
                        <input type="checkbox" id="pizz5" name="pizzas[]" value=" Onion ">
                        <label for="pizz5"> Onions</label>
                        <input type="checkbox" id="pizz6" name="pizzas[]" value=" Olives ">
                        <label for="pizz6"> Olives</label>
                        <input type="checkbox" id="pizz7" name="pizzas[]" value=" Spinach ">
                        <label for="pizz7"> Spinach</label>
                        </p>
                    </div>
                    <div>
                        <label>Select Dips:</label>
                        <p>
                        <input type="checkbox" id="dip1" name="dips[]" value=" garlic ">
                        <label for="dip1">Creamy Garlic</label>
                        <input type="checkbox" id="dip2" name="dips[]" value=" ranch ">
                        <label for="dip2">Ranch Sauce</label>
                        <input type="checkbox" id="dip3" name="dips[]" value=" bbq ">
                        <label for="dip3"> BBQ Sauce</label>
                        <input type="checkbox" id="dip4" name="dips[]" value=" hot ">
                        <label for="dip4"> Hot Sauce</label>
                        </p>
                    </div>
					 <div >
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
								echo "<p>Successfully inserted data!! Woohoo !</p>";
							}else{
								echo "<p>Failed!! Try Again!!</p>";
							}
						}
					 ?>
        </div>
      </section>
     </main>
   </body>
</html>
