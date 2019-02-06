    <?PHP
    $query =  "select * from news ORDER BY id DESC";
    $result = mysql_query($query) or die("Invalid query: " . mysql_error());
     
    $rows_max = mysql_num_rows($result); // Сколько всего новостей у нас в базе
    $show_pages = 4; // Сколько новостей покажем пользователю
    $this_page = filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT); // Номер текущей страницы
    // (По полезнейшей функции filter_var() - курим мануал)
     
    if ($this_page)
    {
            $offset = (($show_pages * $this_page) - $show_pages);
    }
    else
    {
            $this_page = 1; // Ставим в единицу (первая страница) если не передан параметр $_GET['page']
            $offset = 0;
    }
     
    // Запиливаем собственно, панельку со ссылками на страницы, если нужна пагинация
    if ($rows_max > $show_pages)
    {
           $r = 1;
           while ($r <= ceil($rows_max/$show_pages))
           {
               if ($r != $this_page)
               {          
                    echo '<a href="?page=' . $r . '" title="Перейти на страницу '$r'">'$r'</a>';
               }
               else
               {
                   echo '<b>' . $r . '</b>'; // Если это текущая страница - то ссылка на саму себя не нужна
                }
                $r++;      
           }
    }
     
    $query_limited = "select * from news ORDER BY id DESC LIMIT $offset, $show_pages";
    $final_result = mysql_query($query_limited);
     
    while ($row = mysql_fetch_assoc($final_result)) {  
        echo '<center><div id="novosti"><table border="0" width="706"><td><strong><center> <div id="novostin"><div id="novostip">'.$row["name"].'</a><br /></div><hr></hr></center></strong><div id="novostit">' ;
        echo $row["text"].'</div><div id="novostif"><br /></div></div></td></table></div><br />' ;
    }
    ?>