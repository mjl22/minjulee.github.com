
<?php
$content = file_get_contents('https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FIdrnB22zcR9R7mDqRX6rcYnS%2FUntitled%3Fnode-id%3D1%253A2%26viewport%3D138%252C272%252C0.10172070562839508%26scaling%3Dscale-down');

$changes_in_frame = '.header--header--3d0kA, .header--headerClear--14eAa, .header--headerDark--2JGe3 { display:none; }' . "\r\n" . '</style>';
$frame_content = str_replace('</style>', $changes_in_frame, $frame_content);

echo $frame_content;
?>
