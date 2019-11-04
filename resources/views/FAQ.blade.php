
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faq page | WikiPoli</title>
    


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="img/png" href="images/favicon.png">
    <link rel="stylesheet" href="styles/index.css">
    <style>
        #footer{
            background: #6D9BF1 !important;
            margin-top:  2rem;
        }

        h5 .btn {
          font-weight: bold;
        }
        .navbar {
          padding:  0rem !important;
        }
        .social-links h3 {
        font-size: 1rem;
        line-height: 1.5;
        }
        
        p{
            font-size:20px ;
            text-transform:uppercase;
            color:black;
            border-bottom:4px;
            font-family:monospace;
        }
        .sect {
          margin-top: 2rem;
        }
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Lato', sans-serif;
}

.logo img {
    width: 120px;
}

.navbar p {
    font-size: 2rem;
    color:  #6D9BF1;
}

.menu a {
    font-size: 1.5rem;
    color:  #6D9BF1;
}

.menu li {
    padding-left: 2.5rem;
}

.fa-bars {
    color: #000000;
}

.button-signup {
    background-color:  #6D9BF1;
    border: none;
    box-shadow: none;
    color: #ffffff;
    padding: 6px;
    font-size: 1.5rem;
    text-align: center;
    width: 150px;
    margin-left: 2.5rem;
}

.button-signup:hover {
    color: white;
    text-decoration: none;
    background: rgb(24, 24, 133);
}

.button-search {
    background-color:  #6D9BF1;
    border: none;
    box-shadow: none;
    color: #ffffff;
    font-size: 2rem;
    padding: 1px;
    width: 150px;
}

.button-search:hover {
    background: rgb(24, 24, 133);
}

.form-content {
    width: 80%;
    margin-top: 15%;
}

.input-group {
    width: 80%;
    margin-left: 23%;
}

.form-control {
    height: 50px;
    padding: 15px;
    border-radius: 0;
    border: 1px solid  #6D9BF1;
}

h1 {
    margin-left: 23%;
    color:  #6D9BF1;
    margin-bottom: 50px;
}

.search-content {
    font-size: 1.2rem;
    margin-left: 23%;
    color: #676871;
    padding-top: 20px;
    font-weight: bold;
}

.search-content a {
    font-weight: bold;
    color:  #6D9BF1;
}


#footer {
    background-color:  #6D9BF1;
    margin-top: 32%;  /* YOU CAN PULL THIS OUT WHEN YOU IMPLEMENT YOUR PAGE.*/
    padding-top: 10px;
    /* height: 300px; */
    width: 100%;
}

.links {
    padding-top: 5px;
}

.social-links h3,
.quick-links li {
    list-style-type: none;
    padding-top: 5px;
}

.social-links h3,
.quick-links li:first-child {
    color: #ffffff;
    padding-bottom: 10px;
    font-weight: bold;
}

.quick-links li a {
    color: #ffffff;
    text-decoration: none;
}

.social-links a span {
    color: #ffffff;
    letter-spacing: 20px;
}

.social-links p,
.copyright p {
    padding-top: 10px;
    color: #ffffff;
    font-size: 12px;
}

.line{
    display: none;
}

/* Responsive styling */
@media screen and (max-width: 768px) {
    h1 {
        font-size: 30px;
    }
    #footer {
        padding-top: 10px;
        height: 450px;
        width: 100%;
    }
}

@media screen and (max-width: 768px) {
    .input-group {
        width: 100%;
        margin-left: 12%;
    }
    .form-control {
        height: 50px;
        padding: 20px;
        border-radius: 0;
        border: 1px solid  #6D9BF1;
    }
    .button-search {
        background-color:  #6D9BF1;
        border: none;
        box-shadow: none;
        color: #ffffff;
        font-size: 1.2rem;
        padding: 1px;
        width: 80px;
    }
    .search-content {
        font-size: 1rem;
        width: 100%;
        margin-left: 13%;
        color: #676871;
        padding-top: 20px;
        font-weight: bold;
    }
}

@media screen and (max-width: 375px) {
    .input-group {
        width: 120%;
        margin-left: 4%;
    }

    .search-content {
        font-size: 1rem;
        width: 120%;
        margin-left: 8%;
        color: #676871;
        padding-top: 20px;
        font-weight: bold;
    }

    .line{
        display: block;
        margin: 0 auto;
        padding: 0;
        height: 0px;
        border: 1px solid #ffffff;
        width: 25%;
        background: #000;
    }
}


    </style>
