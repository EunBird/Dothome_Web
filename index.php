<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo "<script>location.replace('login.php');</script>";            
}

else {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} 
?>
<body>
    <div class="base">
        <h2><?php echo "Get Out, $username($name)";?></h2>
        <button type="button" class="btn" onclick="location.href='logout.php'">
            LOGOUT
        </button>
        
        <button type="button" class="btn" onclick="location.href='board.php'">
            Board
        </button>
        
    </div>
</body>