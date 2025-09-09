<!DOCTYPE html>
<html>
    <head>
        

        <title></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
       <script src="https://code.jquery.com-3.6.0.min.js"></script>
       <style>
        body {font-family: Arial;padding: 20px;}
        .filters{margin-bottom: 20px;}
        .card{border:1px solid #ccc;padding: 10px;margin: 5px;display: inline-block;width: 200px;}
       </style>
    </head>
    <body><h1>Browser Handsets</body>
       <div class="filters"></div>
        Brand :<input id="brand">
         Price min :<input id="price_min" type="number">
          Price max :<input id="price_max" type="number">
           Features :<input id="features">
           <button id="searchBtn">Search</button>
           <div>

           <div id="results"></div>
           <script>
            function fetchHandset()
            {
                let params ={
                    brand:$('brand').val(),
                    price_min:$('$price_min').val(),
                    price_max:$('$price_max').val(),


                };
                $.get ('/api/v1/handsets',params,function(res)
                {
                $('#results').empty();
                    res.data.foreach(h=>
                    {
                        $('#results').append
                        (
                            <div class="card">
                           <b>${h.name}</b><br/>
                            brand:${h.brand}<br/>
                            price:${h.price}<br/>
                            release:${h.release}<br/>
                            features:${h.features}<br/>
                            </div>
                        );   
                        });
                    });
            };
        
                    $('#searchBtn').on('click',fetchHandset);
                    $(fetchHandset);

           
           </script>
            
    </body>
</html>
