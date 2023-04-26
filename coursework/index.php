<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/css.css">
    <title>Document</title>
</head>
<body>
    <div class="flex">
        <form class="form" method="post">
            <label for="message">Введите сообщение</label><br>
            <textarea type="text" name="message" id="message"></textarea><br>
            <input type="submit" value="Отправить">
        </form>
        <form class="form" method="post">
            <label for="message">Поиск</label><br>
            <textarea type="text" name="search" id="search"></textarea><br>
            <input type="submit" value="Поиск">
        </form>
    </div>
    <div class="flex">
        <form class="form" method="post" >
            <button onclick="confirmDelete()" class="delete" type="submit" name="delete_data">Удалить данные</button>
            <script>
                function confirmDelete() {
                    if (confirm("Вы уверены, что хотите удалить все сообщения?")) {
                        <?php 
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "курсовая";
                    
                    
                    
                            $conn = new mysqli($servername, $username, $password, $dbname);
                    
                            if (isset($_POST['delete_data'])) {
                                $sql = "DELETE FROM news";
                                if ($conn->query($sql) === TRUE) {
                                    echo "Данные успешно удалены.";
                                }
                            }
                        ?>
                    }
                }
            </script>
        </form>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "курсовая";



        $conn = new mysqli($servername, $username, $password, $dbname);

        if (isset($_POST['message']) && !empty($_POST['message'])) {
            $message = $_POST['message'];
            $info = $message;

            $massageWithoutLinks = strip_tags($message); 
            preg_match('/#(\w+)/', $massageWithoutLinks, $matches);
            $key = $matches[1]; 
            $text = preg_replace('/#(\w+)/', '', $massageWithoutLinks); 
            $sql = "INSERT INTO news (message, info) VALUES ('$key', '$text')";
        }

    ?>  
    <div class="flex">
        <div>
            <p>Все сообщения</p>
            <?php
                $result = mysqli_query($conn, "SELECT * FROM news");
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "Name: " . $row["message"]."<br>". "Message: " . $row["info"]."<br>"."<br>";
                    }
                }else {
                    echo "0 результатов";
                }
            ?>
        </div>
        <div>
            <p>Результат поиска</p>
            <?php
                if (isset($_POST['search'])) {
                    $name = $_POST['search'];
                    $result = mysqli_query($conn, "SELECT * FROM news WHERE message LIKE '%$name%'");
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Name: " . $row["message"]."<br>". "Message: " . $row["info"]."<br>"."<br>";
                        }
                    } else {
                        echo "0 результатов";
                    }
                }else {
                    echo "0 результатов";
                }
            ?>
        </div>
    </div>
</body>
</html>


