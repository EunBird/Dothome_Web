<?php
$connect = mysqli_connect("localhost", "bobejo0709", "closer131!", "bobejo0709") or die("fail");

$id = $_POST['id'];                   //Writer                    
$title = $_POST['title'];               //Title
$content = $_POST['content'];           //Content
$date = date('Y-m-d H:i:s');            //Date

$URL = './board.php';                   //return URL


$query = "INSERT INTO board (number, title, content, date, id, pw) 
        values(null,'$title', '$content', '$date', '$id', '$pw')";


$result = $connect->query($query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록 완료." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패.";
}

mysqli_close($connect);
?>