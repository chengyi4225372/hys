window.onload = function () {

    // 税务问题盒子切换
    var imgList = document.querySelectorAll('.taxproblems-right .taxproblems-right-img img');
    var imgList2 = document.querySelectorAll('.taxproblems-right .taxproblems-right-page img');
    var pageList = document.querySelectorAll('.taxproblems-right .taxproblems-right-page span');
    var leftBtn = document.querySelector('.taxproblems-right .taxproblems-right-page .leftBtn');
    var righttBtn = document.querySelector('.taxproblems-right .taxproblems-right-page .rightBtn');

    // console.log(imgList, pageList, leftBtn, righttBtn)
    leftBtn.onclick = function () {
        imgList[1].classList.remove('active-img');
        imgList2[1].classList.remove('active-img');
        imgList2[3].classList.remove('active-img');
        pageList[1].classList.remove('active-page');

        imgList[0].classList.add('active-img');
        imgList2[0].classList.add('active-img');
        imgList2[2].classList.add('active-img');
        pageList[0].classList.add('active-page');
    };
    righttBtn.onclick = function () {
        imgList[0].classList.remove('active-img');
        imgList2[0].classList.remove('active-img');
        imgList2[2].classList.remove('active-img');
        pageList[0].classList.remove('active-page');

        imgList[1].classList.add('active-img');
        imgList2[1].classList.add('active-img');
        imgList2[3].classList.add('active-img');
        pageList[1].classList.add('active-page');
    };


    // 税务筹划解决方案盒子切换
    var oneDivList = document.querySelectorAll('.tax-planning-solutions-content-one .tax-planning-solutions-content-item');
    var twoDivList = document.querySelectorAll('.tax-planning-solutions-content-two .tax-planning-solutions-content-item');
    console.log(oneDivList, twoDivList);

    for (var i = 0; i < oneDivList.length; i++) {
        oneDivList[i].onmouseover = function () {
            var activeShade = document.querySelectorAll('.content-active-shade')[0]
            for (var j = 0; j < oneDivList.length; j++) {
                oneDivList[j].classList.remove('content-active')
                // oneDivList[j].classList.remove('content-active-shade')
            }
            activeShade.classList.remove('content-active-shade')
            this.classList.add('content-active');
            this.classList.add('content-active-shade');

        }
    }
    for (var i = 0; i < twoDivList.length; i++) {
        twoDivList[i].onmouseover = function () {
            var activeShade = document.querySelectorAll('.content-active-shade')[0]
            for (var j = 0; j < twoDivList.length; j++) {
                twoDivList[j].classList.remove('content-active')
                // twoDivList[j].classList.remove('content-active-shade')
            }
            activeShade.classList.remove('content-active-shade')
            this.classList.add('content-active');
            this.classList.add('content-active-shade');
        }
    }

    // 惠优税优势轮播图

    // var swiper = document.querySelector('.preferential-taxadvantage-content-imgs')
    var item = document.querySelectorAll('.preferential-taxadvantage-content-icon ul li')
    var ul = document.querySelector('.preferential-taxadvantage-content-imgs ul')
    var ali = document.querySelectorAll('.preferential-taxadvantage-content-imgs ul li')
    var pre = document.querySelector('.preferential-taxadvantage-content-imgs .fouse-left')
    var next = document.querySelector('.preferential-taxadvantage-content-imgs .fouse-right')
    var ptcts = document.querySelectorAll('.preferential-taxadvantage-content-title')
    var imgW = ali[0].offsetWidth//需要window.onload
    var index = 1//计算滚动到哪张图片
    var isTransitioned = true//判断动画是否已完成


    //克隆第一张图片，添加到图片队列的最后面
    var cloneLi = ali[0].cloneNode(true);
    ul.appendChild(cloneLi);
    //克隆最后一张图片，添加到图片队列的最前面
    var cloneLastLi = ali[ali.length - 1].cloneNode(true);
    ul.insertBefore(cloneLastLi, ali[0]);

    //点击右边按钮
    next.onclick = function () {
        if (isTransitioned) {
            index++;//先++再设置
            move();
            fenyeq(index);
        }
    }


    //初始化图片队列：
    ul.style.transform = "translateX(" + (-imgW * index) + "px)";
    //点击左边按钮
    pre.onclick = function () {
        if (isTransitioned) {
            index--;
            move();
            fenyeq(index);
        }
    }

    // 自动播放
    // setInterval(function () {
    //     if (isTransitioned) {
    //         index++;
    //         move();
    //         fenyeq(index);
    //     }
    // }, 4000)

    //监听动画结束
    ul.addEventListener("transitionend", function () {
        if (index == ali.length + 1) {
            index = 1;
            ul.classList.toggle("transi");
            ul.style.transform = "translateX(" + (-imgW * index) + "px)";
        }
        if (index == 0) {
            index = ali.length;
            ul.classList.toggle("transi");
            ul.style.transform = "translateX(" + (-imgW * index) + "px)";
        }
        isTransitioned = true;//每次动画结束都判断
    })

    //第一个小圆点添加样式
    item[0].classList.add('fousess');
    //给分页器添加点击事件
    for (let j = 0; j < item.length; j++) {
        item[j].onclick = function (e) {
            for (var q = 0; q < item.length; q++) {
                item[q].classList.remove('fousess');
            }
            e.target.classList.add('fousess');
            // console.log(j);
            // index = j + 1;
            for (let h = 0; h < ptcts.length; h++) {
                ptcts[h].classList.remove('ptct-active')
            }
            ptcts[Number(e.target.id)].classList.add('ptct-active')
            index = Number(e.target.id) + 1;
            // console.log(index, 222);
            ul.classList.add('transi');
            ul.style.transform = "translateX(" + (-imgW * index) + "px)";
        }
    }
    //点击左右按钮分页器跟随
    function fenyeq(index) {
        for (var k = 0; k < item.length; k++) {
            item[k].classList.remove('fousess');
        }
        index = index - 1;
        index = index == item.length ? 0 : index;//左按钮边界
        index = index < 0 ? item.length - 1 : index;//右按钮边界
        item[index].classList.add('fousess');
    }

    function move() {
        ul.classList.add("transi");
        ul.style.transform = "translateX(" + (-imgW * index) + "px)";
        isTransitioned = false;
    }

    // 返回顶部
    window.onscroll = function () {
        var top = document.body.scrollTop || document.documentElement.scrollTop;
        // console.log(top);
        // console.log(document.body.scrollTop);
        // console.log(document.documentElement.scrollTop);

        if (top >= 1080) {
            var goTop = document.getElementById('goTop');
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
            var goTop = document.getElementById('goTop');
            goTop.style.display = "none";

        }
    }

    // 产业园区切换
    var divListLeft = document.querySelectorAll(".map-box-center-item");
    var divListRight = document.querySelectorAll(".map-box-right-yuanqu-item");
    var last = document.querySelector('.map-box-right-morebtn');
    var i = 1;
    last.onclick = function () {
        // console.log(i, divListLeft.length - 1);
        if (i == divListLeft.length) {
            i = 0;
        };
        var actvieDivLeft = document.querySelectorAll('.map-box-center .active-map')[0];
        var actvieDivRight = document.querySelectorAll('.map-box-right .active-map')[0];
        actvieDivLeft.classList.remove('active-map');
        actvieDivRight.classList.remove('active-map');
        divListLeft[i].classList.add('active-map');
        divListRight[i].classList.add('active-map');
        i++;
    };
};

