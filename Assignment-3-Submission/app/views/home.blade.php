<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>My PHP Interpreter</title>
    <style>
        body{ 
          background-color: #9370DB;
        }

        h1{
          color:white;
          font-family: Helvetica;
          text-align: center;
        }

        h2 {
          color:white;
          font-family: Helvetica;
        }

        .bottom{
          background-color: #8A2BE2;
          height: 85%;
        }

        .code{
          height: 100%;
        }

        .code_input{
          width: 98%;
          height: 98%;
          margin-top: 0.5%;
          margin-left:1%;
          margin-right:1%;
          margin-bottom:1.5%; 
          font-size: 120%;
          resize: none;
        }

        [class*="col-"] {
            float: left;
        }

        .col-1{ 
          width: 8.33%;
        }
      
        .col-2{ 
          width: 16.66%;
        }
      
        .col-3{ 
          width: 25%;
        }
      
        .col-4{ 
          width: 33.33%;
        }
      
        .col-5{ 
          width: 41.66%;
        }
      
        .col-6{ 
          width: 50%;
        }
      
        .col-7{ 
          width: 58.33%;
        }
      
        .col-8{ 
          width: 66.66%;
        }
      
        .col-9{ 
          width: 75%;
        }
      
        .col-10{ 
          width: 83.33%;
        }
      
        .col-11{ 
          width: 91.66%;
        }
      
        .col-12{ 
          width: 100%;
        }

        .container{
            width: 100%;
            height: 100%;
            padding: 0%;
            margin: 0%;
        }

        .destination{
          background: white;
          font-size: 100%;
          font-family: Helvetica;
          width: 98%;
          height: 98%;
          margin-top: 0.5%;
          margin-left:1%;
          margin-right:1%;
          margin-bottom:1.5%; 
        }

        .heading{
          height: 10%;  
        }

        .result{
          height: 100%; 
        }

        .row:after {
          content: "";
          display: block;
          clear: both;
        }

        .submit-button{
          float:right;
          margin-top: 7px;
          margin-right: 7px;
          background: #9370DB;
          -webkit-border-radius: 22;
          -moz-border-radius: 22;
          border-radius: 22px;
          font-family: Helvetica;
          color: #ffffff;
          font-size: 18px;
          background: #9370DB;
          padding: 10px 20px 10px 20px;
          border: solid #9370db 2px;
          text-decoration: none
        }

        .submit-button:hover {  
          background: #9932CC;
          text-decoration: none;
        }
        
       .save-button{
          margin-right: 100%; 
          background:#8A2BE2;    

        }
      
        .textarea-wrapper{
          height: 90%;  
        }

        .top{
          height: 15%;
        }
    </style>
  </head>
  <body>
    <div class = "container">
      <div class = "top row col-12">
        <span class="col-11"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My PHP Interpreter</h1></span>
        <span class="col-1"><a href="{{URL::to('/signout')}}"><input class = "submit-button save-button" type="button" value = "Log Out"></input></a></span>
      </div>
      <div class = "bottom row col-12">
        <div class = "code col-6">
          <form action="" method="post" >
            <div class = "heading col-12">
              <span class="col-9"><h2>&nbsp;PHP Source:</h2></span>
              <span class="col-3"><input class = "submit-button" type="submit" value = "Execute"></input></span>
            </div>
            <div class = "textarea-wrapper col-12">
              <textarea  id = "code" name = "code-text" value = "" class = "code_input" spellcheck = "false" ></textarea>
            </div>
          </form>
        
        </div>
        <div class = "result col-6">
          <div class = "heading col-12">
            <h2>&nbsp;Result:</h2>
          </div>
          <div class = "textarea-wrapper col-12">
            <div id = "display" class = "destination">
              <?php include (('result.php')); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>



