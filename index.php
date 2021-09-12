<?php
require"header.php";

?>
<main>
    <div>
        <section>
<?php
if(isset($_SESSION['userid'])){
echo"<h1>welcome<h1>";
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