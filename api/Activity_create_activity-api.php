<?php
require '../parts/admin-required.php';
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

$sql = "INSERT INTO `meetup`(`ID`, `Status`, `Location`, `Address`, `StartTime`, 
                            `EndTime`, `DeadLine`, `Subject`, `Description`, `PeopleCount`, 
                            `Phone`, `Meal`, `MealMode`, `Budget`, `Promote`)
VALUES ( UUID(), ?, ?, ?, ?, 
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ? )";


// mock data
// $id = '1256';
// $status = 0;
$location = '大安';
$phone = '0912345678';
$meal = 1;
$promote = 1;

$stmt = $pdo->prepare($sql);
$stmt->execute([
    // empty($_POST['ID']) ? 'mock-ID-123458' : $_POST['ID'],
    empty($_POST['Status']) ? 0 : $_POST['PayBillID'],
    empty($_POST['Location']) ? 'MRT-DaAn' : $_POST['Location'],
    $_POST['Address'],
    $_POST['StartTime'],
    $_POST['EndTime'],
    $_POST['DeadLine'],
    $_POST['Subject'],
    $_POST['Description'],
    $_POST['PeopleCount'],
    $phone,
    $meal,
    $_POST['MealMode'],
    $_POST['Budget'],
    $promote,
]);


$output['rowCount'] = $stmt->rowCount();
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
} else {
    $output['error'] = '新增失敗';
}


echo json_encode($output);
