<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
       
    .box{
        width: 100px;
        height: 100px;
        background-color:blue;
        position: absolute;
        animation: animate 5s infinite 1s;
    }
    @keyframes animate {
        from {left: 0px;}
        to{left: 1000px;}
    }
    .box1{
        width: 100px;
        height: 100px;
        background-color:black;
        position: absolute;
        animation: an 1s infinite 5s;
    }
    @keyframes an {
        from {left: 0px;}
        to{left: 1000px;}
    }

    </style>

</head>
<body>
    <button id="btn">submit</button>
    <div class="container">
        <div class="box"></div>
        <div class="box1"></div>
    </div>
    <script>
        let message = document.createElement('p');
        message.textContent ='you succeed';
        document.body.appendChild(message);
        message.style.color = 'red';

        // show --------------------------------
        function show(event){
                event.preventDefault();
                let para= document.getElementsByTagName('p')[0];
                para.style.display = 'block';
                dom_btn.style.width ='200px';
            }
        function hide(event){
                event.preventDefault();
                let para= document.getElementsByTagName('p')[0];
                para.style.display = 'none';
                dom_btn.style.width ='100px';
            }
            let dom_btn = document.querySelector('#btn');
            dom_btn.addEventListener('mouseover',show);
            dom_btn.addEventListener('mouseout',hide);

            const box = document.querySelector('#box');
            box.style.animationdirection= 'reverse';
 
    </script>
</body>
</html>