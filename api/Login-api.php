
<?php
require '../parts/connect-db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'postData' => $_POST,  // 確認資料
];


$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

$str = sha1($password);

if (empty($email)) {
    $output['error'] = '帳密錯誤'; //'沒有 Email';
    $output['code'] = 410;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
if (empty($str)) {
    $output['error'] = '帳密錯誤'; //'沒有給密碼';
    $output['code'] = 420;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// $sql = "SELECT * FROM account WHERE `Email`= ?";

$sql = "SELECT * FROM `account` a left join `personal_data` pd on a.ID = pd.AccountID WHERE `Email`= ?";


$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

$row = $stmt->fetch();


// if (!empty($row) and password_verify($str, $row['EncodedPassword'])) {
if (!empty($row) and ($str == $row['EncodedPassword'])) {
    $output['success'] = true;
    $output['code'] = 200;
    $_SESSION['user'] = [
        'id' => $row['ID'],
        'email' => $row['Email'],
        'nickname' => is_null($row['NickName']) ? $row['Email'] : $row['NickName'],
        'age' => is_null($row['Age']) ? 28 + "" : $row['Age'],
        'occupation' => is_null($row['Occupation']) ? 'Web Developer' : $row['Occupation'],
        'headshot' => is_null($row['Picture']) ? 'imgs/user-photo.png' : $row['Picture'],
    ];
    // echo json_encode($_SESSION['user']);
    // exit;
} else {
    $output['error'] = '帳密錯誤';
    $output['code'] = 430;
    $output['row'] = $row;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
