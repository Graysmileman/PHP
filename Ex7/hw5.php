<?php
// ฟังก์ชันแยกชื่อ-สกุล (แบบง่าย)
function splitName($fullname)
{
    $prefix = "";
    $firstname = "";
    $lastname = "";

    // รายการคำนำหน้า
    $prefixList = array(
        "นาย",
        "นาง",
        "นางสาว",
        "เด็กชาย",
        "เด็กหญิง"
    );

    // ตัดช่องว่างหน้าหลัง
    $fullname = trim($fullname);

    // ตรวจสอบคำนำหน้า
    foreach ($prefixList as $p) {
        if (strpos($fullname, $p) === 0) {
            $prefix = $p;
            $fullname = str_replace($p, "", $fullname);
            break;
        }
    }

    // แยกชื่อกับสกุล
    $nameParts = explode(" ", trim($fullname));

    if (count($nameParts) > 0) {
        $firstname = $nameParts[0];
    }

    if (count($nameParts) > 1) {
        $lastname = $nameParts[1];
    }

    return array(
        "prefix" => $prefix,
        "firstname" => $firstname,
        "lastname" => $lastname
    );
}

// ค่าเริ่มต้น
$result = array(
    "prefix" => "",
    "firstname" => "",
    "lastname" => ""
);

if (isset($_POST["fullname"])) {
    $result = splitName($_POST["fullname"]);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แยกชื่อ - สกุล</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2ff;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .box {
            background: #ffffff;
            width: 420px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #4f46e5;
        }

        p {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        label {
            display: block;
            margin-top: 12px;
            font-size: 14px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }

        .result {
            margin-top: 20px;
            background: #f8fafc;
            padding: 15px;
            border-radius: 8px;
        }

        .result p {
            text-align: left;
            margin: 6px 0;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>โปรแกรมแยกชื่อ - สกุล</h2>
    <p>กรอกชื่อ-สกุลพร้อมคำนำหน้า</p>

    <form method="post">
        <label>ชื่อ-สกุล</label>
        <input type="text" name="fullname" placeholder="นายสมชาย ใจดี" required>

        <button type="submit">แยกชื่อ</button>
    </form>

    <?php if (!empty($result["firstname"])) { ?>
        <div class="result">
            <p><strong>คำนำหน้า:</strong> <?= $result["prefix"] ?></p>
            <p><strong>ชื่อ:</strong> <?= $result["firstname"] ?></p>
            <p><strong>สกุล:</strong> <?= $result["lastname"] ?></p>
        </div>
    <?php } ?>
</div>

</body>
</html>
