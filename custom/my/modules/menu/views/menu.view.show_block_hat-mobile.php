<?php
/**
 * Шаблон вывода первого уровня меню, вызывается из функции show_block в начале файла, template=leftmenu
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
 */

if (!defined('DIAFAN')) {
    $path = __FILE__;
    $i = 0;
    while (!file_exists($path . '/includes/404.php')) {
        if ($i == 10) exit;
        $i++;
        $path = dirname($path);
    }
    include $path . '/includes/404.php';
}

if (empty($result["rows"][$result["parent_id"]])) {
    return true;
}

// начало уровня меню
foreach ($result["rows"][$result["parent_id"]] as $row) {
$cl1 = '';
//    if ($row["active"]) {
//        // начало пункта меню для текущей страницы
//        echo '<li >';
//    } else
if ($row["active_child"]) {
    // начало пункта меню для активного дочернего пункта
    echo '<li class="parent active-child">';
    echo '<div class="url-wrapper">';
    ?>
    <svg class="arrow-bottom" viewBox="0 0 5 9">
        <path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z"></path>
    </svg>
    <?php
    //$cl1 = ' opened';
} elseif ($row["children"]) {
// начало пункта меню для элемента -родителя

echo ' <li class="parent">';
?>
<div class="url-wrapper">
    <svg class="arrow-bottom" viewBox="0 0 5 9">
        <path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z"></path>
    </svg>
    <?php
    } else {
        // начало любого другого пункта меню
        echo '<li>';
        echo '<div class="url-wrapper">';
    }

    if (
        // на текущей странице нет ссылки, если не включена настройка "Текущий пункт как ссылка"
        (!$row["active"] || $result["current_link"])

        // влючен пункт "Не отображать ссылку на элемент, если он имеет дочерние пункты"
        && (!$result["hide_parent_link"] || empty($result["rows"][$row["id"]]))
    ) {
        if ($row["othurl"]) {
            echo '<a href="' . $row["othurl"] . '"' . $row["attributes"] . ''
                . (!empty($row["active"]) ? ' class="active"' : '')
                . '>';
        } else {
            echo '<a href="' . BASE_PATH_HREF . $row["link"] . '"' . $row["attributes"]
                . (!empty($row["active"]) ? ' class="active"' : '')
                . '>';
        }
    }

    // название пункта меню
    if (!empty($row["name"])) {
        echo $row["name"];
    }

    if (
        // на текущей странице нет ссылки, если не включена настройка "Текущий пункт как ссылка"
        (!$row["active"] || $result["current_link"])

        // влючен пункт "Не отображать ссылку на элемент, если он имеет дочерние пункты"
        && (!$result["hide_parent_link"] || empty($result["rows"][$row["id"]]))
    ) {
        echo '</a>';
    }

    echo '</div>';

    //if ($result["show_all_level"] || $row["active_child"] || $row["active"])
    //{
    // вывод вложенного уровня меню
    $menu_data = $result;
    $menu_data["parent_id"] = $row["id"];
    $menu_data["level"]++;
    //echo '<div class="dropdown-top-menu"><div class="wrap">';
    echo $this->get('show_level_topmenu_2', 'menu', $menu_data);
    //echo '</div></div>';
    //}

    if ($row["active"]) {
        // окончание пункта меню - текущей страницы
        echo '</li>';
    } elseif ($row["active_child"]) {
        // окончание пункта меню для активного дочернего пункта
        echo '</li>';
    } else {
        // окончание любого другого пункта меню
        echo '</li>';
    }
    }
    // окончание уровня меню

    ?>



