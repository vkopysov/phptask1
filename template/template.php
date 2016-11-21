<?php
$header = template('header', ['title' => 'Hello World!']);
$content = template('content', ['content' => "Lorem ipsum...", 'meta' => 'Author info']);
$footer = template('footer', ['copy' => "Copyright ". date('Y')]);
 
 
echo $header, $content, $footer;
 
/**
 * @param  string $template
 * @param  array  $vars
 * @return string
 */
function template($template, $vars) {  
    extract($vars);
    ob_start();   
    include('template/layouts/'.$template.'.phtml');
    $result = ob_get_contents();
    ob_end_clean();
    return $result;
}