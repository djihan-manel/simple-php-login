<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل مستخدم جديد</title>
</head>
<body style="font-family: Tahoma; text-align: center; margin-top: 50px;">

<h2>📝 إنشاء حساب جديد</h2>

<form method="POST" action="">
    <label>👤 اسم المستخدم:</label><br>
    <input type="text" name="username" required><br><br>

    <label>🔑 كلمة المرور:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="register">تسجيل</button>
</form>

<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // نحفظ البيانات في ملف نصي بسيط (ديناميكي)
    $data = $username . "|" . $password . "\n";
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "<p style='color:green;'>✅ تم إنشاء الحساب بنجاح!</p>";
    echo "<a href='login.php'>➡️ انتقل إلى صفحة الدخول</a>";
}
?>

</body>
</html>

