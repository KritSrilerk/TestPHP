<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id_p = $_POST["id_p"];
    $p_name = $_POST["p_name"];
    $c_papa = $_POST["c_papa"];
    $c_faifa = $_POST["c_faifa"];
    $c_tel = $_POST["c_tel"];
    $c_ais = $_POST["c_ais"];
    $c_dtac = $_POST["c_dtac"];
    $c_true = $_POST["c_true"];

    $p_sex = "";
    if ($_POST["p_sex"] == "m") {
        $p_sex = "นาย";
    } else if ($_POST["p_sex"] == "f") {
        $p_sex = "นาง";
    } else {
        $p_sex = "นางสาว";
    }

    $p_papa = isset($_POST["p_papa"]) ? $_POST["p_papa"] : $c_papa = 0;
    $p_faifa = isset($_POST["p_faifa"]) ? $_POST["p_faifa"] : $c_faifa = 0;
    $p_tel = isset($_POST["p_tel"]) ? $_POST["p_tel"] : $c_tel = 0;
    $p_tel = isset($_POST["p_tel"]) ? $_POST["p_tel"] : $c_ais = 0;
    $p_tel = isset($_POST["p_tel"]) ? $_POST["p_tel"] : $c_dtac = 0;
    $p_tel = isset($_POST["p_tel"]) ? $_POST["p_tel"] : $c_true = 0;

    $p_sell = "";
    if ($_POST["p_sell"] == "1") {
        $p_sell = 0;
    } else if ($_POST["p_sell"] == "2") {
        $p_sell =  ($c_papa + $c_faifa) * (5 / 100);
    } else {
        $p_sell = ($c_papa + $c_faifa) * (10 / 100);
    }

    $p_total = $c_papa + $c_faifa + $c_tel + $c_ais + $c_dtac + $c_true;

    $c_service = 15;

    $p_tel = isset($_POST["p_tel"]) ? $_POST["p_tel"] : $c_service = 0;

    $all_total = $p_total - $p_sell + $c_service;

    ?>
    <div><img src="./images/onlineservices.jpg" alt="" srcset=""></div>
    <hr>
    <b>
        ใบเสร็จชำระค่าสาธารณูปโภค
    </b>
    <br>
    <b>ใบเสร็จชำระค่าบริการ</b>
    <br><br>
    <?php echo "<b>" . $p_sex . $p_name . "</b>"; ?><br>
    รหัสประจำตัวประชาชน <?php echo $id_p; ?><br><br>
    <b>
        รายการชำระค่าบริการ
    </b>
    <br><br>
    <table>
        <tr>
            <td>
                ประปา
            </td>
            <td>
                <?php echo $c_papa ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                ไฟฟ้า

            </td>
            <td>
                <?php echo $c_faifa ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                โทรศัพท์บ้าน
            </td>
            <td>
                <?php echo $c_tel ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                AIS
            </td>
            <td>
                <?php echo $c_ais ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                DTAC
            </td>
            <td>
                <?php echo $c_dtac ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                TRUE
            </td>
            <td>
                <?php echo $c_true ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                <b>รวมเป็นเงิน</b>
            </td>
            <td>
                <?php echo "<b style = 'background-color : darkgoldenrod'>" . $p_total ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                <b>ส่วนลด</b>
            </td>
            <td>
                <?php echo "<b style = 'background-color : darkgoldenrod'>" . $p_sell; ?> บาท
            </td>
        </tr>
        <tr>
            <td>
                <b>รวมเป็นเงินที่ต้องชำระ</b>
            </td>
            <td>
                <?php echo "<b style = 'background-color : darkgoldenrod'>". $all_total ?> บาท
            </td>
        </tr>
    </table>
    <br><br>
</body>

</html>