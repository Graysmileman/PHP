<?php
$amount = 0;
$isMember = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    if (isset($_POST["member"])) {
        $isMember = true;
    }
}

$discount = 0;
$memberDiscount = 0;

if ($amount >= 5000) {
    $discount = 20;
} elseif ($amount >= 3000) {
    $discount = 15;
} elseif ($amount >= 1000) {
    $discount = 10;
} elseif ($amount >= 500) {
    $discount = 5;
}

if ($isMember && $amount >= 500) {
    $memberDiscount = 5;
}

$totalDiscount = $discount + $memberDiscount;
$discountMoney = $amount * $totalDiscount / 100;
$netPrice = $amount - $discountMoney;
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>คำนวณส่วนลด</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        .box {
            background: #ffffff;
            width: 420px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e40af;
        }

        .result {
            margin-top: 20px;
            background: #f9fafb;
            padding: 15px;
            border-radius: 8px;
        }

        .result p {
            margin: 6px 0;
        }

        .total {
            font-size: 18px;
            color: #16a34a;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>โปรแกรมคำนวณส่วนลด</h2>

    <form method="post">
        <label>ยอดซื้อ (บาท)</label>
        <input type="number" name="amount" step="0.01" required>

        <label>
            <input type="checkbox" name="member">
            เป็นสมาชิก (+5%)
        </label>
        <br><br>

        <button type="submit">คำนวณ</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <div class="result">
            <p>ยอดซื้อ: <?= number_format($amount,2) ?> บาท</p>
            <p>ส่วนลดปกติ: <?= $discount ?>%</p>
            <p>ส่วนลดสมาชิก: <?= $memberDiscount ?>%</p>
            <p>รวมส่วนลด: <?= $totalDiscount ?>%</p>
            <p>เงินที่ลดได้: <?= number_format($discountMoney,2) ?> บาท</p>
            <p class="total">ต้องจ่าย: <?= number_format($netPrice,2) ?> บาท</p>
        </div>
    <?php } ?>
</div>

</body>
</html>
