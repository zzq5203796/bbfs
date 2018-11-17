<?php
header('Content-type: text/css');
ob_start("compress");
function compress($buffer) {
    /* remove comments */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    /* remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("
", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}

print_r($_GET);

ob_end_flush();