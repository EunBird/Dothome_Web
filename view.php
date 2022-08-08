<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
</head>

<body>
   
    <?php
    $connect = mysqli_connect('localhost', 'bobejo0709', 'closer131!', 'bobejo0709');
    $number = $_GET['number'];  // GET 방식 사용
    session_start();
    $query = "select content from board where number = $number";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);
    ?>

    <table class="read_table" align=center>
        
    
    
        <tr>
            <td colspan="4" class="read_content">
                <?php echo $rows['content'] ?></td>
        </tr>
    </table>

    <hr>
</body>

</html>