window.onload = function () {

    // 税务问题盒子切换
    let imgList = document.querySelectorAll('.taxproblems-right .taxproblems-right-img img');
    let imgList2 = document.querySelectorAll('.taxproblems-right .taxproblems-right-page img');
    let pageList = document.querySelectorAll('.taxproblems-right .taxproblems-right-page span');
    let leftBtn = document.querySelector('.taxproblems-right .taxproblems-right-page .leftBtn');
    let righttBtn = document.querySelector('.taxproblems-right .taxproblems-right-page .rightBtn');

    // console.log(imgList, pageList, leftBtn, righttBtn)
    leftBtn.onclick = function () {
        imgList[1].classList.remove('active-img');
        imgList2[0].classList.remove('active-img');
        imgList2[2].classList.remove('active-img');
        pageList[1].classList.remove('active-page');

        imgList[0].classList.add('active-img');
        imgList2[1].classList.add('active-img');
        imgList2[3].classList.add('active-img');
        pageList[0].classList.add('active-page');
    };
    righttBtn.onclick = function () {
        imgList[0].classList.remove('active-img');
        imgList2[1].classList.remove('active-img');
        imgList2[3].classList.remove('active-img');
        pageList[0].classList.remove('active-page');

        imgList[1].classList.add('active-img');
        imgList2[0].classList.add('active-img');
        imgList2[2].classList.add('active-img');
        pageList[1].classList.add('active-page');
    };


    // 税务筹划解决方案盒子切换
    let oneDivList = document.querySelectorAll('.tax-planning-solutions-content-one .tax-planning-solutions-content-item');
    let twoDivList = document.querySelectorAll('.tax-planning-solutions-content-two .tax-planning-solutions-content-item');
    console.log(oneDivList, twoDivList);

    // for(let i=0;i<oneDivList.length;i++){
    //     oneDivList[i].onmouseover = function(){
    //         for(let i=0;i<oneDivList.length;i++){
    //             oneDivList[i].classList.remove('content-active')
    //         }
    //         this.classList.add('content-active')
    //     }
    // }

    // for(let i=0;i<twoDivList.length;i++){
    //     twoDivList[i].onmouseover = function(){
    //         for(let i=0;i<twoDivList.length;i++){
    //             twoDivList[i].classList.remove('content-active')
    //         }
    //         this.classList.add('content-active')
    //     }
    // }

    oneDivList.forEach(item => {
        item.onmouseover = function () {
            oneDivList.forEach(item => {
                item.classList.remove('content-active')
            });
            this.classList.add('content-active');
        }
    });

    twoDivList.forEach(item => {
        item.onmouseover = function () {
            twoDivList.forEach(item => {
                item.classList.remove('content-active')
            });
            this.classList.add('content-active');

        };
    });

    // 惠优税优势轮播图

    let box = document.querySelector('.preferential-taxadvantage-content-imgs');
    let dots = document.querySelectorAll('.preferential-taxadvantage-content-icon ul li');
    let focus = document.querySelector('.preferential-taxadvantage-content-imgs ul');
    let lis = document.querySelectorAll('.preferential-taxadvantage-content-imgs ul li');
    let left = document.querySelector('.preferential-taxadvantage-content-imgs .fouse-left');
    let right = document.querySelector('.preferential-taxadvantage-content-imgs .fouse-right');


    // 动画函数

    function animate(obj, time, target, callback) {
        clearInterval(obj.timer);
        obj.timer = setInterval(function () {
            var step = (target - obj.offsetLeft) / 10;
            step = step > 0 ? Math.ceil(step) : Math.floor(step);
            if (obj.offsetLeft == target) {
                clearInterval(obj.timer);
                callback && callback();
            }
            obj.style.left = obj.offsetLeft + step + 'px';
        }, time);
    };


    box.onmouseover=function () {
        clearInterval(timer);
        timer = null;
    }
    box.onmouseout=function () {
        timer = setInterval(function () {
            right.click();
        }, 2000);
    }

    // 点击icon可以切换图片
    for (let i = 0; i < dots.length; i++) {
        dots[i].setAttribute('data-index', i)
        dots[i].onclick=function () {
            for (var i = 0; i < dots.length; i++) {
                dots[i].className = "";
            }
            this.className = "fousess";

            var focusWidth = lis[0].offsetWidth; //
            var index = this.getAttribute('data-index');
            animate(focus, 15, -index * focusWidth);
            num = curcor = index;
        }
    }

    var lili = lis[0].cloneNode(true);
    focus.appendChild(lili);

    var num = 0;
    var curcor = 0;
    var flag = true;
    right.onclick=function () {
        if (flag) {
            flag = false;
            if (num == lis.length) {
                focus.style.left = 0;
                num = 0;
            };
            num++
            animate(focus, 15, -num * lis[0].offsetWidth, function () {
                flag = true;
            });

            curcor++
            for (var i = 0; i < dots.length; i++) {
                dots[i].className = "";
            }
            if (curcor == dots.length) {
                curcor = 0;
            };
            dots[curcor].className = "fousess";
        }
    }

    left.onclick=function () {
        if (flag) {
            flag = false;
            if (num == 0) {
                num = lis.length;
                focus.style.left = -num * lis[0].offsetWidth + 'px';
            };
            num--
            animate(focus, 15, -num * lis[0].offsetWidth, function () {
                flag = true;
            })
            curcor--
            for (var i = 0; i < dots.length; i++) {
                dots[i].className = "";
            }
            if (curcor < 0) {
                curcor = dots.length - 1;
            };
            dots[curcor].className = "fousess";

        };
    };


    var timer = setInterval(function () {
        right.click();
    }, 2000)



    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;
        console.log(top);
        console.log(document.body.scrollTop);
        console.log(document.documentElement.scrollTop);

        if (top >= 1080) {
            let goTop = document.getElementById('goTop');
            goTop.style.display = "block";

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
                    };
                });
            }
        } else if (top < 1080) {

            // 返回顶部样式
            let goTop = document.getElementById('goTop');
            goTop.style.display = "none";

        }
    }

    // 产业园区切换
    let divListLeft = document.querySelectorAll(".map-box-center-item");
    let divListRight = document.querySelectorAll(".map-box-right-yuanqu-item");
    let last = document.querySelector('.map-box-right-morebtn');
    let i = 1;
    last.onclick = function () {
        // console.log(i, divListLeft.length - 1);
        if (i == divListLeft.length) {
            i = 0;
        };
        let actvieDivLeft = document.querySelectorAll('.map-box-center .active-map')[0];
        let actvieDivRight = document.querySelectorAll('.map-box-right .active-map')[0];
        actvieDivLeft.classList.remove('active-map');
        actvieDivRight.classList.remove('active-map');
        divListLeft[i].classList.add('active-map');
        divListRight[i].classList.add('active-map');
        i++;
    };
};