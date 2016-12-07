<?php

//$enabled = true;
if (!$enabled) {
    echo "script disabled (IMPORTANT on life server!!!)";
    die();
}

$symlinks = array(
    // create only one after the other, otherwise chained links can not be created
    'typo3_src' => 'typo3_src-7.6.13',
    'typo3' => 'typo3_src/typo3',
    'index.php' => 'typo3_src/index.php',
);

echo "<html><head><title>create symlinks</title></head>\n<body>\n";
echo "<table>\n";
echo "<tr><th>Symlink</th><th>Current target</th><th>create (delete first, if exists!)</th><th>delete</th></tr>\n";

foreach ($symlinks as $shortcut => $target) {
	$url = $_SERVER['SCRIPT_NAME'].'?shortcut='.urlencode($shortcut);
	echo "<tr><td>".$shortcut."</td><td>".readlink($shortcut)."</td><td><a href=\"".$url."&action=create\">create</a></td><td><a href=\"".$url."&action=delete\">delete</a></td></tr>\n";
}
echo "</table>\n";

echo "<p><a href=\"".$_SERVER['SCRIPT_NAME']."?action=deleteall\">delete all</a></p>";

$action = $_REQUEST['action'];
$shortcut = $_REQUEST['shortcut'];
$target = $symlinks[$shortcut];

if ($action) {
    echo "<p>action: ".$action."<br>\nshortcut: ".$shortcut."<br>\ntarget: ".$target."</p>";
    if ($action == 'create') {
        symlink($target, $shortcut);
    }
    if ($action == 'delete') {
        echo "delete ".$shortcut;
        unlink($shortcut);
    }
    if ($action == 'deleteall') {
        foreach ($symlinks as $shortcut => $target) {
            unlink($shortcut);
        }
    }
    header('Location:'.$_SERVER['SCRIPT_NAME']);
}

echo "</body></html>\n";
?>