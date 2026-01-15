<link rel="stylesheet" href="style.css">

<!--https://themewp.inform.click/es/arrastrar-y-soltar-carga-de-varios-archivos-usando-javascript-y-php/-->

	<div id="drop_file_zone" ondrop="upload_file(event,'file')" ondragover="return false" >
	    <div id="drag_upload_file">
	        <p>Suelta aquí o busca tu archivo</p>
	        <p><input type="button" value="Select File" onclick="file_explorer('selectfile1','file');" ></p>
	        <input type="file" id="selectfile1" name="file">
	    </div>
	</div>


	<div id="drop_file_zone" ondrop="upload_file(event,'F_ACTA_NACIMIENTO2')" ondragover="return false" >
	    <div id="drag_upload_file">
	        <p>Suelta aquí o busca tu archivo</p>
	        <p><input type="button" value="Select File" onclick="file_explorer('selectfile2','F_ACTA_NACIMIENTO2');" ></p>
	        <input type="file" id="selectfile2" name="F_ACTA_NACIMIENTO2" >
	    </div>
	</div>


	 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="custom.js"></script>