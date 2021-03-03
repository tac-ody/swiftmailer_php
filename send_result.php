<?php
require_once 'vendor/autoload.php';

$From = $_POST['From'];
$To = $_POST['To'];
// $Cc = $_POST['Cc'];
// $Bcc = $_POST['Bcc'];
$Subject = $_POST['Subject'];
$Body = $_POST['Body'];
$Attach = $_POST['Attach'];

if(isset($_POST['To']) && isset($_POST['Subject']) && isset($_POST['Body'])) {
    // 送信設定
    // setUsernameにGmailアドレス・setPasswordにGoogleパスワードを入力
    $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
    $transport->setUsername('');
    $transport->setPassword('');

    // 送信設定をもとにメール送信のインスタンスを作成
    $mailer = new Swift_Mailer($transport);

    // メール作成
    $message = new Swift_Message($Subject);
    $message->setFrom([$From]);
    $message->setTo([$To]);
    // $message->setCc([$Cc]);
    // $message->setBcc([$Bcc]);
    $message->setBody($Body);

    // メール送信
    $result = $mailer->send($message);

    echo "メールが".$_POST['To']."宛に送信されました";

    }else{
        echo "宛先・件名・本文は必ず入力してください";
    }




?>