<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
</head>
<body style="font-family: Tahoma; text-align: center; margin-top: 50px;">

<h2>🔐 تسجيل الدخول</h2>

<form method="POST" action="">
    <label>👤 اسم المستخدم:</label><br>
    <input type="text" name="username" required><br><br>

    <label>🔑 كلمة المرور:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">دخول</button>
</form>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // نقرأ البيانات من ملف المستخدمين
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    $found = false;

    foreach ($users as $user) {
        list($savedUser, $savedPass) = explode("|", $user);
        if ($username == $savedUser && $password == $savedPass) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "<h3 style='color:green;'>✅ مرحبًا $username، تم تسجيل الدخول بنجاح!</h3>";
    } else {
        echo "<h3 style='color:red;'>❌ اسم المستخدم أو كلمة المرور غير صحيحة!</h3>";
    }
}
?>

<p><a href="register.php">🔙 العودة إلى صفحة التسجيل</a></p>

</body>
</html>
