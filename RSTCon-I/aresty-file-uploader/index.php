<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aresty File Uploader</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <style>
        h1 {
            font-size: 20px;
            margin-top: 24px;
            margin-bottom: 24px;
        }
    </style>
</head>
<body>
    <div class="col-md-6 offset-md-3 mt-5">
        <h1>Aresty File Uploader</h1>
        <form accept-charset="UTF-8" action="" method="POST">
			<?php
				if(!empty($_POST))
				{
					if($_POST['url'] == "file://flag.php")
					{
						echo "RST{".hash("sha256", "thisislfi-itshouldbefiltered")."}";
					}else{
						echo "Fisierul a fost incarcat cu succes.";
					}
				}
			?>
			<hr>
            <div class="form-group">
                <label for="byurl">Prin URL:</label>
                <input type="text" name="url" class="form-control" id="byurl">
            </div>
            <hr>
            <div class="form-group mt-3">
                <label class="mr-2">Prin fisier:</label>
                <input type="file" name="file">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Trimite</button>
        </form>
    </div>
</body>
</html>