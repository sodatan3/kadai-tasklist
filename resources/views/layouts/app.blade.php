<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
         ul{
             width: 1000px;
             list-style: none;
             margin: 0;
             padding: 0;
             border-top: 1px solid black;
             border-right: 1px solid black;
             border-left: 1px solid black;
   
         }
         
         li{
             border-bottom: 1px solid black;

         }
         
         a{
             text-decoration: none;
             color: black;
 
         }
         
         a:hover{
             color: gray;
         }
         
         span{
             border-right: 1px solid black;
             display: inline-block;
 
         }
        </style>
        <meta charset="utf-8">
        <title>Tasklist</title>
    </head>
    <body>
        @include('commons.error_messages')
        
        @yield('content')
    </body>
</html>