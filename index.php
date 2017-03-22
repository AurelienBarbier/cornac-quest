<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/03/17
 * Time: 17:40
 */

include 'config.php';
include 'header.php';
// TODO Tester cq !
foreach ($shows as $show){

    extract($show);
    ?>
<tr>
    <td><?php echo $time; ?></td>
    <td><?php echo $title; ?></td>
    <td><?php echo $artiste; ?></td>
    <td><?php echo $url; ?></td>
</tr>

    <?php
}
include 'footer.php';