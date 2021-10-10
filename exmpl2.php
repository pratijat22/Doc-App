<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <link rel="stylesheet">
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <title>Awesome Search Box</title>
      <style>
          body {
 margin: 0;
 padding: 0;
 background: #e84118;
}

.search-box {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 background: #2f3640;
 height: 40px;
 border-radius: 40px;
 padding: 10px;
}

.search-box:hover > .search-txt {
 width: 240px;
 padding: 0 6px;
}

.search-box:hover > .search-btn {
 background: white;
 color: black;
}

.search-btn {
 color: #e84118;
 float: right;
 width: 40px;
 height: 40px;
 border-radius: 50%;
 background: #2f3640;
 display: flex;
 justify-content: center;
 align-items: center;
 transition: 0.4s;
 color: white;
 cursor: pointer;
}

.search-btn > i {
 font-size: 30px;
}

.search-txt {
 border: none;
 background: none;
 outline: none;
 float: left;
 padding: 0;
 color: white;
 font-size: 16px;
 transition: 0.4s;
 line-height: 40px;
 width: 0px;
 font-weight: bold;
}
      </style>
   </head>
   <body>
       <div class="search-box">
       <input type="text" name="" class="search-txt" placeholder="Type to search"/>
       <a class="search-btn" href="#">
       <i class="fas fa-search"></i>
       </a>
     </div>
   </body>
</html>