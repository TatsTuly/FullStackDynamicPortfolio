<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card{
            display:flex;
            flex-direction: column;
            border:red;
        }
        .card:hover{
            background-color: black;
            color:brown;
        }</style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h3>bird</h3>
            <p>This a bird</p>
             <img
            src="https://plus.unsplash.com/premium_photo-1749760305646-60673cae2c46?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw0MXx8fGVufDB8fHx8fA%3D%3D">

        </div>
 <div class="card">
            <h3>bird</h3>
            <p>This a bird</p>
             <img
            src="https://images.unsplash.com/photo-1749847850294-19c4f59bf3f9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw4fHx8ZW58MHx8fHx8">

        </div>
         <div class="card">
            <h3>bird</h3>
            <p>This a bird</p>
             <img
            src="https://images.unsplash.com/photo-1749847850294-19c4f59bf3f9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw4fHx8ZW58MHx8fHx8">

        </div>
         <div class="card">
            <h3>bird</h3>
            <p>This a bird</p>
             <img
            src="https://images.unsplash.com/photo-1749847850294-19c4f59bf3f9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw4fHx8ZW58MHx8fHx8">

        </div>
        <script>
          const card =document.querySelectorAll(".card");
          card.forEach(id=>{
            id.addEventListener("click",()=>{
                alert(id.children[1].innerText);
            })
          })

        </script>
</body>
</html>
