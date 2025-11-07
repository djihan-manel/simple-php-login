<?php
session_start();

// التأكد أن المستخدم دخل فعلاً
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>مرحبا بك</title>
</head>
<body style="font-family: Tahoma; text-align:center; margin-top:50px; background-color:#f2f2f2;">

<h1 style="color:green;">👋 مرحبًا <?php echo htmlspecialchars($username); ?>!</h1>
<p>سعيدون بعودتك 💚</p>

<img src="https://i.pinimg.com/originals/1f/d2/ab/1fd2ab1ee6b334f67efb1d8886fcb9c8.gif" 
     alt="welcome image" width="250" style="border-radius:20px;"><br><br>

<form method="POST" action="">
    <button type="submit" name="logout">🚪 تسجيل الخروج</button>
</form>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

</body>
</html>
