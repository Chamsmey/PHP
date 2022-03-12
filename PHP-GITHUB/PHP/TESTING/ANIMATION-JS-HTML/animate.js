




var box = document.getElementsByClassName('child');


box.animate(
    [{transform:'scale(1)',background:'red',opacity:1,offset:0}
],{
    duration:2000,
    easing:'ease-in-out',
    delay:10,
    iterations:Infinity,
    direction: 'alternate',
    fill:'forwards'

})

console.log(box);
