<?php
$name = $_POST['employee_name'] ?? '';
$age = $_POST['employee_age'] ?? '';
$department = $_POST['department'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>

<h2>入力内容をご確認ください。</h2>

問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。

<br>

<br>

<table border="1">
        <tr>
            <th align="center">項目</th>
            <th align="center">入力内容</th>
        </tr>
        <tr>
            <td align="left">社員名</td>
            <td align="left"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>

        <tr>
            <td>年齢</td>
            <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
</table>

<!-- 完了画面へ送る -->

<br>

<form action="complete.php" method="post">

    <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">

    <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    
    <input type="hidden" name="department" value="<?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?>">

    <button type="submit">確定</button>

    <button type="button" onclick="history.back()">キャンセル</button>

</form>

</body>
</html>