<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        wp_title('|', true, 'right'); // Page title
        bloginfo('name'); // IDM250-KJB396
        ?>
    </title>
    <?php wp_head(); ?>
</head>
<header>
    <section class="top-nav">
        <div>
            <a href="index.html"><img src="" alt="Logo"></a>
        </div>
        <input id="menu-toggle" type="checkbox">
        <label class="menu-button-container" for="menu-toggle">
        <span class="menu-button"></span>
        </label>
        <ul class="menu">
            <li><a href="">About Us</a></li>
            <li><a href="">E-Board</a></li>
            <li><a href="">Barrio Fiesta</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Calendar</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </section>
</header>