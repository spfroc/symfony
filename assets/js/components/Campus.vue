<template>
  <div class="campus">
        <p><span>校区</span>管理</p>
        <div class="campusmeg">
            <p>校区管理</p>
            <ul class="xiaoqu">
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>

                <li>
                    <img src="">
                    <span>十三不靠校区</span>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="zongshu"></div>
            <div class="xinzeng"></div>
            <div class="shouru"></div>
        </div>
       
        <div id="shezhi">
            <router-link to="/campusmanagement" class="shezhi">
                <img src="">
                <span>校区设置</span>
            </router-link>
            <router-link to="/addcourse" class="shezhi">
                <img src="">
                <span>课程设置</span>
            </router-link>
            <router-link to="" class="shezhi">
                <img src="">
                <span>职务设置</span>
            </router-link>
        </div>
  </div>
</template>

<script>
export default {
  name: 'campus',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
     .campus p{
      font-size:22px;
      margin:65px 0 0 10%;
    }
    .campus p span{
      font-size:28px;
    }

    .campusmeg{
        width:548px;
        height:638px;
        background:#fff;
        box-shadow:0 28px 28px #d3d3d3;
        margin-left:54px;
        margin-top:58px;
        border-radius:20px;
        padding-top:25px;
        float:left;
    }
    .campusmeg p{
        margin:0 0 54px 36px;
        font-size:18px;
    }
    .xiaoqu{
        width:478px;
        margin:0 auto;
        height:240px;
        overflow: hidden;
        overflow-y: scroll;
        list-style:none;
        border-bottom:2px solid #ddd;
    }
    .xiaoqu::-webkit-scrollbar {
        width: 4px;
    /* height: 4px; */
    }

   .xiaoqu::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
        background: rgba(0, 0, 0, 0.2);
   }
    .xiaoqu li{
        width:94px;
        height:113px;
        text-align:center;
        float:left;
        margin-bottom:7px;
    }
    .xiaoqu li img{
        display:block;
        width:54px;
        height:54px;
        border-radius:50%;
        margin-left:20px;
        margin-bottom:15px;
       
    }
    .right{
        width:1038px;
        height:530px;
        display:inline-block;
        margin-left:38px;
        margin-top:58px;
    }
    .zongshu{
        width:500px;
        height:246px;
        display:inline-block;
        background:#fff;
        border-radius:20px;
        box-shadow:0 15px 15px #ddd;
        margin-right:33px;
        margin-bottom:38px;
    }
    .xinzeng{
        width:500px;
        height:246px;
        display:inline-block;
        background:#fff;
        border-radius:20px;
        margin-bottom:38px;
        box-shadow:0 15px 15px #ddd;
    }
    .shouru{
        width:500px;
        height:246px;
        display:inline-block;
        background:#fff;
        border-radius:20px;
        box-shadow:0 15px 15px #ddd;
       
    }
    .shezhi{
        width:276px;
        height:142px;
        display:inline-block;
        background:#fff;
        border-radius:15px;
        text-decoration:none;
        color:#000;
        text-align:center;
        margin-right:30px;
        margin-top:35px;
    }
    .shezhi img{
        display:block;
        width:64px;
        height:64px;
        border-radius:50%;
        margin-left:106px;
        margin-top:18px;
        margin-bottom:5px;
    }
    #shezhi{
        padding-left:740px;
    }
</style>
