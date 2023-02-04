<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
          .contador{
            height:155px;
            width: 320px;
         transform: rotate(180deg);
            margin: 200px 100px;
            position: relative;
          
        }
        
        .numero{
            height: 100%;
            width: 100%;
            text-align: center;
            font-size: 12.8em;
            font-weight: bold;
            font-family:  sans-serif;
           color: #555;
            position: absolute;
            transform: rotate(-180deg);
            mix-blend-mode: screen;
            background-color: #fff;
           display: flex;
           justify-content: center;
           align-items: center;
        }
        .color_fondo{
            transition: .2s;
            transform-origin: bottom;
            position: absolute;
            display: block;
           height: 0%;
            width: 100%;
            background-color: rgb(194, 20, 20);
        }
    </style>
</head>
<body>
    <div class="contador">
        <div class="color_fondo" id="fondo_color">
         
        </div>
        <div class="numero" id="numero">
          
        </div>
    </div>
    <script>
          const color=document.getElementById('fondo_color')
        const numero=document.getElementById('numero')

       let cantidad=0
        let tiempo=setInterval(() => {
            cantidad+=10
            color.style.height=`${cantidad}%`
            numero.textContent=  Math.floor(Math.random() * 10)
            if(cantidad===100){
                clearInterval(tiempo)
                numero.textContent=  1;
            }

        }, 100);
    </script>
</body>
</html>