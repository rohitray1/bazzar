<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>   <!-- ✅ THIS LINE IS MOST IMPORTANT -->
</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <div class="container">

        <div class="logo">
            <a href="/"><h2>Lot-Bazzar</h2></a>
        </div>

        <div class="search-box">
            <input type="text" placeholder="Search products...">
            <button>Search</button>
        </div>

        <nav class="nav-menu">
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">Categories</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>

        <div class="user-actions">
            <a href="#" class="login-btn">Login</a>
            <a href="#" class="cart-btn">🛒 Cart</a>
        </div>

    </div>
</header>