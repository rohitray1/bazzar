<footer class="site-footer">
    <div class="footer-container">

        <!-- ✅ STORE INFO -->
        <div class="footer-box">
            <h3>Lot Bazzar</h3>
            <p>Your trusted online clothing store. Best quality at best price.</p>
        </div>

        <!-- ✅ QUICK LINKS -->
        <div class="footer-box">
            <h3>Quick Links</h3>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu'
            ));
            ?>
        </div>

        <!-- ✅ CUSTOMER SERVICE -->
        <div class="footer-box">
            <h3>Customer Service</h3>
            <ul>
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Shipping Info</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>

        <!-- ✅ NEWSLETTER -->
        <div class="footer-box">
            <h3>Newsletter</h3>
            <p>Subscribe for latest offers</p>
            <form>
                <input type="email" placeholder="Enter your email">
                <button type="submit">Subscribe</button>
            </form>
        </div>

    </div>

    <!-- ✅ COPYRIGHT -->
    <div class="footer-bottom">
        © <?php echo date('Y'); ?> Lot Bazzar. All Rights Reserved.
    </div>

    <?php wp_footer(); ?>
</footer>
</body>
</html>
