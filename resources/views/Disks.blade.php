<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    *{
  margin:0;
  padding: 0;
  box-sizing: border-box;

}
body{
  font-family: 'Acme', sans-serif;
  font-family: 'Outfit', sans-serif;
  font-family: 'Poppins', sans-serif;
  font-family: 'Rubik', sans-serif;
  background-color: rgb(26, 26, 26);
  color:rgb(255, 255, 255);
}

/* ------------------ */
h1{
  height: 80px;
  background-color:black;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 40px;
  
}



/* main--------------------- */
.items{
  width:80%;
  margin:auto;
  display: flex;

  flex-wrap: wrap;

}
.item{
  text-align: center;
  margin:20px;
  width: 15%;

}
.item img{
  width:100%;
}


  </style>
</head>
<body>
  <h1 class="text-center"> Dischi</h1>
  <div  class="items">
    @foreach ($disks as $disk)
      <div class="item">
        <img src="{{$disk['poster']}}" alt="">
        <h2> {{$disk["title"]}}</h2>
        <h3> {{$disk["author"]}}</h3>
        <p>{{$disk["year"]}}</p>
        <p >{{$disk["genre"]}}</p>
      
      </div> 
    @endforeach

  </div>
</body>
</html>