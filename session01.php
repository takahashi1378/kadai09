<?php
session_start();

// $name ='高橋';
// $age =25;

//.は足し算
// echo $name.$age;

//他のファイルと共有 配列sessionに格納する
// $_SESSION['name'] = $name;
// $_SESSION['age'] = $age;

//--------------------------------------

// $sid = session_id();


//--------------------------------------
$old_session_id = session_id();
//何かを処理する

session_regenerate_id(true);//新しい鍵を作る

$new_session_id = session_id();
//何かを処理する

echo $old_session_id;
echo '<br>';
echo $new_session_id;
 