<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCS->MySQL CRUD System-</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>MCS</h1>
    <div class="form-container">
        <form style="size:200%" method="post">
            <input type="text" name="user_name" id="user_name" placeholder="user">
            <input type="password" name="user_pass" id="user_pass" placeholder="pass">
            <input type="submit" value="check">
        </form>
    </div>
    <hr>
    <div>
        <div class="form-container">
            <form style="size:200%" method="post">
                <input type="text" name="user_name_s" id="user_name_s" placeholder="user search">
                <input type="submit" value="check">
            </form>


        </div>

        <?php


        include './includes/mysql_utils.php';
        session_start();

        function insertNewUser($user_name, $user_pass)
        {
            if (!isset($_POST['user_name']) and !isset($_POST['user_pass'])) {
                die;
            }

            $user_name = $_POST['user_name'];
            $user_pass = hash("sha512", $_POST['user_pass']);
            $conn = createConnectionMysql();
            $sql_query = "INSERT INTO soupy.users (user_name, user_pass) VALUES('$user_name', '$user_pass');";
            $result = genericQuery($sql_query, $conn);
            return $result;
        }


        ?>

        <script>

        </script>
</body>

</html>