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
// ＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿

$sql = "INSERT INTO `payment_methed`
(`AccountID`, `CardHolderName`, `CardLastFourDigit`, 
`CardExpirationMonth`, `CardExpirationYear`, `CVV2`, `CreateTime`) 
        VALUES ( ?, ?, ?, 
        ?, ?, ?, NOW())";

$FullName = $_POST['FullName'];
$CardID = $_POST['CardID'];
$CheckNumber = $_POST['CheckNumber'];
$month =substr(empty($_POST['EndDate']) ? '28/03' : $_POST['EndDate'],-2);
$year =substr(empty($_POST['EndDate']) ? '28/03' : $_POST['EndDate'],2);

$stmt = $pdo->prepare($sql);
$stmt->execute([
    empty($_POST['AccountID']) ? 'mock-acount-123456' : $_POST['AccountID'],
    empty($_POST['FullName']) ? '賈桂琳' : $_POST['FullName'],
    empty($_POST['CardID']) ? '9487' : $_POST['CardID'],
    $month,
    $year,
    empty($_POST['CheckNumber']) ? 'test-user-001' : $_POST['CheckNumber'],
]);

$output['rowCount'] = $stmt->rowCount();
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['error'] = '新增失敗';
}



echo json_encode($output);
