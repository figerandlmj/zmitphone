<?php

require 'config.php';

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$limit = isset($_POST['case_num']) ? $_POST['case_num'] : 0;

if( $id == 0){
    $moredata = $db ->query("SELECT `id`, `thumb`, `title` FROM `zmit_picture` WHERE catid IN (28,29,30,31,32,34,36) ORDER BY id DESC LIMIT $limit, 8") -> fetchAll();
    $i = 0; if( !empty( $moredata ) ) {
        foreach( $moredata as $value ) {
            $i++;

            echo "<a href='successDetails.php?id= {$value['id']}&catid=$id' class='successList'>
                    <img src='{$value['thumb']}' alt=' {$value['title']}'/>
                    <div class='word'>
                        <p class='pd24' style='margin-top: 10px;'>{$value['title']}</p>
                    </div>
            </a>";


        } }


//    $moredata = $db -> query("SELECT `id`, `thumb`, `title` FROM `zmit_picture` WHERE catid IN (28,29,30,31,32,34) ORDER BY id DESC LIMIT " . $limit . ",8") -> fetchAll();
} else {
    $moredata = $db->query("SELECT `id`, `thumb`, `title` FROM `zmit_picture` WHERE catid =$id ORDER BY id DESC LIMIT $limit, 8")->fetchAll();
 $i = 0; if( !empty( $moredata ) ) {
    foreach( $moredata as $value ) {
        $i++;

        echo "<a href='successDetails.php?id= {$value['id']}&cat_id=$id' class='successList'>
                    <img src='{$value['thumb']}' alt=' {$value['title']}'/>
                    <div class='word'>
                        <p class='pd24' style='margin-top: 10px;'>{$value['title']}</p>
                    </div>
            </a>";


  } }



//    $moredata = $db -> query("SELECT `id`, `thumb`, `title` FROM `zmit_picture` WHERE catid = " . $id . " ORDER BY id DESC LIMIT " . $limit . ",8") -> fetchAll();
}
//$json = json_encode($moredata);
//exit($json);