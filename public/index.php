<?

$defaultLogin = 'user';
$defaultPassword = '234567gwqwe';

if ($_POST['log_in']) {
    $login = $_POST['login']; 
    $password = $_POST['password'];

    if ($login !== $defaultLogin || $password !== $defaultPassword) 
    {
        $message = 'Неверные данные';
        echo "<script type='text/javascript'>alert('$message');</script>";
        exit;
    }
}

include('index.html');