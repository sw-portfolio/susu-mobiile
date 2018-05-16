<?php

include './models/models.php';
include './controllers/security.php'; // 아직 controllers.php는 빈 파일임.
include './views/views_mobile.php';

//TODO: 세션 체크 해야뎀~
sessionCheck();

connectDB();
$code = $_GET['code']; // 제품 코드를 받습니다.
$result = getProduct($code);
showMobilePage(mysql_fetch_assoc($result), $imageDir);

?>

