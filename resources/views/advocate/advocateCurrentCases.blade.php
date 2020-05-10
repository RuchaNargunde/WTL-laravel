<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Cases</title>

    <link rel="stylesheet" type="text/css" href="css/viewOurLawyers.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

</br>
<h3>Your accepted cases are show below: </h3>

<div class="row dashboard-cards" style="padding-top: 6%;">
    <!-- Advocate id enter here -->
    <div class='card col-md-10' id="advocate1">  
        <div class='card-title'>
          <h2>
             Nanavati Case 2:
            <small>Type Of Case: Criminal/Personal injury lawyer</small>
          </h2>
         
        </div>
        <div class='card-flap flap1'>
          <div class='card-description'>
            <ul class='task-list'>
              <li>
                Client Name: <span> Chaitya Shah</span> 
              </li>
              <li>
				Description: 
				<span>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Suspendisse gravida malesuada velit, posuere fringilla diam rhoncus sed. 
                    Praesent eget rutrum mi. Aenean metus odio, feugiat vel sapien in, consectetur dignissim mi. 
					Ut hendrerit fringilla arcu vitae vehicula. Morbi aliquam lacinia malesuada.
				</span>
              </li>
              <li>
                Court: <span>High Court</span>
              </li>
              <li>
                  Previous Hearing Date: <span>DD/MM/YYYY</span>
              </li>
              <li>
                  Next Hearing Date: <span>DD/MM/YYYY</span>
              </li>
              <li>
                  <button class="btn-block btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" >EDIT CASE DETAILS</button>        
              </li>
            </ul>
          </div>
          <div class='card-flap flap2'>
            <div class='card-actions'>
              <a class='btn' href='#'>Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>


<aside>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title center" id="exampleModalLabel">Edit Case Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="event.preventDefault();" class="was-validated">
                    <div class="form-group">
                      <label >Client Name:</label>
                      <span >Chaitya Shah</span>
                    </div>
                    <div class="form-group">
                      <label >Case Name:</label>
                      <span >nanavati Case</span>
                    </div>
                    <div class="form-group">
                      <label for="description">Description: </label>
                      <textarea name="description" class="form-control"rows="3" required></textarea>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                      <label for="pre-date">Previous Hearing Date:</label>
                      <input type="date" name="pre-date" class="form-control" value="2013-01-08" required>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                      <label for="next-date">Next Hearing Date:</label>
                      <input type="date" name="next-date" class="form-control" value="2013-01-08" required>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <button class="btn-block btn-light" type="submit">UPDATE</button>
                      </div>
                      <div class="col-sm-6">
                        <button class="btn-block btn-dark"  data-dismiss="modal">CLOSE</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</aside>


    <script type="text/javascript" src="js/lawyers.js"></script>
</body>
</html>