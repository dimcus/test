<pre>
<?php

    require_once("lib/interfaces/anyCache.php");
    require_once("lib/vendors/book.php");
    require_once("lib/classes/BookCache.php");

    $instance = new Lib\Classes\BookCache();

    $instance->setValue("id23535", "test", 3600);

    $instance->getValue("id23535");

    unset($instance);
?>
</pre>