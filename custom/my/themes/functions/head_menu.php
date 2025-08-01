<div class="hat_section align ba-custom">
    <a href="/" class="logo">
        <img src="/custom/my/img/logo.png" alt="Bis-acc">
    </a>
    <div class="bis-menu-btn">
        <?php
        // Вызов блока меню с шаблоном hat
        echo $this->get('show_block', 'menu', ['id' => 1, 'template' => 'hat']);

        // Вызов блока поиска с шаблоном top, без кнопки (button = '')
        echo $this->get('show_search', 'search', ['button' => '', 'template' => 'top']);
        ?>
    </div>
    <div class="">
        <?php
        // Вызов блока site id=1
        echo $this->get('show_block', 'site', ['id' => 1]);
        ?>
    </div>
</div>
