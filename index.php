<!DOCTYPE html>
<html lang="zh-cn">
    <script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script>
    <link rel="stylesheet" href="./css/mui.min.css">
    
    
    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/mui.min.js"></script>
    <script src="./js/util.js"></script>
<script>LA.init({id: "Jmofs0FRC3JwdMm3",ck: "Jmofs0FRC3JwdMm3"})</script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>地球村</title>

    <link href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-M/limonte-sweetalert2/11.4.4/sweetalert2.min.css" type="text/css" rel="stylesheet" />
    <style>
        #app{
            max-width: 600px;
            margin:  0 auto;
        }
        .img-view{
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
        }

        .des{
            border-radius: 5px;
            padding: 10px 15px;
            margin-top: 5px;
        }
        .des ul{
            color:black;font-weight: bold;
            width: 100%;
            margin: 0;
            padding: 0;
            line-height: 30px;
        }
        .install{
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .button{
            padding: 10px;
            margin-top: 15px;
            border: none;
            width: 100%;
            border-radius: 20px;
            font-weight: bold;
            font-size: 1.1rem;
            color: #000 !important;
        }
        li,ul {
            list-style-type:none;
        }
        .des li:before {
            content: "🔸";
            margin-right:10px;
        }
        .red{
            color:red;
        }
    </style>
    <script>
        let headerImg = "/1.jpg" // 顶部图片
        let bottomImg = "/2.jpg" // 底部图片
        let backgroundColor = "#5477F5"
        let apiUrl = "https://dqc.hmxelec.com/down/MXlenRkv"
        
        let apiUrl2 = "" // 二开地址api地址 不填写则隐藏
        


    </script>
</head>
<body>
<script>
var btnArray = ['OK'];
mui.confirm("<br>"+'苹果地球村 全新8029版本 救市之作'+"<br><br>", "<br>"+'全新UI！全网首发！', btnArray, function(e) {
})

function inputCode_b(url) {

    var btnArray = ['取消', '确认'];
    mui.prompt('兑换成功后请立即下载安装！', '', '请输入兑换码', btnArray, function(e) {
        if (e.index == 1) {
            if (e.value == '') {
                util.toast('请输入兑换码', '', 'error');
                return false;
            }
            $.post(url, {code: e.value}, function(data){
                    if (data == '<h1>页面不存在</h1>') {
        				mui.alert('页面不存在', '提示', function() {
        				
        				});                    
                    } else {
                        //var data = JSON.parse(data);
                        if (data.code!==1) {
            				mui.alert(data.msg, '提示', function() {
            				
            				}); 
                        }else{
                            location.href = 'itms-beta://testflight.apple.com/v1/invite'+ data.data.url;
                        }                       
                    } 

            },"json"); 
        } else {

        }
    })
}  
</script>     
<div id="app">
    <style type="text/css" media="all">
        .content-bg{
        background-color: {{bg}};
        }
    </style>
    <img class="img-view header-img" :src="headerImg" alt="" srcset="">
    <div class=" des" :style="{backgroundColor:bg}">
        <ul >
            <li>高端稳定 超级防封 畅爽使用</li>
            <li>一个激活码仅可在一个设备上 <span class="red">一开</span></li>
            <li>一个激活码不可用在其他设备</li>
            <li>一个激活码只可以下载<span class="red">一次</span></li>
            <li><span class="red">一码一开,需要多开请使用多个激活码！</span></li>
        </ul>
    </div>
    <div class="install">
        <button class="button content-bg" @click="installTf" :style="{backgroundColor:bg}">步骤一 →【安装TestFlight】</button>
        <button class="button content-bg" @click="inputCode(to1)" :style="{backgroundColor:bg}">步骤二 →【TF安装 地球村1】</button>
        
        <button class="button content-bg" v-if="to2!=''" @click="inputCode(to2)" :style="{backgroundColor:bg}">步骤三 →【TF安装地球村2】</button>
        
        <button class="button content-bg" :style="{backgroundColor:bg}">激活码查询</button>

    </div>
    <img class="img-view header-img" :src="bottomImg" alt="" srcset="">
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/vue/3.2.31/vue.global.min.js" type="application/javascript"></script>
    <script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/limonte-sweetalert2/11.4.4/sweetalert2.min.js" type="application/javascript"></script>
    <script>
        //
  



        const { createApp } = Vue
        const app = createApp({
            data() {
                return {
                    appName:"地球村",
                    headerImg:headerImg,
                    bottomImg:bottomImg,
                    bg:backgroundColor,
                    to1:apiUrl||window.location.pathname,
                    to2:apiUrl2,
                }
            },
            methods:{
                installTf(){
                    window.open("https://apps.apple.com/cn/app/testflight/id899247664")
                },
                inputCode(url){
                    inputCode_b(url);
                    return;
                    Swal.fire({
                        title: '请输入兑换码',
                        input: 'text',
                        text:"兑换成功后请3分钟内下载安装！",
                        inputAttributes: {
                            autocapitalize: 'off'
                        },
                        showCancelButton: true,
                        confirmButtonText: '确认',
                        cancelButtonText:'取消',
                        showLoaderOnConfirm: true,
                        preConfirm: (code) => {

                            return   fetch(url,{method: 'post',body:JSON.stringify({code:code}) ,headers: {'Content-Type': 'application/json'}})
                                .then(async response => {

                                    try{
                                        let data = await response.json()
                                        if (data.code!==1) {
                                            Swal.showValidationMessage(data.msg)
                                            throw new Error(data.msg)
                                        }else{
                                            return  'itms-beta://testflight.apple.com/v1/invite'+ data.data.url

                                        }
                                    }catch(e){
                                        Swal.showValidationMessage(e)
                                        return false
                                    }
                                }).catch(error => {
                                    Swal.showValidationMessage(`无法连接服务器,点确认按钮再试一次即可`)
                                })

                        },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        if (result.value) {
                            console.log(result)
                            Swal.fire({
                                title: `将跳转至TestFlight`,
                                text:"如没有跳转请确认是否安装TestFlight",
                                confirmButtonText: '安装 TestFlight',
                            }).then((v)=>{
                                if (v.value){
                                    window.open("https://apps.apple.com/cn/app/testflight/id899247664")
                                }

                            })
                            window.location.href = result.value
                        }
                    })
                }
            }
        }).mount('#app')
    </script>

</div>

</body>
</html>