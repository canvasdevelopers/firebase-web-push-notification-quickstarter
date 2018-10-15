<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
<h1>Send Firebase notification</h1>

<form class="form-horizontal" id="exampleStandardForm" method="post" action="send.php" enctype="multipart/form-data" autocomplete="off">
				   <div class="form-group">
		  <label class="col-sm-3 control-label">Firebase token</label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" id="token" name="token" placeholder="Firebase token" required="">
		  </div>
		</div>	
		<div class="form-group">
		  <label class="col-sm-3 control-label">Title</label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" id="title" name="title" value="Firebase notification Title" placeholder="Enter Title" required="">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">Redirect url</label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" id="url" name="url" value="https://www.example.com/" placeholder="Redirect url"  required="">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">Icon</label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" id="icon" name="icon"value="https://www.example.com/favicon.ico" placeholder="notifcation icon" required="">
		  </div>
		</div>
			   <div class="form-group">
		  <label class="col-sm-3 control-label">Body</label>
		  <div class="col-sm-9">
			<textarea class="form-control" id="body" name="body" value="Firebase Cloud Messaging for Web using JavaScript" placeholder="Enter Namebn" required="">Test Message Body</textarea>
		  </div>
		</div>
		
		
                <div class="text-right">
                  <button type="submit" class="btn btn-primary" id="validateButton2">Notify</button>
                </div>
				
			   <div class="form-group">
		  <label class="col-sm-3 control-label">Data (not required)</label>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data1" value="datakey" placeholder="Enter data 1 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val1" value="datavalue" placeholder="Enter value 1 key">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data2" value="" placeholder="Enter data 2 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val2" value="" placeholder="Enter value 2 key">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data3" value="" placeholder="Enter data 3 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val3" value="" placeholder="Enter value 3 key">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data4" value="" placeholder="Enter data 4 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val4" value="" placeholder="Enter value 4 key">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data5" value="" placeholder="Enter data 5 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val5" value="" placeholder="Enter value 5 key">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data6" value="" placeholder="Enter data 6 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val6" value="" placeholder="Enter value 6 key">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data7" value="" placeholder="Enter data 7 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val7" value="" placeholder="Enter value 7 key">
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data8" value="" placeholder="Enter data 8 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val8" value="" placeholder="Enter value 8 key">
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data9" value="" placeholder="Enter data 9 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val9" value="" placeholder="Enter value 9 key">
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-sm-3 control-label">
		  <input type="text" class="form-control" name="data10" value="" placeholder="Enter data 10 key">
		  </label>
		  <div class="col-sm-9">
			<input type="text" class="form-control" name="val10" value="" placeholder="Enter value 10 key">
		  </div>
		</div>

				
               </form>
			   
</div>

</body>
</html>
