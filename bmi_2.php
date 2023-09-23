<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center;">
    <?php
    $p_bmr = $_POST["p_bmr"];
    $w_bmr = $_POST["w_bmr"];
    $h_bmr = $_POST["h_bmr"];
    $y_bmr = $_POST["y_bmr"];

    $sex_bmr = "";
    if ($_POST["sex_bmr"] == "m") {
        $sex_bmr = "ชาย";
    } else {
        $sex_bmr = "หญิง";
    }

    $ex_bmr = "";
    if ($_POST["ex_bmr"] == "1") {
        $ex_bmr = "ไม่ออกกำลังกายเลย";
    } else if ($_POST["ex_bmr"] == "2") {
        $ex_bmr = "ออกกำลังกาย 1-3 วัน/สัปดาห์";
    } else if ($_POST["ex_bmr"] == "3") {
        $ex_bmr = "ออกกำลังกาย 3-5 วัน/สัปดาห์";
    } else if ($_POST["ex_bmr"] == "4") {
        $ex_bmr = "ออกกำลังกาย 6-7 วัน/สัปดาห์";
    } else {
        $ex_bmr = "ออกกำลังกายอย่างหนัก";
    }

    $bmr_cal = "";
    if ($_POST["sex_bmr"] == "m") {
        $bmr_cal = 66 + (13.7 * $w_bmr) + (5 * $h_bmr) - (6.8 * $y_bmr);
    } else {
        $bmr_cal = 66.5 + (9.6 * $w_bmr) + (1.8 * $h_bmr) - (4.7 * $y_bmr);
    }

    $tdee_cal = "";
    if ($_POST["ex_bmr"] == "1") {
        $tdee_cal = $bmr_cal * 1.2;
    } else if ($_POST["ex_bmr"] == "2") {
        $tdee_cal = $bmr_cal * 1.375;
    } else if ($_POST["ex_bmr"] == "3") {
        $tdee_cal = $bmr_cal * 1.55;
    } else if ($_POST["ex_bmr"] == "4") {
        $tdee_cal = $bmr_cal * 1.725;
    } else {
        $tdee_cal = $bmr_cal * 1.9;
    }

    ?>

    <h1>โปรแกรมคำนวณ BMR-TDEE</h1>
    <img src="./images/bt.PNG" alt="" srcset="">
    <h1>ผลการคำนวณ</h1>
    <hr>
    <table style="width: 100% ;">
        <tr>
        <td style="text-align: right;">
                <b>ชื่อ - สกุล :</b>
            </td>
            <td style="text-align: left;">
                <?php echo $p_bmr; ?>
            </td>
        </tr>
        <tr>
        <td style="text-align: right;">
                <b>เพศ :</b>
            </td>
            <td style="text-align: left;">
                <?php echo $sex_bmr; ?>
            </td>
        </tr>
        <tr>
        <td style="text-align: right;">
                <b>น้ำหนัก (กิโลกรัม) :</b>
            </td>
            <td style="text-align: left;">
                <?php echo $w_bmr; ?>
            </td>
        </tr>
        <tr>
        <td style="text-align: right;">
                <b>ส่วนสูง (เซนติเมตร) :</b>
            </td>
            <td style="text-align: left;">
                <?php echo $h_bmr; ?>
            </td>
        <tr>
        <td style="text-align: right;">
                <b>อายุ (ปี) :</b>
            </td>
            <td style="text-align: left;">
                <?php echo $y_bmr; ?>
            </td>
        </tr>
        <tr>
        <td style="text-align: right;">
                <b>กิจกรรม :</b>
            </td>
            <td style="text-align: left;">
                <?php echo $ex_bmr; ?>

            </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
        <td style="text-align: right;">
                <b>BMR</b>
            </td>
            <td style="text-align: left;">
                <?php echo $bmr_cal; ?>
            </td>
        </tr>
        <tr>
        <td style="text-align: right;">
                <b>TDEE</b>
            </td>
            <td style="text-align: left;">
                <?php echo $tdee_cal; ?>
            </td>
        </tr>
    </table>

</body>

</html>