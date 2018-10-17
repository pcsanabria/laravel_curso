<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    	
    	*{margin: 0;padding: 0;box-sizing: border-box;}
    	html{height: 100%}
    	body{min-height: 100%;display: flex;flex-direction: column;}
    	header{padding: 0.5rem 1rem; background-color: hsl(150deg,50%,50%); display: flex; justify-content: space-between; align-items: center;box-shadow: 0 2px 10px rgba(0,0,0,0.5)}
    	header nav a{color: black; margin-left: 1rem}
    	main{flex-grow: 1;padding: 1rem}
    	footer{ background-color:  hsl(150deg,50%,25%);text-align: center; padding: 1rem}

    	ul{list-style-type: none;}
    	a{text-decoration: none;}


        #card-section{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card{
            padding: 1rem;
            background-color: white;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .card img {
            border-radius: 50%;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        .card a {
            color: black;
            text-decoration: none;
        }

        .card:hover{
            transform: scale(1.1);
            box-shadow: 4px 4px 15px 10px rgba(0,0,0,0.3);
        }

    </style>
</head>
<body>
    @include("layout.socialheader")
    <main>
    	@yield("content")    
    </main>
    @include("layout.socialfooter")
</body>
</html>