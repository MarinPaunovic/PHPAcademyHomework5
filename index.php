<form action="index.php" method="post">
    <button name="izmjena">random odabir</button>

</form>
<?php

require "prvi/abc.php";
require "drugi/qwe.php";
require "treci/xyz.php";
require "cetvrti/yxc.php";
require "final_app/app.php";

use final_app\app as ap;
use prvi\abc as hh;
use drugi\qwe as qq;
use treci\xyz as xx;
use cetvrti\yxc as yy;

if(isset($_POST["izmjena"])) {
    $broj = rand(1, 4);
    switch ($broj) {
        case 1:
            $a = new hh();
            break;
        case 2:
            $a = new qq();
            break;

        case 3:
            $a = new xx();
            break;
        case 4:
            $a = new yy();
            break;
    }
    new ap($a->viewAction());


}



