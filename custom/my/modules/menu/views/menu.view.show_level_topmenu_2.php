<?php
/**
 * Шаблон второго и последующих уровней меню, оформленного шаблоном
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
    $path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
 
if (empty($result["rows"][$result["parent_id"]]))
{
	return;
}
$cl = '';
foreach ($result["rows"][$result["parent_id"]] as $row)
{
	if ($row["active"] || $row["active_child"])
	{
		//$cl = ' opened';
	}
}



// начало уровня меню
echo '<div class="dropdown-top-menu"><div class="wrap">';
echo '<ul class="top_menu_2">';
foreach ($result["rows"][$result["parent_id"]] as $row)
{

	if ($row["name"] == "Ведение бухгалтерского учета") {
		echo "</ul>";
		echo '<ul class="top_menu_2">';
	}

	$cl1 = '';
	if ($row["active"])
	{
		// начало пункта меню для текущей страницы
		echo '<li>';
	}
	elseif ($row["active_child"])
	{
		// начало пункта меню для активного дочернего пункта
		echo '<li>';
		//$cl1 = ' opened';
	}
	elseif ($row["children"])
	{
		// начало пункта меню для элемента -родителя
		echo ' <li>';
	}
	else
	{
		// начало любого другого пункта меню
		echo '<li>';
	}

	if (
		// на текущей странице нет ссылки, если не включена настройка "Текущий пункт как ссылка"
		(!$row["active"] || $result["current_link"])

		// влючен пункт "Не отображать ссылку на элемент, если он имеет дочерние пункты"
		&& (!$result["hide_parent_link"] || empty($result["rows"][$row["id"]]))
	)
	{
		if ($row["othurl"])
		{
			echo '<a href="'.$row["othurl"].'"'.$row["attributes"].''
			.(!empty($row["active"]) ? ' class="active"' : '')
			.'>';
		}
		else
		{
			echo '<a href="'.BASE_PATH_HREF.$row["link"].'"'.$row["attributes"]
			.(!empty($row["active"]) ? ' class="active"' : '')
			.'>';
		}
	}


	// название пункта меню
	if (! empty($row["name"]))
	{
	    echo $row["name"];
	}

	if (
		// на текущей странице нет ссылки, если не включена настройка "Текущий пункт как ссылка"
		(!$row["active"] || $result["current_link"])

		// влючен пункт "Не отображать ссылку на элемент, если он имеет дочерние пункты"
		&& (!$result["hide_parent_link"] || empty($result["rows"][$row["id"]]))
	)
	{
		echo '</a>';
	}

	// описание пункта меню
	if (! empty($row["text"]))
	{
	    echo $row["text"];
	}

	//if ($result["show_all_level"] || $row["active_child"] || $row["active"])
	//{
		// вывод вложенного уровня меню
		$menu_data = $result;
		$menu_data["parent_id"] = $row["id"];
		$menu_data["level"]++;

		echo $this->get('show_level_topmenu_3', 'menu', $menu_data);
	//}
	if ($row["active"])
	{
		// окончание пункта меню - текущей страницы
		echo '</li>';
	}
	elseif ($row["active_child"])
	{
		// окончание пункта меню для активного дочернего пункта
		echo '</li>';
	}
	else
	{
		// окончание любого другого пункта меню
		echo '</li>';
	}
}
// окончание уровня меню
echo '</ul>';
echo '</div></div>';