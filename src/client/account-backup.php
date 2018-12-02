<?php session_start();
if (!isset($_SESSION['username'])) {
    //not logged in (Guest) GET OUT
    header("Location: login.php");
    die();
}
else{
		include 'include/db_credentials.php';
		$connection = mysqli_connect($host, $user, $password, $database);
        $error      = mysqli_connect_error();
		$uid = $_SESSION['userID'];
		$sql = "SELECT * FROM Customer WHERE userID='$uid';";
		if($connection -> connect_error) {
              die("Connection failed: " . $connection -> connect_error);
            }
            // echo "Connected to Server.";
            if ($error != null) {
                $output = "<p>Unable to connect to database!</p>";
                exit($output);
            } else {
                if ($results = mysqli_query($connection, $sql)) {
                    while ($row = mysqli_fetch_row($results)) {
						$first_name = $row[1];
						$last_name = $row[2];
						$address = $row[3];
						$username = $_SESSION['username'];
						$email = $_SESSION['email'];
						if($row[4]==NULL){
							$img_src = "images/profilePlaceholder.png";
						} else {
							$img_src = $row[4];
						}

                        }
                    }
                    mysqli_free_result($results);
            }
            mysqli_close($connection);
        }
?>
<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <title>COSC VE Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/mad.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/account.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php include 'include/header.php'; ?>
    <main>
        <div class="columnContainer">
            <!-- Sidebar code -->
            <?php include "include/sidesearch.php"; ?>
            <!-- Page code -->
            <section class="mainView">
                <form method="GET" action="#">
                    <div class="left">
                        <fieldset id="imgInput">
                            <img src=<?php echo $img_src ?>>
                            <input type="file" name="profile" accept="image/*">
                        </fieldset>
                        <a href="paymentMethod.php"><button>Payment Method</button></a>
                        <a href="orderStatus.php"><button>Orders</button></a>
                        <a href="commentHistory.php"><button>Comment History</button></a>
                    </div>
                    <fieldset class="acRight">
                        <h3>Username:</h3>
                        <p><?php echo $username; ?></p>
                    </fieldset>
                    <fieldset class="acRight">
                        <h3>Email:</h3>
                        <p>
							<input name="email" type="email" value="<?php echo $email; ?>" disabled="true">
                        </p>
                    </fieldset>
                    <fieldset class="acRight">
                        <h3>Password:</h3>
                        <p>
							<input name="pass" type="password" value="•••••••" disabled="true">
						</p>
                        <h3 class="passConfirmh3">Confirm Password:</h3>
                        <input id="passConfirm" type="password">
                        <div></div>
                    </fieldset>
                    <fieldset class="acRight">
                        <h3>First name:</h3>
                        <p><?php echo $first_name; ?></p>
                    </fieldset>
                    <fieldset class="acRight">
                        <h3>Last name:</h3>
                        <p><?php echo $last_name; ?></p>
                    </fieldset>
                    <fieldset class="acRight">
                        <h3>Address:</h3>
                        <p>
							<input name="addr" type="text" value="<?php echo $address; ?>" disabled="true">
                        </p>
                    </fieldset>
					<input id="editBt" class="acRight" type="button" value="Edit Profile">
                    <input id="saveBt" class="acRight" type="submit" value="Save Changes" style="hidden:'true'">
                </form>
            </section>
        </div>

        <?php include "include/footer.php" ?>

    </main>

</body>

</html>
