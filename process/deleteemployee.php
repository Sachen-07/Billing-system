<?php
session_start();
if (empty($_SESSION['email'])) {
    header("Location:../public/index.php");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
        include "../includes/connection.php";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM student WHERE sid=$id";
            if ($conn->query($sql) === TRUE) {
                echo "
                <script>
                    alert('Record deleted successfully');
                    window.location.href = 'student_show.php';
                </script>";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        } else {
            header("Location: #.php");
            exit();
        }
        $conn->close();
        ?>
    </body>

    </html>

<?php }
?>