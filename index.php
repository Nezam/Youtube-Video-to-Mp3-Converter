<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
     <script type="text/javascript">
     $.ajax({
            type: "POST", //rest Type
            dataType: 'jsonp', //mispelled
            url: "http://json-cricket.appspot.com/score.json",
            async: false,
            contentType: "application/json; charset=utf-8",
            success: function (msg) {
                alert(msg);                
            }
 });
     </script>
 </body>
</html>