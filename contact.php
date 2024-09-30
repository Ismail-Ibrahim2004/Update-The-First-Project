<?php include('header.php'); ?>
<?php include('db.php'); // تضمين ملف الاتصال بقاعدة البيانات ?>

<div class="container mt-5">
    <section>
        <h2 class="text-center">تواصل معي</h2>
        <?php
        // تحقق إذا تم إرسال النموذج
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $message = $conn->real_escape_string($_POST['message']);
            
            // إدخال البيانات في قاعدة البيانات
            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>تم إرسال رسالتك بنجاح!</div>";
            } else {
                echo "خطأ: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>

        <form action="contact.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">الرسالة:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </section>
</div>

<?php include('footer.php'); ?>
