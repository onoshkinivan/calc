<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (empty($_GET['xin']) && ($_GET['xin'] != 0) || empty($_GET['xalva']) && ($_GET['xalva']) != 0) {
    return 'Не переданы аргументы';
}

if (!is_numeric($_GET['xin'])) {
    return 'Нет числа';
}

if (!is_numeric($_GET['xalva'])) {
    return 'Нет числа';
}

$xin = (float)$_GET['xin'];
$xalva = (float)$_GET['xalva'];




$expression = $xin . ' ' . $_GET['operation'] . ' ' . $xalva . ' = ';
$evn = $xin . '<br>'
    . $_GET['operation'] . '<br>'
    . $xalva . '<br>'
    . '-------' . '<br>'
    . ' ';


switch ($_GET['operation']) {
    case '+':
        $result = $xin + $xalva;
        return $expression . $result;
        break;
    case '-':
        $result = $xin - $xalva;
        return $expression . $result;
        break;
    case '*':
        $result = $xin * $xalva;
        return $evn . $result;
        break;
    case '/':
        if ($xalva == 0) {
            $result = 'На 0 делить нельзя';
            return $result;
            break;
        } else {
            $result = $xin / $xalva;
            return $evn . $result;
            break;
        }
    default:
        return 'Операция не поддерживается, пшел нахуй щенок :)';
};
