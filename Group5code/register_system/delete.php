<?php
if (isset($_GET['ID'])) {
    require_once 'server.php';

    $id_medal = $_GET['ID'];
    $sql = 'DELETE FROM time_table WHERE ID = ?';
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id_medal);
    mysqli_stmt_execute($stmt);

    echo '
    <script src="https://code.jquery.com/jquery-3.6.4.min.js%22%3E</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js%22%3E</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css%22%3E';

    if (mysqli_affected_rows($conn) == 1) {
        header("Location: admin.php");
    } else {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "เกิดข้อผิดพลาด",
                    type: "error"
                }, function() {
                    window.location = "admin.php";
                });
            }, 1000);
        </script>';
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>