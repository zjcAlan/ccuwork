<?php
if(!empty($posts)){
    echo '<h1>Post List<h1>';
    foreach($posts as $posts_item){
        echo'
            <a herf="/PostController/show/' .$posts_item['id'].'">'.$posts_item['title'].'</a><br>
        ';
    }
} 
?>