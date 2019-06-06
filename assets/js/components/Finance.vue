<template>
  <div class="finance">
        <p><span>财务</span>管理</p>
        <div class="leibie">
            <p>财务管理</p>
            <div class="topbox">
                <ul class="fenlei">
                    <li class="meiyou">
                        <router-link to="" class="meg">
                            <img src="">
                            <span>按校区查看</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="" class="meg">
                            <img src="">
                            <span>按类别查看</span>
                        </router-link>
                        
                    </li>
                    <li>
                        <router-link to="" class="meg">
                            <img src="">
                            <span>按审核状态查看</span>
                        </router-link>
                        
                    </li>
                    <li>
                        <router-link to="" class="meg">
                            <img src="">
                            <span>按时间查看</span>
                        </router-link>
                        
                    </li>
                    <li>
                        <router-link to="" class="meg">
                            <img src="">
                            <span>按项目查看</span>
                        </router-link>
                        
                    </li>
                </ul>
                <div class="toptwo">
                    <router-link to="" class="top-right fenxi">
                        <img src=" ">
                        综合检索
                    </router-link>
                    <router-link to="" class="fenxi">
                        <img src=" ">
                        数据分析
                    </router-link>
                </div>
            </div>
            
        </div>
        <div class="shourutj">
            
        </div>

        <div class="zhuzhuangtu">
            <div class="onetu">
            
            </div>

            <div class="twotu">
            
            </div>
        </div>
        <div class="xinzeng">
            <router-link to="" class="liushui">
                <img src=" ">
                新增流水
            </router-link>
            <router-link to="" class="shenhe">
                <img src=" ">
                财务审核
            </router-link>
        </div>
        
  </div>
</template>

<script>
export default {
  name: 'finance',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .finance p{
      font-size:22px;
      margin:65px 0 0 172px;
    }
    .finance p span{
      font-size:28px;
    }
    .leibie{
      width:548px;
      height:613px;
      background:#fff;
      margin-top:50px;
      margin-left:55px;;
      border-radius:30px;
      padding-top:22px;
      float:left;
    }
    .finance .leibie p{
      margin:0;
      margin:0 0 45px 38px;
      font-size:18px;
    }
    .finance .leibie ul{
        list-style:none;
        height:104px;
        width:484px;
        margin:0 auto;
       
    }
    .topbox{
        width:484px;
        height:299px;
        border-bottom:2px solid #ddd;
        margin:0 auto;
    }
    .finance .leibie .fenlei li{
       width:74px;
       font-size:13px;
       height:104px;
       float:left;
       margin-left:28px;
       text-align:center;
    }
    .finance .leibie .fenlei li .meg{
        display:inline-block;
        width:74px;
        height:104px;
        text-decoration:none;
        color:#000;
    }
    .finance .leibie .fenlei li img{
        display:block;
        width:52px;
        height:52px;
        border-radius:50%;
        margin-left:11px;
    }
    .finance .leibie .fenlei .meiyou{
        margin:0;
    }
    .toptwo{
        padding-left:310px;

    }
    .toptwo .fenxi{
        display:inline-block;
        width:56px;
        height:82px;
        font-size:12px;
        text-align:center;
        text-decoration:none;
        color:#000;
    }
    .toptwo .top-right{
        margin-right:48px;
    }
    .toptwo .fenxi img{
        display:inline-block;
        width:56px;
        height:56px;
        border-radius:50%;
        margin-bottom:15px;
    }
    .shourutj{
        display:inline-block;
        width:545px;
        height:640px;
        background:#fff;
        border-radius:30px;
        margin-top:50px;
        margin-left:50px;
    }
    .zhuzhuangtu{
        float:right;
        width:500px;
        height:535px;
        margin-right:65px;
        margin-top:50px;
    }
    .zhuzhuangtu .onetu{
        width:500px;
        height:248px;
        margin-bottom:39px;
        background:#fff;
        border-radius:20px;
    }
    .zhuzhuangtu .twotu{
        width:500px;
        height:248px;
        background:#fff;
        border-radius:20px;
    }
    .xinzeng{
        width:650px;
        height:142px;
        margin-top:36px;
        margin-left:155px;
    }
    .xinzeng .liushui{
        display:inline-block;
        width:275px;
        height:142px;
        background:#fff;
        border-radius:20px;
        text-align:center;
        text-decoration:none;
        color:#000;
        margin-right:38px;
    }
    .xinzeng .liushui img{
        display:block;
        width:62px;
        height:62px;
        margin:20px 0 10px 105px;
        border-radius:50%;
    }
    .xinzeng .shenhe{
        display:inline-block;
        width:275px;
        height:142px;
        background:#fff;
        border-radius:20px;
        text-align:center;
        text-decoration:none;
        color:#000;
    }
    .xinzeng .shenhe img{
        display:block;
        width:62px;
        height:62px;
        margin:20px 0 10px 105px;
        border-radius:50%;
    }
</style>
