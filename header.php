<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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