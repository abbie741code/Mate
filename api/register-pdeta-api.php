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

$userID = $_SESSION['user']['id'];




$sql = "INSERT INTO `personal_data`( `AccountID`, `NickName`, `Gender`, `SexualOrientation`,`Birthday`,
                                     `Area`, `Occupation`, `CreateBy`) 
        VALUES ( ?, ?, ?, ?, ?, 
                 ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $userID,
    empty($_POST['FullName']) ? "阿扁" : $_POST['FullName'],
    empty($_POST['Gender']) ? 1 : intval($_POST['Gender']),
    empty($_POST['Gender1']) ? "女生" : $_POST['Gender1'],
    empty($_POST['Birthday']) ? "2000-12-12" : $_POST['Birthday'],
    empty($_POST['Adress']) ? 1 : intval($_POST['Adress']),
    empty($_POST['Job']) ? 1 : intval($_POST['Job']),
    $userID,
]);

$output['rowCount'] = $stmt->rowCount();
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $_SESSION['user'] = [
        'nickname' => is_null($row['NickName']) ? $row['Email'] : $row['NickName']
    ];
    // echo json_encode($_SESSION['user']);
    // exit;
} else {
    $output['error'] = '新增失敗';
}

echo json_encode($output);
