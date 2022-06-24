<?php
// require '../parts/admin-required.php';
require '../parts/connect-db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'postData' => $_POST,  // 確認資料
];
header('Content-Type: application/json');


// TODO: 檢查欄位資料 @@哪有時間完整這一切 說笑嗎? 檢查 my ass
// if (empty($_POST['name'])) {
//     $output['error'] = '沒有姓名資料';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

$sql = "INSERT INTO `account`(`ID`, `Email`, `EncodedPassword`, `CreateBy`) 
        VALUES (UUID(), ?, ?, ?)";


// mock data
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

$passwordSHA1 = sha1($password);


$stmt = $pdo->prepare($sql);
$stmt->execute([
    $email,
    $passwordSHA1,
    $email,
]);


$output['rowCount'] = $stmt->rowCount();
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['error'] = '新增失敗';
}


echo json_encode($output);
