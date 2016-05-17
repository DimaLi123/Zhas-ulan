<?php
// Проверяем пришел ли файл

if( !empty( $_FILES['image']['name'] AND !empty($_POST['text'])) ) {
  // Проверяем, что при загрузке не произошло ошибок
  if ( $_FILES['image']['error'] == 0 ) {
    // Если файл загружен успешно, то проверяем - графический ли он
    if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
      include ("bd.php");
      // Читаем содержимое файла
      $text = $_POST['text'];
      $text = mysqli_escape_string($link,$text);
      $image = file_get_contents( $_FILES['image']['tmp_name'] );
      // Экранируем специальные символы в содержимом файла
      //$image = mysql_escape_string( $image );
      $image = mysqli_escape_string($link,$image);
      // Формируем запрос на добавление файла в базу данных
      $query="INSERT INTO news (content,new) VALUES('$image','$text')";
      // После чего остается только выполнить данный запрос к базе данных
      mysqli_query($link,$query );
    }
  }
}
echo "<a href='index2.php'>Главная страница</a>";
?>