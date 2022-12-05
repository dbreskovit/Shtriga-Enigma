<?php
    echo "<a hidden id='a' href='..\source\img\b4db343d51264dd6936b234d300008ab.png' download='teste'>Clique aqui</a>";
    echo"<a hidden id='b' href='javascript:history.back()'>Go Back</a>";
    echo "<script>document.getElementById('a').click();</script>";
    echo "<script>document.getElementById('b').click();</script>";
?>