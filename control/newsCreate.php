<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		include("includes/link.php");
		include_once("DAL/context.php");
	?>
	<!-- <style type="text/css">
		/* Alignment styles for images, videos and iframes in editable regions */

		/* Center (default) */
		[data-editable] iframe,
		[data-editable] image,
		[data-editable] [data-ce-tag=img],
		[data-editable] img,
		[data-editable] video {
		    clear: both;
		    display: block;
		    margin-left: auto;
		    margin-right: auto;
		    max-width: 100%;
		}

		/* Left align */
		[data-editable] .align-left {
		    clear: initial;
		    float: left;
		    margin-right: 0.5em;
		}

		/* Right align */
		[data-editable].align-right {
		    clear: initial;
		    float: right;
		    margin-left: 0.5em;
		}

		/* Alignment styles for text in editable regions */
		[data-editable] .text-center {
		    text-align: center;
		}

		[data-editable] .text-left {
		    text-align: left;
		}

		[data-editable] .text-right {
		    text-align: right;
		}
        .author {
            font-style: italic;
            font-weight: bold;
        }
	</style> -->
  </head>

  <body>
  <?php include("includes/nav.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
			<?php include("includes/navside.php"); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">News Management</h1>
		  <div class="col-md-9 col-sm-offset-1">
		  <form class="form-horizontal" action="newsCreate" method="post">
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Title</label>
			<div class="col-sm-8">
				<input type="text" id="title" name="title" class="form-control" placeholder="Title" required="" autofocus="">
			</div>
			</div>
		  <div class="form-group">
			<label for="email" class="label-control col-lg-4">Title in English</label>
			<div class="col-sm-8">
				<input type="text" id="title_en" name="title_en" class="form-control" placeholder="Title in English" required="" autofocus="">
			</div>
			</div>
		  <div class="form-group">
			<label class="label-control col-lg-4">Content</label>
			<div class="col-sm-8">
				<textarea id="content" name="content" class="form-control" placeholder="Content" required="" rows=10></textarea>
				<!-- <textarea id="editor" placeholder="Balabala" autofocus></textarea>
				<script>
				var editor = new Simditor({
				  textarea: $('#editor')
				  //optional options
				});
				</script> -->
				<!-- <div data-editable data-name="main-content" name="content">
					<p>Edit content with click pencil in left above then click here...</p>
				</div> -->
			</div>
			</div>
		  <div class="form-group">
			<label class="label-control col-lg-4">Content in English</label>
			<div class="col-sm-8">
				<textarea id="content_en" name="content_en" class="form-control" placeholder="Content in English" required="" rows=10></textarea>
				<!-- <textarea id="editor" placeholder="Balabala" autofocus></textarea>
				<script>
				var editor = new Simditor({
				  textarea: $('#editor')
				  //optional options
				});
				</script> -->
				<!-- <div data-editable data-name="main-content" name="content">
					<p>Edit content with click pencil in left above then click here...</p>
				</div> -->
			</div>
			</div>
			<button class="btn btn-primary" name="Submit" type="submit">Create</button>
			<a class="btn btn-info" href="news" onclick="e.preventDefault();">Back</a>
		  </form>
		  <?php	 
			// Check If form submitted, insert form data into news table.
			if(isset($_POST['Submit'])) {
				$email = $_POST['title'];
				$pw = $_POST['content'];
				$email2 = $_POST['title_en'];
				$pw2 = $_POST['content_en'];
				$date = date("Y-m-d h:i:s");
				
				// Insert news data into table
				$result = mysqli_query($mysqli,
					"INSERT INTO news(title, title_en, content, content_en, created_at, updated_at) VALUES('$email','$pw', '$email2','$pw2','$date','$date')"
				);
				
				// Show message when news added
				echo "<div class='row'><label class='label label-success'>News added successfully</label></div>";
			}
		?>
        </div>
        </div>
      </div>
    </div>
  <?php include("includes/linkjs.php"); ?>
  

</body>
</html>