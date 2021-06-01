<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/browse.css")?>
</style>

<?php $page_title="Order Placement"; ?>

<body>
<center>
        <div class = 'product_database'>
        <h1 class='browse_title'> All Shop In TaoHu </h1>
        <?php
        echo "<html><body><center><table>\n\n";
  
        
        $file = fopen("stores.csv", "r");
        $idsColumnsNotWanted = array(2,3,4);
        
        while (($data = fgetcsv($file)) !== false) {
  
            
            echo "<tr>";
            $numcolumn=0;
            foreach ($data as $i) {
                if(!in_array($numcolumn,$idsColumnsNotWanted))
                echo "<td>" . htmlspecialchars($i) . "</td>";
                $numcolumn++;
            }
            echo "</tr> \n";
        }

        fclose($file);
  
        echo "\n</table></center></body></html>";
        ?>
        </div>
</center>
</body>




<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script src="addtocart.js"></script>
<script type="text/javascript" src="shared.js"></script>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>