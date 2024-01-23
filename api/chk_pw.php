<?php
include_once 'db.php';

// table目的是要有db
$table=$_POST['table'];  // 例如mem
unset($_POST['table']);
$db=new DB($table);  // $mem
$chk=$db->count($_POST);
// echo $Mem->count(['acc'=>$_GET['acc']]);
// count只有1 or 0

// php有值除了0, 其他都是true
if($chk){
    echo $chk;
    $_SESSION[$table]=$_POST['acc'];  // $_SESSION['mem']
    // 如果 $table 是 "users"，則用戶帳號將被保存在 $_SESSION['users'] 中。
    // 这使得在整个会话期间可以跟踪用户的登录状态，而无需重复查询数据库。
}else{
    echo $chk;
}
?>