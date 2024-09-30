<?php
$host = "localhost"; // اسم الخادم
$user = "root";      // اسم المستخدم الخاص بـ MySQL
$pass = "";          // كلمة مرور MySQL (اتركها فارغة إذا كنت تستخدم XAMPP)
$dbname = "portfolio"; // اسم قاعدة البيانات

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($host, $user, $pass, $dbname);

// تحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
