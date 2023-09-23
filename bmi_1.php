<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center;">
    <h1>โปรแกรมคำนวณ BMR-TDEE</h1>
    <img src="./images/bt.PNG" alt="" srcset="">
    <hr>
    <form action="./bmi_2.php" method="POST">
        <table style="width: 100% ;">
            <tr>
                <td style="text-align: right;">
                    <b>ชื่อ - สกุล :</b>
                </td>
                <td style="text-align: left;">
                    <input type="text" name="p_bmr" id="" required>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <b>เพศ :</b>
                </td>
                <td style="text-align: left;">
                    <input type="radio" name="sex_bmr" id="" value="m" checked> ชาย
                    <input type="radio" name="sex_bmr" id="" value="f"> หญิง
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <b>น้ำหนัก (กิโลกรัม) :</b>
                </td>
                <td style="text-align: left;">
                    <input type="text" name="w_bmr" id="" required>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <b>ส่วนสูง (เซนติเมตร) :</b>
                </td>
                <td style="text-align: left;">
                    <input type="text" name="h_bmr" id="" required>
                </td>
            <tr>
                <td style="text-align: right;">
                    <b>อายุ (ปี) :</b>
                </td>
                <td style="text-align: left;">
                    <input type="text" name="y_bmr" id="" required>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <b>กิจกรรม :</b>
                </td>
                <td style="text-align: left;">
                    <select name="ex_bmr" id="">
                        <option value="1" selected>ไม่ออกกำลังกายเลย</option>
                        <option value="2">ออกกำลังกาย 1-3 วัน/สัปดาห์</option>
                        <option value="3">ออกกำลังกาย 3-5 วัน/สัปดาห์</option>
                        <option value="4">ออกกำลังกาย 6-7 วัน/สัปดาห์</option>
                        <option value="5">ออกกำลังกายอย่างหนัก</option>
                    </select>
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="ตกลง">
        <input type="reset" value="ยกเลิก">
    </form>
</body>

</html>