<?php include 'head.php'; 
?>


<div class="container mt-4">
    <h3>Selamat datang, <?php echo $_SESSION['user']['username']; ?>!</h3>
    <p>Role: <b><?php echo $_SESSION['user']['role']; ?></b></p>
</div>

</body>
</html>