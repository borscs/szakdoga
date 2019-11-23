<footer id="sticky-footer" class="footer py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>
            <?php
            date_default_timezone_set("Europe/Budapest");
            $t = date("H:i:s");
            echo "<b>Server Time:  $t</b>";
            ?>
        </small>
    </div>
</footer>