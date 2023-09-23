<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div><img src="./images/onlineservices.jpg" alt="" srcset=""></div>
    <h1>Online Services V.1.0</h1>
    <h2>"ชำระค่าสาธารณูปโภคหลากหลายเพื่อความสะดวกของคุณ"</h2>
    <hr>
    <form action="./midterm_2.php" method="POST">
        <table>
            <tr>
                <td style="text-align: right;">
                    รหัสประจำตัวประชาชน
                </td>
                <td>
                    <input type="text" name="id_p" id="">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    คำนำหน้า
                </td>
                <td>
                    <input type="radio" name="p_sex" id="" value="m" checked> นาย
                    <input type="radio" name="p_sex" id="" value="f"> นาง
                    <input type="radio" name="p_sex" id="" value="yf"> นางสาว
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    ชื่อ - สกุล
                </td>
                <td>
                    <input type="text" name="p_name" id="">
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    ชำระต่าสาธารณูปโภค
                </td>
                <td>
                    <input type="checkbox" name="p_papa" id="" value=""> ประปา <input type="text" name="c_papa" id=""> บาท
                </td>
            <tr>
                <td>

                </td>
                <td>
                    <input type="checkbox" name="p_faifa" id="" value=""> ไฟฟ้า <input type="text" name="c_faifa" id=""> บาท
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    ชำระค่าโทรศัพท์
                </td>
                <td>
                    <input type="checkbox" name="p_tel" id="" value=""> โทรศัพท์บ้าน <input type="text" name="c_tel" id=""> บาท
                </td>
            </tr>
            <td>

            </td>
            <td>
                <input type="checkbox" name="p_tel" id="" value=""> AIS <input type="text" name="c_ais" id=""> บาท
            </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="checkbox" name="p_tel" id="" value=""> DTAC <input type="text" name="c_dtac" id=""> บาท
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="checkbox" name="p_tel" id="" value=""> TRUE <input type="text" name="c_true" id=""> บาท
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    ส่วนลดเฉพาะค่าสาธารณูปโภค
                </td>
                <td>
                    <select name="p_sell" id="">
                        <option value="1" selected>ไม่มีส่วนลด</option>
                        <option value="2">ลด 5%</option>
                        <option value="3">ลด 10%</option>
                    </select>
                </td>
            </tr>
        </table>
        <hr>
        <div style="width : 90%">
            <input type="submit" value="ชำระค่าบริการ">
            <input type="reset" value="ยกเลิก" style="margin-left : 10px;">
        </div>
        <br>
        <div><span><u>หมายเหตุ</u></span> ค่าบริการคิด 15 บาทต่อรายการ โดยคิดเฉพาะการชำระค่าโทรศัพท์เท่านั้น</div>
        <br><br>



    </form>
</body>

</html>