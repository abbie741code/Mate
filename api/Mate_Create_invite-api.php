<?php
// require './parts/admin-required.php';
require '../parts/connect-db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'postData' => $_POST,  // 確認資料
];
header('Content-Type: application/json');


// TODO: 檢查欄位資料
// if (empty($_POST['name'])) {
//     $output['error'] = '沒有姓名資料';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

$sql = "INSERT INTO `dating`(`ID`, `Status`, `InviterID`, `InviteeID`, `PayBillID`, 
                             `Location`, `Time`, `Date`, `Subject`, `Description`, `Restaurant`)
        VALUES ( UUID(), ?, ?, ?, ?, 
                 ?, ?, ?, ?, ?, ?)";

$yearMonth = $_POST['yearMonth'];
$day = $_POST['day'];
$time = $_POST['time'];

$stmt = $pdo->prepare($sql);
$stmt->execute([
    // empty($_POST['ID']) ? 'mock-ID-123456' : $_POST['ID'],
    empty($_POST['Status']) ? 0 : $_POST['PayBillID'],
    empty($_POST['InviterID']) ? 'test-user-001' : $_POST['InviterID'],
    empty($_POST['InviteeID']) ? 'test-user-002' : $_POST['InviteeID'],
    empty($_POST['PayBillID']) ? 'test-user-001' : $_POST['PayBilPayBillIDlID'],
    empty($_POST['Location']) ? 'MRT-DaAn' : $_POST['Location'],
    empty($_POST['Time']) ? $time : $_POST['Time'],
    empty($_POST['Date']) ? $yearMonth . " " . $day : $_POST['Date'],
    $_POST['Subject'],
    $_POST['Description'],
    empty($_POST['Restaurant']) ? '地獄廚房' : $_POST['Restaurant'],
]);

$output['rowCount'] = $stmt->rowCount();
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['error'] = '新增失敗';
}



echo json_encode($output);
