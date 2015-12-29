<html>
    <head>
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

            .bottom{
              background-color: #8A2BE2;
              height: 50%;
              border-radius: 10%;
              margin-left: 33.33%;
              padding-top: 7%;
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

            .row:after {
              content: "";
              display: block;
              clear: both;
            }

            .submit-button{
                background: #9370DB;
                font-family: Helvetica;
                color: #ffffff;
                background: #9370DB;
                border: solid #9370db 2px;
                text-decoration: none
              }

              .submit-button:hover {    
                background: #9932CC;
                text-decoration: none;
              }
        
            .top{
              height: 15%;  
            }

            input{
              width: 80%;
              height: 15%;
              box-sizing: border-box;
              border-radius: 5px;
              border: 1px solid #ccc;
              margin-left: 10%;
              margin-bottom: 3%;
              font-size: 100%;
              font-family: Helvetica;
              padding-left:2%;
              outline: none;
            }
        </style>
    </head>
    <body>
        <div class = "container">
            <div class = "top row col-12">
                <h1>Login 
                </h1>
            </div>
            <div class = "bottom row col-4">
      				{{ Form::open(array('url' => 'signin')) }}
      			    
      			    {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username')) }}
      			    {{ Form::password('password', array('placeholder'=>'Password')) }}
      			    {{ Form::submit('Log In', array('class' => 'submit-button')) }}

      				{{ Form::close() }}
              <a href="{{URL::to('/register')}}"><input  type = "button" class= "submit-button" value = "Get Yourself Registered!"></input></a>
			       </div>
        </div>
    </body>
</html>

