<?php
if($_SESSION['user'] == "it@awesomecompany.com")
{
	?>
                        <h4 class="widgettitle">Bun venit!</h4>
                        <div class="widgetcontent">
                         Bun venit it@awesomecompany.com.
						  <!-- Flag-ul este RST{<?php echo hash("sha256", "1MPLIC1TFLOWISD34D"); ?>} -->
                        </div>
<?php
}else{
	?>
	                     <h4 class="widgettitle">Acces interzis</h4>
                        <div class="widgetcontent">
                          Doar <em>it@awesomecompany.com</em> e autorizat sa acceseze aceasta pagina.
                        </div>
	<?php
}
?>