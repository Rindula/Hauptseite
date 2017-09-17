<?php

foreach(glob('./*', GLOB_ONLYDIR) as $dir) {
    echo "<a href='$dir'>".basename($dir)."</a>";
}