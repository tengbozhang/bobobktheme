    <style amp-custom>
        html,body,h1,h2,h3,h4,h5,h6,div,dl,dt,dd,ul,ol,li,p,blockquote,pre,hr,figure,table,caption,th,td,form,fieldset,legend,input,button,textarea,menu{margin:0;padding:0;}

        header,footer,section,article,aside,nav,hgroup,address,figure,figcaption,menu,details{display:block;}
        table{border-collapse:collapse;border-spacing:0;}
        caption,th{text-align:left;font-weight:normal;}
        html,body,fieldset,img,iframe,abbr{border:0;}
        i,cite,em,var,address,dfn{font-style:normal;}
        [hidefocus],summary{outline:0;}
        li{list-style:none;}
        h1,h2,h3,h4,h5,h6,small{font-size:100%;}
        sup,sub{font-size:83%;}
        pre,code,kbd,samp{font-family:inherit;}
        q:before,q:after{content:none;}
        textarea{overflow:auto;resize:none;}
        label,summary{cursor:default;}
        a,button{cursor:pointer;color:#333}
        h1,h2,h3,h4,h5,h6,em,strong,b{font-weight:bold;}
        del,ins,u,s,a,a:hover{text-decoration:none;}
        body,textarea,input,button,select,keygen,legend{    font-size-adjust: none;    -webkit-text-size-adjust: none;    font-size: 16px ;font-family:"微软雅黑";box-sizing: border-box;   -webkit-box-sizing: border-box;}
        body{background:#f4f4f4;margin:0 auto;max-width: 640px;}


        .f-flex{display: -webkit-flex;display: -webkit-box; display: -moz-box; display: -ms-flexbox; display: flex;}
        .f-inline-block{display:inline-block;}
        .f-pd-2{padding-left:1.2%;padding-right:1.2%;}
        .f-mr-2{margin-left:1.2%;margin-right:1.2%;}
        .f-mr-top{margin-top:1.2%}
        .f-mr-bottom{margin-bottom:1.2%}
        .f-mr-right{margin-right:10px}
        .f-mr-left{margin-left:10px}
        .f-sp-2{width: 50%;}
        .f-bg-fff{background-color: #ffffff;}
        .f-sp-3{width: 33.33%;text-align: center;}
        .f-sp-4{width: 25%;text-align: center;}
        .f-sp-5{width: 20%;text-align: center;}
        .f-bd-3{border-radius:3px;overflow:hidden;}
        .f-bd-5{border-radius:5px;overflow:hidden;}
        .f-333{color:#333}
        .f-center{text-align:center}
        .f-fl{float: left;}
        .f-fr{float: right;}
        .f-show{display:block}
        .f-hide{display:none;}
        .f-overhide{overflow: hidden;}
        .f-border-top{border-radius: 5px 5px 0 0 ;overflow:hidden;}
        .f-elips{overflow: hidden;text-overflow:ellipsis;white-space: nowrap;}
        .f-clear:after{clear:both;content:".";display:block;margin:0;padding:0;font-size:0;height:0;line-height:0;overflow:hidden;}
        .f-bd-top-dot{border-top: 1px dotted #ccc;}
        .f-bd-bottom-dot{border-bottom: 1px dotted #ccc;}
        .f-img-blur{-webkit-filter:blur(32px);-moz-filter:blur(32px);-ms-filter:blur(32px);-o-filter:blur(32px);filter:blur(32px);-webkit-transition:all ease .2s;-moz-transition:all ease .2s;-ms-transition:all ease .2s;-o-transition:all ease .2s;transition:all ease .2s}
        /*head*/
        .g-head{height: 50px;background-color: #F85D90;}
        .u-logo{background-image: url(/wp-content/themes/mobile/sprite.png);background-repeat: no-repeat;}
        .m-hd{line-height: 50px;color:#fff;}
        .u-logo,.u-hdnav{width: 90px;height: 100%;display: block;}
        .u-logo{background-size: 120px 614px; background-position: 15px -359px; text-indent: -9999px;}
        .u-title{flex-grow:1;text-align: center;color:#fff}
        .u-hdnav{border-left: 1px solid #EA4179;text-align: center;font-size:1rem;}
        .u-hdnav:after{content: ''; width:0px;height:0px;border-left:6px solid transparent;border-right:6px solid transparent;border-top:11px solid #fff;font-size:0px;line-height:0px;}
        .u-logo a {color:#fff;}

        /*page-nav*/
        .m-chd{flex-wrap:wrap;background-color: #F85D90;border-top:1px solid #EA4179;}
        .u-hnav-l{line-height: 45px;color:#fff;}
        .u-hnav-l:hover{background-color: #EA4179;}
        .g-page-nav{line-height: 45px;background-color: #e7e6e6;box-sizing: border-box;}
        .u-pnav-l{display: inline-block;border-bottom: 2px solid #e7e6e6;font-size:1rem;}
        .u-pnav-l.on{color:#f4a100;border-bottom: 2px solid #f4a100;}
        /*tag*/
        .m-tag{ background-color: #fff; flex-wrap:wrap;padding:1% 0;}
        .u-t-unit{      line-height: 2rem;}
        /*index-首页*/
        .m-index-head{padding-left:20px;padding-right: 20px;justify-content: space-between;align-items: center;height: 50px;}
        .u-index-search,.u-index-user,.u-index-logo,.nav-ico,.u-index-hot{background-image: url(/wp-content/themes/mobile/public.png);background-repeat: no-repeat;background-size: 110px 440px;}
        .u-index-search{width: 20px;height: 20px;display: block;background-size: 110px 440px;background-position: -90px -225px}
        .u-index-user{width: 20px;height: 24px;display: block;background-size: 110px 440px;background-position: -90px -250px}
        .u-index-logo{width: 130px;height: 24px;display: block;background-size: 178px 710px;background-position: 0 -432px;}

        /*img-nav*/
        .img-nav{padding:20px 0 0;margin:0 1.2%; text-align:center;}
        .index-ico{ display: -webkit-flex; display: -webkit-box;  display: -moz-box;  display: -ms-flexbox; display: flex;  flex-wrap:wrap;}
        .img-ico{display:inline-block; width:25%;padding-bottom: 20px;font-size:.8rem;}
        .img-ico span{display: block;margin-top:4px;}
        .nav-ico{width:51px;height:51px;margin:auto;}
        .img-ico-qm{background-position:-59px 0;}
        .img-ico-tx{background-position:  0 -55px ;}
        .img-ico-pf{background-position: -59px -55px ;}
        .img-ico-tp{background-position: 0 -112px ;}
        .img-ico-ss{background-position: -59px -112px ;}
        .img-ico-rz{background-position: 0 -167px ;}
        .img-ico-fz{background-position: -59px -112px ;}

        /*m-index-download*/
        .m-index-download{text-align:center;font-size:.8rem;padding: 15px 0;}
        .u-index-hot{display:inline-block;width:20px;height:20px;background-size: 138px 550px;background-position: -58px -276px;vertical-align: middle;    margin-top: -10px;}
        .m-index-download span{margin-left:4px;}

        /*navButton*/
        .navButton{    margin-top: 15px;height: 40px;justify-content:space-between;}
        .navButton li{width:200px;height: 32px;line-height: 32px;text-align:center;color:#666;margin: 0 4px;cursor: pointer;box-sizing:border-box;border-radius:3px;}
        .navButton li.on{background-color:#EA4179;color:#fff;}
        /*index-more*/
        .indexMore:hover{ background-color:#aadcf8; color:#038cda;}
        .indexMore {display: block;text-align: center;padding: 10px;border-radius:5px;background-color: #fff;}


        /*page*/
        .m-page li{display: inline-block;width: 49%;text-align: center;background-color: #f4a100;border-radius: 5px;}
        .m-page li:last-child{float:right;margin:0;}
        .m-page a:hover { background-color:#C59B51; border-radius:5px;}
        .m-page a,.m-page span{display:inline-block; padding:10px 0;width:100%;}
        .m-page a {color:#fff;}
        .m-page span { color:#FDDD9F;}
        /*foot*/
        .g-footer{width: 100%;}
        .m-search{padding:12px 10px;flex-wrap: nowrap;background-color: #fff;overflow: initial;}
        .m-search-form{width: 100%;}
        .u-arrow,.u-serch-subtn,.u-bnav-home{background-image: url(/wp-content/themes/mobile/sprite.png);background-repeat: no-repeat;}
        .u-serch-side{position:relative;width: 20%;text-align:center;color:#666;font-size: .8rem;}
        .u-serch-main{width: 80%;}
        .u-arrow{width: 20px;height: 20px;vertical-align: middle;display: inline-block;background-size: 24px 155px; background-position: -2px -64px; margin-left: 4px;}
        .u-class-list{position: absolute;left: 0;bottom:40px;width: 100%;background-color: #404a54;color:#fff;border-radius: 4px;overflow: hidden;display: none;}
        .u-class-list li{line-height: 25px; cursor: pointer;}

        .u-serch-main input{box-sizing: border-box;display: inline-block;outline: 0;border:0;height:20px;}
        .u-serch-input{width: 88%;}
        .u-serch-subtn{width: 10%;text-indent: -9999px;background: none;background-repeat: no-repeat;background-image: url(/wp-content/themes/mobile/sprite.png);background-size: 20px 98px;background-position: 5px -20px;}
        .m-butnav{padding: 10px 15px;border-top:1px solid #f6f6f6;box-sizing: border-box;background-color: #fff;justify-content: space-between;font-size: .8rem;}
        .u-bnav-home{width: 45px;height: 45px;display: block;background-size: 45px 200px; background-position: 0 5px; margin-top: 8px;}
        .u-bnav-lt-m{flex-grow: 1;flex-wrap:wrap;padding: 0 1%;}
        .u-bnav-l{width: 25%;text-align:center;padding: 8px 0;box-sizing: border-box;display: block;}
        .u-bnav-app{height: 25px; line-height: 25px; border: 1px solid #666; border-radius: 5px; padding: 0 4px; margin-top: 20px; font-size: 0.7rem;}
        .m-footer{background-color: #404a54; width: 100%; padding: 5px 0;}
        .m-f-dec{color:#707982;text-align: center;font-size: .8rem;padding: 4px 0;}
        .u-declare{font-size: .7rem;}
        .u-f-li{color:#707982;}
        .u-f-li:nth-child(1){color:#95a0ac;}
        .u-dot{margin: 0 6px;}
        .m-footer a{color:inherit}
        /*app*/
        .m-app{width:100%;background-color:#fff;overflow:hidden;}
        .m-app amp-img{width: 100%}
        .u-app-logo{height:50px;display:block;vertical-align:top}
        .u-app-dec{display:block;height:50px;font-size:12px;margin-left:2%;box-sizing:border-box;flex-grow:1}
        .u-app-ver{margin-top:8px;display:block}
        .u-app-title{font-size:14px;color:#059a05;margin-top:4px}
        .u-app-download{text-align:center;font-size:14px;align-items:center}
        .u-app-open{display:inline-block;border:1px solid #059a05;padding:4px 10px;color:#059a05;border-radius:5px;text-decoration:none}
        .u-tzz-rec{border:1px solid #ff6666;color:#ff6666;}
        .f-font-f66{color:#ff6666}

        /*内容页app*/
        .m-page-app{border-top: 1px solid #424242;width: 100%;background: #2b2b2b;}
        .m-page-app span{color:#fff;}
        .m-page-app a{ display: block;  height: 40px; line-height: 36px;text-align:center;}
        .m-page-app amp-img{  width: 15%;  max-width: 24px;  vertical-align: middle;}
        .m-page-app span{  font-size: .9em;}


        /*签名网名列表*/
        .m-txt{background-color: #fff}
        .u-t-content{padding: 15px 0;margin:0 15px;line-height: 25px;}
        .u-t-content a{display:block}
        .u-t-info{justify-content: space-between;padding: 0 15px;line-height: 2.2rem;font-size: .7rem;}
        .u-t-txt{color:#807f7f;}
        /*图片类列表*/
        .g-piclist-container{display:flex;flex-wrap:wrap;padding:.6%;}
        .g-piclist-container li {width:50%;padding:.6%;box-sizing:border-box;}
        .m-tp-li{width:100%;box-sizing:border-box;padding: .6%;}
        @media only screen and (min-width: 600px){.m-tp-li{width:50%;}}
        .m-pic-list{background-color:#fff;border-radius: 3px;padding:15px 10px 5px;}
        .m-img-wrap{position: relative;}
        .m-img-wrap amp-img{width:100%;height:auto;}
        .m-imgLike-num{position: absolute;bottom: 10px;right:10px;font-weight:normal}
        /* .f-ab-bottom-tx{bottom: 70px;} */
        .u-imgLike-ico{display:inline-block;vertical-align:middle;margin-right: 0;width: 20px;height: 20px;    background-size: 42px;}
        .u-img-title{padding:4% 0;}
        .u-img-user-info{font-size: .75em;color: #807f7f;height:26px;line-height: 26px;justify-content: space-between;}
        /*推荐好评榜*/
        .g-txt-rec{background-color: #fff;padding: 1.2% 2.4%;}
        .u-txt-rec-title{color:#0af;font-size: 1rem;padding:2%;font-weight:normal;}
        .u-txt-rec-list{list-style: decimal inside;padding-bottom: 2%;}
        .u-txt-rec-list li{line-height: 40px;font-size: .8rem;display: flex;color:#666;}
        .u-txt-rec-list i{width: 4%;display: inline-block;height: 40px;vertical-align: top;}
        .u-txt-rec-list a{width: 94%;border-bottom: 1px solid #f4f4f4;display: inline-block;margin-left: 2%;}
        .u-txt-rec-list li:last-child a{border:none;}
        /*推荐精选*/
        .m-txt-recomend{background-color: #fff;padding: 1.2%;font-size: .8rem;}
        .u-rec-head{padding:2%;justify-content: space-between;font-size: .9rem;}
        .u-rec-title{color:#f4a100;font-size:1rem;}
        .u-rec-more{color:#aaa;    font-size: .8rem;}
        .u-rec-l{width:100%;padding: 1.2%;box-sizing: border-box;}
        .u-rec-list{flex-wrap: wrap;}
        .u-rec-link{background-color: #f5f5f5;display: block;padding: 8px;border-radius: 3px;overflow: hidden;color:#666;text-align: left;}
        .u-rec-link-dot:before{content: '';display: inline-block;width: 4px;height: 4px;background-color: #666;vertical-align: middle;margin-right: 7px;border-radius: 4px;}
        /*签名网名精选*/
        .m-jx-rec{      padding:0 2% ;  background-color: #fff;}
        .u-jx-wrap{padding: 4% 0;border-bottom: 1px dotted #ccc;}
        .u-jx-img{      width: 30%}
        .u-jx-img amp-img{width: 100%;display: block;}
        .u-jxrec-title{ color:#0af;}
        .u-jx-txt{padding-left: 2%;box-sizing: border-box;width: 70%}
        .u-jx-txtinfo{font-size: .8rem;line-height: 1rem;justify-content: space-between;}
        .u-jx-txt-user{line-height: 1.5rem;color:#807f7f;}
        /*签名网名推荐页按钮*/
        .u-rec-btn{display: inline-block; width: 49%;text-align: center; background-color: #f4a100; border-radius: 5px; color: #fff; padding: 10px 0; margin-top: 1.2%;}
        /*list-nav*/
        .f-bd-left{border-left: 1px solid #424242;}
        .m-list-nav{background: #2b2b2b;line-height: 45px;border-top: 1px solid #424242;color:#fff;justify-content: space-around;}
        .u-list-button{ text-align: center;display: block;width: 50%;box-sizing: border-box;}
        .u-list-button.on{color:#f4a100;}

        /*签名网名说说内容页*/
        .g-page-txt{background-color: #fff;}
        .m-txt-main{padding: 40px 15px 15px;background-color: #ebebeb;overflow: hidden;}
        .u-page-maintxt{font-size: 1.3em;line-height: 30px;display: inline;}
        .u-copybtn{outline: none;padding: 4px 40px;border:1px solid #ccc;border-radius: 4px;color:#aaa;  background-color: #ebebeb;margin-top:20px;font-size: .8rem;}
        .m-page-tags{line-height: 40px;margin: 0 10px;font-size: .8em;color: #606160;}
        .m-page-tags a{color: #0af;margin: 0 5px;}
        /*公用内容页样式*/
        .g-page-main{background-color: #fff;}
        .m-page-title{text-align: center; font-weight: bold; padding: 15px 0;}
        .m-page-main-img amp-img{width:100%}
        .g-page-main .info{font-size:12px; color: #999; text-align: center; height: 24px; line-height: 24px;border-bottom: 1px dotted #eee;padding-bottom: 5px;}
        .g-page-main .info span{padding:0px 5px;}

        /*精选内容页样式*/
        .u-jx-wx{text-align: center;font-size: .8rem;color:#606160;padding: 10px 0;margin:0 10px;}
        .f-jx-wxcolor{color:#008000;}
        .m-page-jxcont{line-height: 30px;padding-top:20px;}
        .m-page-jxcont p{margin-bottom: 10px;}
        .u-page-jx-more{text-align:center}
        .u-page-jx-more a{color: #0af;font-weight: bold;}
        /*头像内容页*/
        .m-page-tx-tabs{display: flex;justify-content: space-between;padding:1% 0;}
        .m-page-tx-tabmenu{display:flex;width: 50%;padding:0 1%;box-sizing: border-box;}
        .m-page-tx-tabmenu span{width: 50%;display: inline-block;text-align: center;border:1px solid #d3d3d3;cursor:pointer; letter-spacing: 6px;font-size: .8em;padding:2px 0;color:#d3d3d3;}
        .m-page-tx-tabmenu span:first-child{border-radius: 3px 0 0 3px;}
        .m-page-tx-tabmenu span:last-child{border-radius: 0 3px 3px 0;}
        .m-page-tx-tabmenu span.active{color:#fff;background-color: #d3d3d3;}
        .tx-box{padding:1%;box-sizing:border-box;}
        .tx-box amp-img{width:100%;display: block;}
        .m-page-txlist{padding: 2% 1.2% 3%;display:flex;flex-wrap:wrap}
        .imgBox{width: 100%;height: 100vh;margin:0 auto;text-align: center;position: relative;background-color:#000;}
        .round{border-radius: 50% ;overflow:hidden;}
        .square{border-radius: 6px;    overflow: hidden;}
        .big{ width: 50%;}
        .small{width:25%;}
        /*图片类*/
        .m-page-imglist{padding:0 20px;box-sizing:border-box;max-width:600px;margin:0 auto;}
        .m-page-imglist amp-img{width:100%;}
        /*分组*/
        .fz-mail{padding: 10px;display:flex}
        .fz-mail li{background: url(/static/arrow_group.gif) left center no-repeat; padding-left: 10px; font-size: 0.8em; margin-bottom: 0.6em; color: #333;}
        .fz-mail .firstul, .fz-mail .qlUl{width: 50%;}
        /*日志*/
        .m-page-rizhi{padding:30px 20px;line-height:30px;font-size:.8rem;}

        /*图片推荐*/
        .g-tupage-rec{background-color: #fff; -webkit-box-shadow: 1px 2px 1px #eee; -moz-box-shadow: 1px 2px 1px #eee; box-shadow: 1px 2px 1px #eee;}
        .u-tupage-title{padding:3.2%; font-size: 1rem; color:#0af}
        .m-tupage-list{display:flex;flex-wrap:wrap}
        .m-tupage-li{width:50%;box-sizing:border-box;padding-bottom:2%;}
        .m-tupage-li amp-img{width:100%;}
        .u-tupage-li-title{line-height:40px;}
        /*内容页用户信息*/
        .g-page-info{margin:0 10px; padding: 10px 0;display: flex;justify-content: space-between;}
        .m-page-user{display: flex;    color: #807f7f;font-size: .8rem;}
        .u-userhd{width:36px;border-radius:100%;}
        .u-userinfo{margin-left:30px;font-size: 12px;}
        /*内容页第三方推荐*/
        .m-public-third{margin: 0 1.2%; padding: 10px 0; background-color: #fff; border-radius: 4px; overflow: hidden; font-size:.8em;}
        @media only screen and (min-width: 375px){.public-third{font-size:1em;}}
        .m-public-third span{display: block; text-indent: 6em; font-size: .8em; font-color:#999; line-height: 2.5em;}
        .m-public-third i{color:#FE0202;}
        /*弹出框*/
        .TipLayer {font-size: 20px;color: #fff;text-align: center;position: fixed;z-index: 9999;bottom: 0;opacity: 0;background: #000;border: 3px #726a6a solid;padding: 10px 30px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;}
        .tip-move{animation:tipsmove 2s 1;-moz-animation:tipsmove 2s 1; /* Firefox */-webkit-animation:tipsmove 2s 1; /* Safari and Chrome */-o-animation:tipsmove 2s 1; /* Opera */}
        @keyframes tipsmove{0%{bottom: 0;opacity: 0;}50%{bottom : 30px;opacity: 1;}100%{bottom: -30px;opacity:0;}}
        /*精选内容页样式*/
        .ulImg{padding: 2% 1.2% 3%;}
        .tabs{padding: 0 1.2%;margin-top: 3px;}
        .tab_menu{width: 48%;padding: 1%;}
        .tab_but{display: inline-block;text-align: center;width: 48.6%;float: left;font-size: .8em;padding: 2px 0;letter-spacing: 6px;border: 1px solid #d3d3d3;color: #d3d3d3;}
        .zl{border-radius: 3px 0 0 3px;}
        .zr{border-left: none;border-radius: 0 3px 3px 0;}
        .on_act{background: #d3d3d3;color:#fff;border: 1px solid #d3d3d3;}
        .p_round{border-radius: 50%;}
        .l_round{border-radius: 6px;overflow: hidden;}
        .tb_new_tou{padding: 0 1.2% 3%;}
        .ulImg li,.tb_new_tou li{width: 49.45%; text-align: center;margin-bottom: 1.2%;}
        .imgBody p amp-img,.artBody amp-img {max-width: 100%;width:100%;}
        .ulImg li amp-img,.tb_new_tou li amp-img{width:100%;max-width:200px;vertical-align: top;}
        .pifuImg li amp-img {max-width:500px;}
        .artBody p {line-height: 25px;}
        .ydqw {width: 100px;height: 32px;margin: 5px auto;color: #0669bf;font-size: 17px;line-height: 32px;padding-left: 30px;cursor: pointer;}
        .ydqw i{width: 24px;height: 24px;float: left;margin-top: 4px;margin-right: 5px;}
        .txtList .txh1 {margin: 0 10px;text-align: center; font-weight: bold; padding: 10px 0 5px;}
        .txtList .info{font-size:12px; color: #999; text-align: center; height: 24px; line-height: 24px;border-bottom: 1px dotted #eee;padding-bottom: 5px;}
        .txtList .info span{padding:0px 5px;}
        .txtList .a_content{margin: 0 10px;text-align: left;}
        .txtList .wm_content,.txtList .tx_content,.txtList .tp_content{margin: 0 10px;text-align: center;}
        .txtList .a_content p,.txtList .wm_content p,.txtList .tx_content p,.txtList .tp_content p{line-height:28px;padding-bottom: 12px;clear:both;}
        .a_content h2{font-size: 18px;text-align: left;font-weight: bold;line-height: 31px;clear: both;color: #ff0000;margin:10px auto;}
        .txtList .a_content amp-img,.txtList .wm_content amp-img,.txtList .tp_content amp-img {width:300px;height:auto;}
        .txtList .tx_content amp-img{width:48%;height:auto;margin: 0 1% 15px;display:block; overflow:hidden;border-radius: 4px;float: left;}
        .tagsL{ margin: 0 10px; font-size: 12px; color: #606160; }
        .tagsL a{color: #0af;margin: 0 5px 10px; display: inline-block;}
        .pifuImg li { width:100%;text-align:center;}
        .con_pic{padding-top: 0;}
        .con_pic>li{width: 48%;padding: 1%;margin-bottom: 0;}
        .con_txt{padding:5px 10px;}
        .a_t{padding:0px 10px;}
        .a_m{overflow:hidden;clear:both;padding:10px 0px;}
        .atag{padding-left:5px; color: #606160; font-size: 14px;clear:both;text-align:left;}
        .atag a{color: #0af;margin:0px 5px;display: inline-block;}
        .fx{transition-duration: 0.5s;line-height: 28px;display: inline-block;width: 9px;height: 9px;border-bottom: 1px solid #ffffff;border-right: 1px solid #ffffff;transform: rotate(45deg);margin: 2px 2px 0px 5px;float: left;}
        .mianbaoxue{background:#fbfbfb;color:#999;padding:0 10px;border-bottom:1px solid #eee;color:#ff4444;margin-bottom:3px;}
        .mianbaoxue a{padding:0 5px;height:40px;line-height:40px;color:#ff4444;font-size:15px}
        .cl {*zoom:1;clear:both;}
        .cl:after{clear:both;content:".";display:block;margin:0;padding:0;font-size:0;height:0;line-height:0;overflow:hidden;}
        .megx_t{margin-bottom: 6px;overflow: hidden; border-radius: 4px;}
        .ztList {padding-top:10px;background-color: #fff;}
        .ztList a{ text-align: center;float: left;width: 25%;color: #606160;padding: 3px 0;margin-bottom: 5px;text-align:center;overflow:hidden; white-space:nowrap; overflow:hidden;}
        .ztList a.cur{color: #fff;background: #F85D90;    -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;}
        .moreup i{width:0px;height:0px;border-left:6px solid transparent;border-right:6px solid transparent;border-top:11px solid #909490;font-size:0px;line-height:0px;}
        .moreup i.shou{width:0px;height:0px;border-left:6px solid transparent;border-right:6px solid transparent;border-top:11px solid #909490;font-size:0px;line-height:0px;}
        .note-graceful-button{text-align:center}.note-graceful-button .this-is-graceful-btn{width:60px;height:60px;border:1px solid;line-height:60px;text-align:center;border-radius:50%;margin:12px auto 3px;border-color:#e0386d}.note-graceful-button .graceful-words{font-size:14px;color:#e0245e}.graceful-words{font-size:14px;color:#e0245e}.shangxia{width:96%;margin:0 2%}
        .m-txt-recomend{background-color:#fff;position:relative;width:98%;overflow:hidden}
        .f-mr-top{margin-top:10px}
        .f-mr-top1{width:100%;height:auto;overflow:hidden;}
        .u-rec-head{font-size:16px;padding-top:12px;padding-bottom:12px;padding-left:12px;justify-content:space-between;align-items:center;color:#333}
        .f-flex{display:-webkit-flex;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:flex}
        .u-rec-title{color:#333}
        .f-default-top-border{border-top:1px solid #f4f4f4}.f-clear:after{content:'.';display:block;height:0;visibility:hidden;clear:both}
        .m-hot-box{padding-left:12px;padding-right:6px;overflow:hidden}
        .f-clear:after{clear:both;content:'.';display:block;margin:0;padding:0;font-size:0;height:0;line-height:0;overflow:hidden}.
                                                                                                                                  .f-clear:after{content:'.';display:block;height:0;visibility:hidden;clear:both}.f-fl{float:left}.f-fr{float:right}
        .m-hot-item-2{margin-right:6px;height:80px;padding-top:15px;padding-bottom:15px;border-bottom:1px solid #f4f4f4}.m-hot-item-2 a{display:block;height:100%;overflow:hidden}.m-hot-item-2 img{width:80px;top:50%;position:relative;transform:translate(0,-50%);border-radius:4px}
        .m-hot-title-2{height:80px;padding-left:10px;display:inline-block;position:absolute;right:12px;left:92px}
        .m-hot-title-2 .title{color:#333;font-size:15px;top:3px;position:absolute}.m-hot-title-2 .username{bottom:3px;position:absolute;left:0;color:#bbb;font-size:12px;margin-left:11px}.m-hot-title-2 .newstime{bottom:3px;position:absolute;right:0;color:#bbb;font-size:12px}

    </style>
