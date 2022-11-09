/**
 * Created by lishaoxun on 2017/9/20.
 */
$(function () {
    var video = document.querySelector('#v1');

    //首页轮播
    new Swiper('.main',{
        effect:'coverflow',
        slidesPerView: 1.5,
        centeredSlides: true,
        autoplay:800,
        coverflow: {
            rotate: 80,
            stretch: 70,
            depth: 1,
            modifier: 1,
            slideShadows : false
        },
        onInit: function(){
            //Swiper初始化了
            console.log('首页轮播初始化完毕');
        }
    });

    function swiperinit() {
        //殊荣轮播
        var sr = new Swiper('.shuronglbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.shuronglbt').hide();
                console.log('殊荣初始化');
            }
        });
        //陪伴成长
        var pbcz = new Swiper('.peibanchengzhanglbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.peibanchengzhanglbt').hide();
                console.log('陪伴成长初始化');
            }
        });
        //单人不单调
        var drbdd = new Swiper('.danrenbudandiaolbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.danrenbudandiaolbt').hide();
                console.log('单人不单调初始化');
            }
        });
        //完美空间
        var wmkj = new Swiper('.wanmeikongjianlbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.wanmeikongjianlbt').hide();
                console.log('完美空间初始化');
            }
        });
        //客房不空
        var kfbk = new Swiper('.kefangbukonglbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.kefangbukonglbt').hide();
                console.log('客房不空初始化');
            }
        });
        //子母密码
        var zmmm = new Swiper('.zimumimalbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.zimumimalbt').hide();
                console.log('子母密码初始化');
            }
        });
        //伴手礼
        var bsl = new Swiper('.banshoulilbt',{
            effect:'coverflow',
            slidesPerView: 1.5,
            centeredSlides: true,
            autoplay:800,
            coverflow: {
                rotate: 80,
                stretch: 70,
                depth: 1,
                modifier: 1,
                slideShadows : false
            },
            onInit: function(){
                //Swiper初始化了
                // $('.banshoulilbt').hide();
                console.log('伴手礼初始化');
            }
        });
    }

    function p0init() {
        $('.page0').addClass('show').siblings().removeClass('show');
    }

    function productsinit() {
        $('.products').addClass('show').siblings().removeClass('show');
    }

    //12轮播球往左
    $('.qiuctn .leftarrow').on('click',function () {
        var ul = $('.qiuctn>ul');
        var firstLi = $('.qiuctn>ul>li:nth-child(1)');
        firstLi.appendTo(ul);
        //整体左移
        $('.qiuctn .n0').removeClass('n0');
        $('.qiuctn .n1').removeClass('n1').addClass('n0');
        $('.qiuctn .n2').removeClass('n2').addClass('n1');
        $('.qiuctn .n3').removeClass('n3').addClass('n2');
        $('.qiuctn .n4').removeClass('n4').addClass('n3').next().addClass('n4');
        //切换上下
        changeupdown()
    });
    //12轮播球往右
    $('.qiuctn .rightarrow').on('click',function () {
        var ul = $('.qiuctn>ul');
        var lastLi = $('.qiuctn>ul>li:nth-child(12)');
        lastLi.prependTo(ul);
        //整体右移
        $('.qiuctn .n4').removeClass('n4');
        $('.qiuctn .n3').removeClass('n3').addClass('n4');
        $('.qiuctn .n2').removeClass('n2').addClass('n3');
        $('.qiuctn .n1').removeClass('n1').addClass('n2');
        $('.qiuctn .n0').removeClass('n0').addClass('n1').prev().addClass('n0');
        //切换上下
        changeupdown()
    });

    //12轮播球滑动控制
    var startx,
        endx;
    $('.qiuctn').on('touchstart',function (e) {
        e.stopPropagation();
        startx = e.originalEvent.touches[0].pageX;
    }).on('touchmove',function (e) {
        e.preventDefault();
    }).on('touchend',function (e) {
        e.stopPropagation();
        endx = e.originalEvent.changedTouches[0].pageX;
        if(endx - startx >50){
            $('.qiuctn .rightarrow').trigger('click');
        }
        if(startx - endx >50){
            $('.qiuctn .leftarrow').trigger('click');
        }
    });

    function changeupdown() {
        playvideo();
        var currentIdx = $('.qiuctn li.n2').attr('data-index');
        console.log(currentIdx);
        switch (currentIdx){
            case '0':     //生来如此
                $('.container .uctn>.video1').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.shenglairuci').show().siblings().hide();
                break;
            case '1':
                //纯棉接触
                $('.container .uctn>.video1').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.chunmianjiechu').show().siblings().hide();
                break;
            case '2':     //殊荣
                video.pause();
                $('.container .uctn>.shuronglbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.shurong').show().siblings().hide();
                break;
            case '3':     //创作
                $('.container .uctn>.video1').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.chuangzuo').show().siblings().hide();
                break;
            case '4'://灵感
                $('.container .uctn>.video1').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.lingan').show().siblings().hide();
                break;
            case '5':     //精雕细琢
                $('.container .uctn>.video1').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.jingdiaoxizhuo').show().siblings().hide();
                break;
            case '6':     //伴手礼
                video.pause();
                $('.container .uctn>.banshoulilbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.banshouli').show().siblings().hide();
                break;
            case '7':     //单人不单调
                video.pause();
                $('.container .uctn>.danrenbudandiaolbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.danrenbudandiao').show().siblings().hide();
                break;
            case '8':     //客房不空
                video.pause();
                $('.container .uctn>.kefangbukonglbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.kefangbukong').show().siblings().hide();
                break;
            case '9':     //子母密码
                video.pause();
                $('.container .uctn>.zimumimalbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.zimumima').show().siblings().hide();
                break;
            case '10'://陪伴成长
                video.pause();
                $('.container .uctn>.peibanchengzhanglbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.peibanchengzhang').show().siblings().hide();
                break;
            case '11'://完美空间
                video.pause();
                $('.container .uctn>.wanmeikongjianlbt').addClass('show').siblings().removeClass('show');
                $('.container .bctn>.wanmeikongjian').show().siblings().hide();
                break;
        }
    }

    function pmaininit() {
        $('.container').addClass('show').siblings().removeClass('show');
        //滚到顶部
        window.scrollTo(0,0);
        //显示精雕细琢
        changeupdown();
        swiperinit();
    }
    function playvideo() {
        var currentIdx = $('.qiuctn li.n2').attr('data-index');
        //隐藏播放按钮
        $('.video1 .playbtn').fadeOut(200);
        //设置路径
        switch (currentIdx){
            case '5' :    //精雕细琢2
                video.src = 'videos/jingdiaoxizhuo2.mp4';
                break;
            case '3' :   //创作2
                video.src = 'videos/chuangzuo2.mp4';
                break;
            case '1' :  //纯棉接触2
                video.src = 'videos/chunmianjiechu2.mp4';
                break;
            case '0' :  //生来如此2
                video.src = 'videos/shenglairuci2.mp4';
                break;
            case '4':  //灵感
                video.src = 'videos/linggan.mp4';
                break;
        }
        //渲染
        var canvas = document.querySelector('.video1>canvas');
        var ctx = canvas.getContext('2d');
        canvas.width = 960;
        canvas.height = 540;
        function videoplay() {
            function render() {
                ctx.drawImage(video,0,0);
                if(!video.paused){
                    window.requestAnimationFrame(render);
                }
            }
            video.play();
            render();
        }
        videoplay();
    }
    p0init();

    //p0点击视频播放
    $('.page0 .playbtn').on('click',function () {
        $(this).fadeOut(200);
        var canvas = document.querySelector('.video0>canvas');
        var ctx = canvas.getContext('2d');
        canvas.width = 960;
        canvas.height = 540;
        function videoplay() {
            function render() {
                ctx.drawImage(video,0,0);
                if(!video.paused){
                    window.requestAnimationFrame(render);
                }
            }
            video.play();
            render();
        }
        videoplay();
    });

    //p0点击视频停止播放
    $('.video0>canvas').on('click',function () {
        if(!video.paused){
            video.pause();
            video.currentTime = 0;
            $('.page0 .playbtn').fadeIn(200);
        }
    });

    //p0上滑
    var starty,
        nowy,
        endy;
    $('.page0').on('touchstart',function (e) {
        starty = e.originalEvent.touches[0].pageY;
    }).on('touchmove',function (e) {
        nowy = e.originalEvent.touches[0].pageY;
        if(nowy-starty <0){
            var diff = nowy-starty;
            $('.page0').css('transform','translateY('+diff/2+'%)');
        }
    }).on('touchend',function (e) {
        endy = e.originalEvent.changedTouches[0].pageY;
        if(starty-endy>100){
            video.pause();
            //进入12轮播页
            pmaininit();
        }else{
            $('.page0').css('transform','translateY(0)');
        }
    });

    //container内视频控制
    $('.video1 .playbtn').on('click',function () {
        playlinganvideo();
    });
    $('.video1>canvas').on('click',function () {
        if(!video.paused){
            video.pause();
            video.currentTime = 0;
            $('.video1 .playbtn').fadeIn(200);
        }
    });

    //container内点击vr按钮  跳到产品页面
    $('.container .btns .b3').on('click',function () {
        productsinit();
        if(!video.paused){
            video.pause();
            video.currentTime = 0;
            $('.video1 .playbtn').fadeIn(200);
        }
    });

    //产品页跳vr
    $('.products li>div>div').on('click',function () {
        var cls = this.className;
        console.log(cls);
        switch (cls){
            case 'pd1':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M90Y116H/show';
                break;
            case 'pd2':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M90725O7/show';
                break;
            case 'pd4':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M8YLLI86/show';
                break;
            case 'pd5':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M9032DVE/show';
                break;
            case 'pd7':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M8YE1YL2/show';
                break;
            case 'pd8':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M8YU8YAM/show';
                break;
            case 'pd10':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M8YVI0PS/show';
                break;
            case 'pd11':
                window.location.href = 'https://yun.kujiale.com/design/3FO4M9CX7O6D/show';
                break;
        }
    });

    //产品页面点击返回
    $('.products .backbtn').on('click',function () {
        pmaininit();
    });

    //点击升级儿童房
    $('.btns .b2').on('click',function () {
        window.location.href = 'https://ulbzhs.fanqier.com/f/9movte';
    });
    //点击前往官方微信
    $('.btns .b1').on('click',function () {
        $('.wxpopup').show();
    });
    //关闭公众号弹层
    $('.wxpopup').on('click',function () {
        $(this).hide();
    });

    //伴手礼点击跳转链接
    $('.bctn .banshouli').on('click','.d2,.d3',function () {
        window.location.href = 'http://t11.ltd/QtQ_';
    })
});