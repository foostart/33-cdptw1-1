<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/824.less', 'css/824.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>824</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap-v4.1.1.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/824.css" rel="stylesheet" type="text/css" />
    <!--Fontawesome CDN-->

    <link href="<?php echo $url_path ?>/css/font-awesome-v4.7.0.min.css" rel="stylesheet">
    <script src="<?php echo $url_path ?>/js/jquery-v1.10.2.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap-v3.3.2.min.js"></script>
</head>

<body>
    <?php include $dir_block.'/824-content.php'; ?>

</body>

</html>