$(function () {
    /* 标题上方横线和标题一样宽 */
    $('.preferential-icon div').eq(0).width($('.hysTitle').width())
    $('.tax-planning-solutions div').eq(0).width($('.caseTitle').width())
    $('.preferential-taxadvantage div').eq(0).width($('.advanTitle').width())
    $('.selected-park div').eq(0).width($('.partTitle').width())
    $('.partner-title div').eq(0).width($('.coTitle').width())
    $('.taxproblems-right').eq(0).width($('.taxIssues').width())

    $(window).resize(function() {
        $('.preferential-icon div').eq(0).width($('.hysTitle').width())
    $('.tax-planning-solutions div').eq(0).width($('.caseTitle').width())
    $('.preferential-taxadvantage div').eq(0).width($('.advanTitle').width())
    $('.selected-park div').eq(0).width($('.partTitle').width())
    $('.partner-title div').eq(0).width($('.coTitle').width())
    $('.taxproblems-right').eq(0).width($('.taxIssues').width())
      });



         /* 客户案例按钮效果 */
    $('.getCase').mouseover(function(){
        // alert(111)
        $(this).addClass('activeGet')
    }).mouseleave(function(){
        $(this).removeClass('activeGet')
    })
    $('.getCase').mousedown(function(){
        $(this).addClass('activeGet')
    }).mouseup(function(){
        $(this).removeClass('activeGet')
    })

})