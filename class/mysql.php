<?php
//   //соединение с базой данных при помощи функции mysql_connect()
//   //в аргументах функции укажите имя сервера, логин и пароль. 
//   $db = mysql_connect("сервер","логин","пароль");
//   //функция mysql_select_db() выбирает текущую 
//   //базу данных с именем "komtet_test"
//   mysql_select_db("komtet_test" ,$db);
//   //функция mysql_query() выполняет запрос на выборку данных 
//   //результирующий набор данных хранится в переменной $sql
//   $sql = mysql_query("SELECT * FROM links" ,$db);
//   //после получения данных начнём формирование HTML-таблицы 
//   echo ("<table border ='1'>");
//   //выводим строку заголовков 
//   echo ("<tr><td>Адрес</td><td>Описание</td></tr>");
//   //функция mysql_fetch_row() извлекает одну строку из результата 
//   //и сохраняет её в массиве $tablerows
//   while ($tablerows = mysql_fetch_row($sql))
//   {
//   //теперь в цикле для каждой полученной строки сделаем вывод 
//   //$tablerows[1] соответствует полю "url" 
//   //$tablerows[2] соответствует полю "description" 
//   echo("<tr><td><a href="/info/tech/$tablerows[1]">$tablerows[1]
//         </a></td><td>$tablerows[2]</td></tr> ");
//   }
//   echo "</table>";
//   //закрытие соединение (рекомендуется)
//   mysql_close($db);

  class mysql extends bilder
  {
    public $db;

    function __construct()
    {
        $this->db = mysql_connect(SERVER,USER,PASSWORD);
        mysql_select_db("user7" , $this->db);

    }

    function select( $while , $limit){
        $qry = $this->selectQuery($while , $limit);
        $result = mysql_query($qry, $this->db);
        echo $qry;  
        if (!$result) {
            echo 'Ошибка запроса: ' . mysql_error();
            exit;
        }
        $bannerHeadline = "";

            while ($row = mysql_fetch_array($result)) {
                print_r($row);
                echo '<pre>';
                $bannerHeadline.= $row[0] . $row[1];
            }

        return $bannerHeadline;
    }

    function __destruct()
    {
        mysql_close($this->db);
    }
    
  }
  

  ?>