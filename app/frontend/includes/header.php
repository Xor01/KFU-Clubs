<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php appName(); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Custom Assets -->
  <link href="<?php echo FRONTEND_ASSET . 'css/profile.css'; ?>">
  <script src="<?php echo FRONTEND_ASSET . 'css/profile.js'; ?>"></script>

  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  body, html {
    margin: 0;
    padding: 0;
    background-color: rgba(231, 231, 231, 0.842); 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

#navbar {
    display: flex;
   background-color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

#Login, #announcements, #Events{
    margin-right: 20px;
    margin-left: 20px;
}

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 200px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}

#Courses {
    margin-right: 20px;
}



#Paragraphs{

font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
width: 300px;
margin-top: 50px;
margin-left: 70px;


}

.Aboutus{
    margin-top: 50px;
}



#Clubsinfo {
    margin-left: 700px;
    margin-top: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-top: 70px;
    width: 500px;
    text-align: center; /* Center the text */
}

#Container {
    display: flex;
    justify-content: center; /* Center items horizontally */
    flex-wrap: wrap; /* Allow items to wrap */
}

.club-container {
    margin: 10px; /* Add some margin between items */
    text-align: center; /* Center text */
}

.club-info {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.club-info h4 {
    margin: 0; /* Remove default margin */
    font-size: 20px; /* Adjust font size for title */
    margin-right: 20px;
}

.club-info p {
    margin: 0; /* Remove default margin */
    font-size: 50px; /* Adjust font size for emoji to medium */
}


#Background{
    background-color: aqua;
    height: 200px;
}


#clubcontents {
    text-align: center;
}

#clubsoutcomes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.club {
    margin: 0 10px; /* Add margin between club items for better spacing */
    text-align: center;
}

  </style>
</head>
<body>