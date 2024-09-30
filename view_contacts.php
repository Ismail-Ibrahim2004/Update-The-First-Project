<?php include('header.php'); ?>
<?php include('db.php'); // تضمين الاتصال بقاعدة البيانات ?>

<div class="container mt-5">
    <h2 class="text-center">الرسائل المستلمة</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>الاسم</th>
                <th>البريد الإلكتروني</th>
                <th>الرسالة</th>
                <th>التاريخ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM contacts");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['message']}</td>
                            <td>{$row['created_at']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>لا توجد رسائل بعد</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>
