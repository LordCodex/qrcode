<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `admin` WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['emails'] = $row['email'];

                $_SESSION['img'] = $row['img'];

                $_SESSION['id'] = $row['id'];

                header("Location: home");

                exit();

            }else{

                header("Location: index?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index");

    exit();

}