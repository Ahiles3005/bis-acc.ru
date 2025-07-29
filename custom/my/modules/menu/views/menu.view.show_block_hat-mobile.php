<?php
/**
 * Шаблон меню template=leftmenu
 *
 * Шаблонный тег: вывод меню
 * Полный аналог функции show_block, но с другим оформлением. 
 * Нужен, если необходимо оформить другое меню на сайте
 * Вызывается с параметром template=leftmenu при вызове тега. 
 * <insert name="show_block" module="menu" id="1" template="leftmenu"> 
 * Параметр должен быть приклеен к имени функции в конце
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

if (empty($result["rows"]))
{
	return false;
}
echo '<div style="text-align: center"><i class="fa fa-bars" aria-hidden="true"><span>Меню111</span></i></div>';
echo '<nav itemscope itemtype="http://schema.org/SiteNavigationElement">
    <ul class="hat_menu">
      <li><a href="https://bis-acc.ru/about/"><span itemprop="name">О компании</span></a></li>
      <li><a href="https://bis-acc.ru/services/"><span itemprop="name">Услуги</span></a></li>
      <li><a href="https://bis-acc.ru/news/"><span itemprop="name">Блог</span></a></li> 
      <li><a href="https://bis-acc.ru/kalkulyator/"><span itemprop="name">Калькулятор</span></a></li>
      <li><a href="https://bis-acc.ru/photo/"><span itemprop="name">Отзывы</span></a></li>
      <li><a href="https://bis-acc.ru/tseny/"><span itemprop="name">Цены</span></a></li>
      <li><a href="https://bis-acc.ru/contacts/"><span itemprop="name">Контакты</span></a></li>
   </ul>
   </nav>';

echo '</ul>';

