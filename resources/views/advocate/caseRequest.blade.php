<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Requests</title>
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
<h3>Below are the pending case requests: </h3>

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
                Client Name: <span>Chaitya Shah</span>
              </li>
              <li>
                Description: <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Suspendisse gravida malesuada velit, posuere fringilla diam rhoncus sed. 
                Praesent eget rutrum mi. Aenean metus odio, feugiat vel sapien in, consectetur dignissim mi. 
                Ut hendrerit fringilla arcu vitae vehicula. Morbi aliquam lacinia malesuada.</span>
              </li>
              <li>
                Court: <span>High Court</span>
              </li>
              <li>
                  <div class="row">
                      <div class="col-md-6">
                        <button onclick="accept_reject('accept','advocate1')" class="btn-block btn-success">ACCEPT</button>
                      </div>
                      <div class="col-md-6">
                        <button onclick="accept_reject('reject','advocate1')" class="btn-block btn-danger">REJECT</button>
                      </div>
                  </div>        
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

       
    <div class='card col-md-10' id="advocate2">
        <div class='card-title'>
          <h2>
             Nanavati Case:
            <small>Type Of Case: Criminal/Personal injury lawyer</small>
          </h2>
         
        </div>
        <div class='card-flap flap1'>
          <div class='card-description'>
            <ul class='task-list'>
              <li>
                Client Name: <span>Chaitya Shah</span>
              </li>
              <li>
                Description: <span>
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
                  <div class="row">
                      <div class="col-md-6">
                        <button onclick="accept_reject('accept','advocate2')" class="btn-block btn-success">ACCEPT</button>
                      </div>
                      <div class="col-md-6">
                        <button onclick="accept_reject('reject','advocate2')" class="btn-block btn-danger">REJECT</button>
                      </div>
                  </div>        
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
    
      <div class='card col-md-10' id="advocate3">
        <div class='card-title'>
          <h2>
             Nanavati Case:
            <small>Type Of Case: Criminal/Personal injury lawyer</small>
          </h2>
          
        </div>
        <div class='card-flap flap1'>
          <div class='card-description'>
            <ul class='task-list'>
              <li>
                Client Name: <span>Chaitya Shah</span>
              </li>
              <li>
                Description: <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Suspendisse gravida malesuada velit, posuere fringilla diam rhoncus sed. 
                Praesent eget rutrum mi. Aenean metus odio, feugiat vel sapien in, consectetur dignissim mi. 
                Ut hendrerit fringilla arcu vitae vehicula. Morbi aliquam lacinia malesuada.</span>
              </li>
              <li>
                Court: <span>High Court</span>
              </li>
              <li>
                  <div class="row">
                      <div class="col-md-6">
                        <button onclick="accept_reject('accept','advocate3')" class="btn-block btn-success">ACCEPT</button>
                      </div>
                      <div class="col-md-6">
                        <button onclick="accept_reject('reject','advocate3')" class="btn-block btn-danger">REJECT</button>
                      </div>
                  </div>        
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

<script type="text/javascript" src="js/lawyers.js"></script>

    
</body>
</html>