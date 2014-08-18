
<!DOCTYPE html>

<html>
<head>
    <title>HTML Tags Counter</title>
</head>
<body>

<form method="post">
    <label for="tags">Enter HTML tag</label><br />
    <input type="text" name="tags" /><br />

    <input type="submit" name="submit" />
</form>

<?php
session_start();
$validTags= array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'article', 'aside', 'audio', 'b', 'base', 'basefont', 'bdi',
    'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup', 'datalist',
    'dd', 'del', 'details', 'dfn', 'dialog', 'dir', 'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'font',
    'footer', 'form', 'frame', 'frameset'	, 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hr', 'html', 'i',
    'iframe', 'img', 'input', 'ins', 'kbd', 'keygen', 'label', 'legend', 'li', 'link', 'main', 'map', 'mark', 'menu',
    'menuitem', 'meta', 'meter', 'nav', 'noframes', 'noscript', 'object', 'ol', 'optgroup', 'option', 'output', 'p',
    'param', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script', 'section', 'select', 'small', 'source',
    'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'textarea', 'tfoot', 'th',
    'thead', 'time', 'title', 'tr', 'track', 'tt', 'u', 'ul', 'var', 'video','wbr');
$count = 0;
if(isset($_POST['tags'])) {
    if($_POST['tags'] == '') {
        if(isset($_SESSION['count'])) {
            unset($_SESSION['count']);
        }
    }
    if(in_array($_POST['tags'], $validTags)) {
        echo "Valid HTML tag!";
        if(isset($_SESSION['count'])) {
            $_SESSION['count']++;
        }
        else {
            $_SESSION['count'] = 0;
        }
        echo "Score: " . $_SESSION['count'];
    }
    else {
        echo "Invalid HTML tag!";
    }
}
?>
</body>
</html>