<?php
include'header.php';

?>
<main>
    <div>
        <section>
<?php

if(isset($_SESSION['userid'])){
echo'<div class="insertionmsg"><h1>congradulations! your data inserted successfully</h1></div>';
}
else{
    echo'<p >You are logged out</p>';


}

?>
</section>
</div>
</main>
<?php
require"footer.php";

?>