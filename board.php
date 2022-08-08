<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
            
</head>

<body>
    <?php
    $connect = mysqli_connect('localhost', 'bobejo0709', 'closer131!', 'bobejo0709') or die("connect failed");
    
    $query = "select * from board order by number desc";    //역순 출력
    $result = mysqli_query($connect, $query);
    //$result = $connect->query($query);
    $total = mysqli_num_rows($result);  //result set의 총 레코드(행) 수 반환
    ?>
    <p style="font-size:25px; text-align:center"><b>게시판</b></p>
    
    <br>
    <button type="button" class="btn" onclick="location.href='index.php'">
            메인 화면으로
        </button>
    <br>
    <button type="button" class="btn" onclick="location.href='write.php'">
            글 작성
        </button>
    
    <table align=center>
        <thead align="center">
            <tr>
                <td width="50" align="center">번호</td>
                <td width="100" align="center">제목</td>
                <td width="300" align="center">내용</td>
                <td width="100" align="center">날짜</td>
                
            </tr>
        </thead>

        <hr>
        <br>
        <tbody>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) { //result set에서 레코드(행)를 1개씩 리턴
                if ($total % 2 == 0) {
            ?>
                    <tr class="even">
                        <!--배경색 진하게-->
                    <?php } else {
                    ?>
                    <tr>
                        <!--배경색 그냥-->
                    <?php } ?>
                    
                    <td width="50" align="center">
                        <?php echo $total ?>
                    </td>
                    
                    <td width="100" align="center">
                        <a href="view.php?number=
                                 <?php echo $rows['number'] ?>"
                        >
                        <?php echo $rows['title'] ?>
                    </td>
                        
                    <td width="300" align="center"><?php echo $rows['content'] ?></td>    
                    
                    <td width="100" align="center"><?php echo $rows['date'] ?></td>
                    
                    </tr>
                <?php
                $total--;
            }
                ?>
        </tbody>
    </table>

    <hr>
    
    
</body>

</html>