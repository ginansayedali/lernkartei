<!DOCTYPE html>
  <?php include 'routes.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Setup</title>
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $css ?>bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $css ?>main.css" />
  </head>
  <body>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['db_setup'])) {
          $db_host = $_POST['db_host'];
      		$db_name = $_POST['db_name'];
      		$db_username = $_POST['db_username'];
      		$db_password = $_POST['db_password'];

          $dsn = 'mysql:host='.$db_host.';dbname='.$db_name.'';
          $option = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

          try {
            $dbConnect = new PDO($dsn, $db_username, $db_password, $option);
            $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connectMsg = '
              <div class="alert alert-success" role="alert">
              -> Connection has been established <br>-> You are connected to the database
              </div>';
            //echo 'you are connected to the database <br />';

          } catch(PDOException $e){
            $connectMsg = ' <div class="alert alert-danger" role="alert">'.  $e->getMessage() .' </div>';
            //echo 'Faild to connect ' . $e->getMessage();
          }

          if ($dbConnect) {
            try {
              file_put_contents('config.php', '<?php
                define( "DB_HOST", "'. $db_host .'" );
                define( "DB_NAME", "'. $db_name .'" );
                define( "DB_USERNAME", "'. $db_username .'" );
                define( "DB_PASSWORD", "'. $db_password .'");
                ');
            } catch(PDOException $e){
              echo $e->getMessage();
            }

            try {
              $sqlUsers = "CREATE table users(
                           id INT( 11 ) PRIMARY KEY NOT NULL AUTO_INCREMENT,
                           username VARCHAR( 50 ) NOT NULL,
                           password VARCHAR( 50 ) NOT NULL,
                           email VARCHAR( 50 ) NOT NULL);" ;

              $sqlCards = "CREATE table cards(
                            id INT( 11 ) PRIMARY KEY NOT NULL AUTO_INCREMENT,
                            question VARCHAR( 50 ) NOT NULL,
                            answer VARCHAR( 50 ) NOT NULL);" ;

              $sqlBoxHasCard = "CREATE table box_has_card(
                                box INT( 4 ) NOT NULL,
                                card INT( 4 ) NOT NULL,
                                PRIMARY KEY (box,card));" ;

              $sqlBoxRel = "ALTER TABLE box_has_card
                              ADD CONSTRAINT box_cards
                              FOREIGN KEY (card)
                              REFERENCES cards (id)
                              ON DELETE CASCADE
                              ON UPDATE CASCADE ;" ;

              $dbConnect->exec($sqlUsers);
              $dbConnect->exec($sqlCards);
              $dbConnect->exec($sqlBoxHasCard);
              $dbConnect->exec($sqlBoxRel);

              $stmt = $dbConnect->prepare(" INSERT INTO users(username, password, email)
                VALUES (:zuser, :zpass, :zemail) ");
              $stmt->execute(array(
                'zuser' => 'admin',
                'zpass' => 'admin',
                'zemail' => 'admin@lernkartei'
              ));

              $stmt = $dbConnect->prepare(" INSERT INTO cards(question, answer)
                VALUES (:zquestion, :zanswer) ");
              $stmt->execute(array(
                'zquestion' => 'lernkartei',
                'zanswer' => 'So lernt man lernen'
              ));

              $stmt = $dbConnect->prepare(" INSERT INTO box_has_card(box, card)
                VALUES (:zbox, :zcard) ");
              $stmt->execute(array(
                'zbox' => 1,
                'zcard' => 1
              ));

              $dbstrMsg = '
                <div class="alert alert-success" role="alert">
                    -> Users table has been created
                <br>-> Cards table has been created </div>';
            } catch(PDOException $e){
              $dbstrMsg = ' <div class="alert alert-danger "
                role="alert"> '.$e->getMessage() . ' </div>';
              // echo $e->getMessage();
            }
          }
        }
      }
    ?>
    <div class="fullwidth-container ">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="setup-left-widget">SETUP</div>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-9">
          <div class="setup-header">
           <h2>Welcome to {AppName}</h2>
          </div>
          <div class=" login-page">
          	<h1 class="text-center">
          		<span class="selected" data-class="database-setup">Database connection</span>
               | <span data-class="database-prepare">Admin Account</span>
          	</h1>
            <form class="database-setup" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            	<div class="input-container">
            		<input
          				class="form-control"
          				type="text"
          				name="db_host"
          				autocomplete="off"
          				placeholder="Database host"
          				required />
          		</div>
              <div class="input-container">
          			<input
          				class="form-control"
          				type="text"
          				name="db_name"
          				autocomplete="off"
          				placeholder="Database name"
          				required />
          		</div>
              <div class="input-container">
          			<input
          				class="form-control"
          				type="text"
          				name="db_username"
          				autocomplete="off"
          				placeholder="Database username"
          				required />
          		</div>
          		<div class="input-container">
          			<input
          				class="form-control"
          				type="password"
          				name="db_password"
          				autocomplete="new-password"
          				placeholder="Database password"
          				required />
          		</div>
              <div class="input-container">
                <input
                  class ="btn btn-primary btn-block"
                  name = "db_setup"
                  type="submit"
                  value="Connect" />
              </div>
                <?php
                  echo $connectMsg;
                  echo $dbstrMsg;
                ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo $js ?>jquery-3.3.1.min.js"></script>
		<script src="<?php echo $js ?>jquery-ui.min.js"></script>
		<script src="<?php echo $js ?>bootstrap.min.js"></script>
		<script src="<?php echo $js ?>jquery.selectBoxIt.min.js"></script>
		<script src="<?php echo $js ?>mainjs.js"></script>
  </body>
</html>
