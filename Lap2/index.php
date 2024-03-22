<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lap1/style.css">
    <title>PHP OOP</title>
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <?php
            require_once ("thanhvien.php");
            // create new user info
            $sv = new thanhvien("Nguyen Van A", "email1@gmail.com");
            //output user info
            echo "<h2>-- Member information --</h2>";
            echo "Code: " . $sv->getId() . "<br/>";
            echo "Fullname: " . $sv->getFullname() . "<br/>";
            echo "Email: " . $sv->getEmail() . "<br/>";
            ?>
            <?php
            $sv2 = new thanhvien("Tran Van B", "email2@gmail.com");
            echo "<h2>---More information--</h2>";
            echo "Code: " . $sv2->getId() . "<br/>";
            echo "Fullname: " . $sv2->getFullname() . "<br/>";
            echo "Email: " . $sv2->getEmail() . "<br/>";
            ?>
        </div>

        <?php
        //more opp php
        include ("staff.php");
        $character = new character("Nguyen Van A", 5678);
        echo "<h2>--- Add: Object Oriented PHP --</h2>";
        echo "Full name: " . $character->getFullname() . "<br/>";
        echo "Country code: " . $character->get_countrycode() . "<br/>";
        ?>

        <?php
        $staff = new staff("Nguyen Van B", 1234, "Guard");
        echo "<h2>---Staff--</h2>";
        echo "Mã nhân viên: " . $staff->getStaffCode() . "<br/>";
        echo "Họ tên: " . $staff->getFullname() . "<br/>";
        echo "Mã QG: " . $staff->get_countrycode() . "<br/>";
        echo "Bộ phận: " . $staff->getpart() . "<br/>"
            ?>
        <footer>
            <p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>
    </div>
</body>

</html>