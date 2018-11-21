<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'ap1',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '5d7201ec76dbf8b38f7d',
    '9fbaa65be667a90fe71f',
    '652595',
    $options
);
if (isset($_POST['form_click'])){

    $data = $_POST['mess'];
    $pusher->trigger('my-channel', 'my-event', $data);
}



?>
<form method="POST">
    Messenger: <input type="text" name="mess" value=""/>
    <input type="submit" name="form_click" value="Send"/><br/>
</form>
