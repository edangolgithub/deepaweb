 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="jquery-3.3.1.js"></script>
     <title>Document</title>
 </head>
 <body>
     <script>
     $(document).ready(function(){
            
         $.post ("sa.php",function(s){
             alert(s);
         })
     })
     </script>
     
 </body>
 </html>