<template>
  <div class="campusmanagement">
        <p><span>校区</span>管理——校区设置</p>
        <div class="addschool">
            <div class="top-tit">
               
                <p>请选择需要设置的校区</p>
                <span></span>
            </div>
            <div class="centermeg">
                <ul class="schoollist">
                    <li class="listtit">校区列表</li>
                    <li class="toadd">
                        <router-link to="/addschool">
                            <span>+</span>
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>

                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                    <li>
                        <span>十三不靠校区</span>
                        <router-link to="">
                            <img src=" ">
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
  </div>
</template>

<script>
export default {
  name: 'campusmanagement',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .campusmanagement p{
      font-size:22px;
      margin:2% 0 0 10%;
    }
    .campusmanagement p span{
      font-size:28px;
    }
    .addschool{
      width:602px;
      height:742px;
      background:#fff;
      border-radius:30px;
      margin:100px auto 0;
    }
    .top-tit{
      height:150px;
      line-height:150px;
     
    }
    .top-tit p{
      margin:0;
      float:left;
      margin-left:185px;
    }
    .top-tit span{
      display:inline-block;
      width:44px;
      height:44px;
      border-radius:50%;
      background:#eda138;
      margin-left:130px;
    }
    .centermeg{
      width:602px;
      height:493px;
      background:#f2f2f2;
      padding-top:28px;
    }
    .centermeg .schoollist{
        list-style:none;
        width:400px;
        height:460px;
       margin-left:186px;
       overflow: hidden;
        overflow-y: scroll;
    }
    .centermeg .schoollist li{
      width:260px;
      height:50px;
      line-height:50px;
      background:#fff;
      margin-bottom:20px;
      border-radius:5px;
      box-shadow:0 20px 20px #ddd;
      padding-left:20px;
    }
    .centermeg .schoollist li img{
        display:inline-block;
        width:28px;
        height:28px;
        border-radius:50%;
        vertical-align:middle;
        margin-left:110px;
    }
    .centermeg .schoollist .listtit{
      background:#f2f2f2;
      border-bottom:2px solid #e7e7e7;
      box-shadow:none;
      padding:0;
    }
    
    .centermeg .schoollist .toadd span{
        display:inline-block;
        width:34px;
        height:34px;
        background:#e99835;
        border-radius:50%;
        color:#fff;
        font-size:26px;
        line-height:34px;
        text-align:center;
        margin-top:8px;
        margin-left:100px;
    }

    .schoollist::-webkit-scrollbar {
        width: 4px;
    /* height: 4px; */
    }

   .schoollist::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
        background: rgba(0, 0, 0, 0.2);
   }
</style>