</head>
<body>
    @include('layouts.header')
                                        
    <div class="container sect"> 
      <h2>Frequently Asked Questions</h2>
      <br>
      <br>
      <p>Login and Registration Issues</p>
      <div class="accordion" id="Loginaccordion">
        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading1">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"
                aria-expanded="true" aria-controls="collapse1">
                Why do I need to Sign Up/Log In?
              </button>
            </h5>
          </div>
          <div id="collapse1" class="collapse show" aria-labelledby="heading1"
            data-parent="#Loginaccordion">
            <div class="card-body">
                You may not have to, however, in order to post messages
                you must sign up/log in. Also, registration gives you access
                to additional features not available to guest users such as 
                private messaging the administrator, subscription to latest 
                news on this site, etc. It only takes a few moments to 
                register so it is recommended you do so.
            </div>
          </div>
        </div>
        
        <!-- SECOND  -->

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading2">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2"
                aria-expanded="true" aria-controls="collapse2">
                What is WikiPoli?
              </button>
            </h5>
          </div>
          <div id="collapse2" class="collapse" aria-labelledby="heading2"
            data-parent="#Loginaccordion">
            <div class="card-body">
                It is a special type of website designed to make contribution
                on everything politics easy. Many people are constantly 
                improving WikiPOLIS, making thousands of edits every
                minute.
            </div>
          </div>
        </div>

        <!-- THIRD -->

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading3">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3"
                aria-expanded="true" aria-controls="collapse3">
                I registered but cannot login!
              </button>
            </h5>
          </div>
          <div id="collapse3" class="collapse" aria-labelledby="heading3"
            data-parent="#Loginaccordion">
            <div class="card-body">
                First, check your username and password. If they are 
                correct, then one of two things may have happened. 
                If you were sent an email, follow the instructions. 
                If you did not receive an email, you may have
                provided an incorrect email address or the 
                email may have been picked up by a spam filer. 
                If you are sure the email address you provided is 
                correct, try contacting an administrator.
          
            </div>
          </div>
        </div>

        <!-- FORTH -->

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading4">
                <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4"
                aria-expanded="true" aria-controls="collapse4">
                I’ve lost my password!
                </button>
                </h5>
          </div>
          <div id="collapse4" class="collapse" aria-labelledby="heading4"
            data-parent="#Loginaccordion">
            <div class="card-body">
              Don’t panic! While your password cannot be retrieved, 
              it can easily be reset. Visit the login page and click 
              <em>I forgot my password</em>. 
              Follow the instructions and you should be able 
              to log in again shortly.<br />
              However, if you are not able to reset your 
              password, contact a board administrator.
            </div>
          </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <!-- FOR POSTING ISSUES -->
    <div class="container">
      <p>Posting Issues</p>
      <div class="accordion" id="post_accordion">
          <div class="card z-depth-0 bordered">
            <div class="card-header" id="heading5">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse5"
                  aria-expanded="true" aria-controls="collapse5">
                  How do I create a new topic or post a reply?
                </button>
              </h5>
            </div>
            <div id="collapse5" class="collapse show" aria-labelledby="heading5"
              data-parent="#post_accordion">
              <div class="card-body">
                  To post a new topic in a forum, click "New Topic". To post a reply 
                    to a topic, click "Post Reply". You may need to register before you 
                    can post a message. A list of your permissions in each forum is 
                    available at the bottom of the forum and topic screens. 
                    Example: You can post new topics.     
        
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>


            <br>
            <br>
      

      <!-- FOR OTHERS  -->
      <div class="container">
      <p>Others</p>
      <div class="accordion" id="others_accordion">
        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading11">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse11"
                aria-expanded="true" aria-controls="collapse11">
                Who do you think is the richest Nigerian politician alive?
              </button>
            </h5>
          </div>
          <div id="collapse11" class="collapse show" aria-labelledby="heading11"
            data-parent="#others_accordion">
            <div class="card-body">
                I had an argument with a friend recently about some of the 
                richest Nigerian politicians alive, so I am bringing the 
                question here for you guys to give your opinions and 
                help us settle it once and for all.
      
            </div>
          </div>
        </div>
        
        <!-- SECOND  -->

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading22">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse22"
                aria-expanded="true" aria-controls="collapse22">
                Who is your best Nigerian governor so far in 2019?
              </button>
            </h5>
          </div>
          <div id="collapse22" class="collapse" aria-labelledby="heading22"
            data-parent="#others_accordion">
            <div class="card-body">
                Which governor do you think has performed so well this 
                year and deserved the best governor in Nigeria for the
                year 2019?
        
            </div>
          </div>
        </div>

        <!-- THIRD -->

        <div class="card z-depth-0 bordered">
          <div class="card-header" id="heading33">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse33"
                aria-expanded="true" aria-controls="collapse33">
                How much does a local government councillor earn in Nigeria?
              </button>
            </h5>
          </div>
          <div id="collapse33" class="collapse" aria-labelledby="heading33"
            data-parent="#others_accordion">
            <div class="card-body">
                It seems like the local government Councillor is a very lucrative
                 position to hold in Nigeria. I have seen people fighting and
                  doing all sorts of things just to get the position. So, 
                  I’m tempted to ask. Like how much.
            </div>
          </div>
        </div>
    </div>

  </div>
  @include('layouts.footer')
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>