<?php
$content = file_get_contents('https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FIdrnB22zcR9R7mDqRX6rcYnS%2FUntitled%3Fnode-id%3D1%253A2%26viewport%3D138%252C272%252C0.10172070562839508%26scaling%3Dscale-down');
$content = str_replace('</title>','</title><base href="https://www.figma.com" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="mjl22.github.io/css/hello.css" /></head>', $content);
echo $content;
