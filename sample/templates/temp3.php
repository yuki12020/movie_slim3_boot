<!DOCTYPE html>
<html lang="en">
<head>
<!--head-->
<?php  include dirname(__FILE__) ."./../include/head.php"; ?>					
<!--head end-->		
</head>
<body>
    <div class="wrapper">	
<!--sidebar-->
<?php  include dirname(__FILE__) ."./../include/side.php"; ?>					
<!--sidebar end-->		
        <div class="main-panel">	
			<!--nav　インクルード　-->
			<?php  include dirname(__FILE__) ."./../include/nav.php"; ?>
			<!--nav　インクルード　end-->
			
			
			<?php echo "テンプレ(3)記述エリア";?>
			<td style="width:300px"  class="text-center"><a title="アカウント詳細"　rel="tooltip"　class="btn btn-info btn-simple btn-xs" href ="/public/account/detail/?id='.htmlspecialchars($value["id"],ENT_QUOTES,'UTF-8').'">'.$value["login_id"].'</a></td>';
            <a class="nav-link" href="detail_temp.php">
                <i class="nc-icon nc-bell-55"></i>
                <p>detail_temp.php</p>
            </a>
			
            <footer class="footer">
					<!--copywrite-->
					<?php  include dirname(__FILE__) ."./../include/copywrite.php"; ?>					
					<!--copywrite end-->	
            </footer>
        </div>
    </div>
</body>
</body>
<!--core_js-->
<?php  include dirname(__FILE__) ."./../include/core_js.php"; ?>					
<!--core_js end-->		
</html>
