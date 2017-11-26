<!DOCTYPE html>
<html>
	<head>
	<link href="../Back Office/backclient.css" rel="stylesheet" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div id="light1" class="white_content">
			<h2 id="titre1"></h2> 
		  	<form enctype="multipart/form-data" action="../controleur/backclient.php?Image=true" method="post">
		    <fieldset>
		    <legend>Images 1 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="maxsize" value="30000" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 2 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="maxsize" value="30000" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 3 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="maxsize" value="30000" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 4 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="maxsize" value="30000" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 5 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="maxsize" value="30000" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
			</form>
			<a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'"><h5>Close<h5></a>
		</div>


		<div id="light2" class="white_content">
		  	<h2 id="titre2"></h2> 
		  	<form enctype="multipart/form-data" action="../controleur/backclient.php?Image=true" method="post">
		    	<fieldset>
		    	<legend>Image</legend>
		      	<p>
		      	<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
		      	<input type="hidden" name="maxsize" value="30000" />
		      	<input name="fichier" type="file" id="fichier_a_uploader" />
		      	<input type="submit" name="submit" value="Uploader" />
		      	</p>
		    </fieldset>
		  </form>
		  <a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='none';document.getElementById('fade').style.display='none'"><h5>Close<h5></a>
		</div>
		<div id="fade" class="black_overlay"></div>
		</div>
	</body>
<html>






