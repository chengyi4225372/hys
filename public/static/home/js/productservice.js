window.onload = function(){


    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;
        console.log(top)
        console.log(document.body.scrollTop);
        console.log(document.documentElement.scrollTop);

        if (top >= 400) {
            let goTop = document.getElementById('goTop')
            goTop.style.display = "block"

            // console.log(goTop);
            var timer = null;
            goTop.onclick = function () {
                cancelAnimationFrame(timer);
                //获取当前毫秒数
                var startTime = +new Date();
                //获取当前页面的滚动高度
                var b = document.body.scrollTop || document.documentElement.scrollTop;
                var d = 500;
                var c = b;
                timer = requestAnimationFrame(function func() {
                    var t = d - Math.max(0, startTime - (+new Date()) + d);
                    document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
                    timer = requestAnimationFrame(func);
                    if (t == d) {
                        cancelAnimationFrame(timer);
                    }
                });
            }
        } else if (top < 400) {

            // 返回顶部样式
            let goTop = document.getElementById('goTop')
            goTop.style.display = "none"

        }
    }

} 
    
$(function(){
    
    $('.btn3').mousedown(function(){
       $(this).addClass('active')
    }).mouseup(function(){
        $(this).removeClass('active')
    })
    $('.btn3').mouseover(function(){
       $(this).addClass('active')
    }).mouseleave(function(){
        $(this).removeClass('active')
    })


    $('.btn1').mouseover(function(){
       $(this).addClass('actLittleBtn')
    }).mouseleave(function(){
        $(this).removeClass('actLittleBtn')
    })
    $('.btn2').mouseover(function(){
       $(this).addClass('actLittleBtn')
    }).mouseleave(function(){
        $(this).removeClass('actLittleBtn')
    })

    $('.btn1').mousedown(function(){
       $(this).addClass('actLittleBtn')
    }).mouseup(function(){
        $(this).removeClass('actLittleBtn')
    })
    $('.btn2').mousedown(function(){
       $(this).addClass('actLittleBtn')
    }).mouseup(function(){
        $(this).removeClass('actLittleBtn')
    })
    
    
})