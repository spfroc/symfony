<template>
  <div class="left">
        
            <div class="logo">
                <img src=" ">
            </div>
            <ul id="">
                <li>
                    <router-link to="/campus" class="left">
                        <img src=" ">
                        <span>校区管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/education" class="left">
                        <img src=" ">
                        <span>教务管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/teach" class="left">
                        <img src=" ">
                        <span>教学管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/apply" class="left">
                        <img src=" ">
                        <span>报名管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/finance" class="left">
                        <img src=" ">
                        <span>财务管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/staff" class="left">
                        <img src=" ">
                        <span>员工管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="" class="left">
                        <img src=" ">
                        <span>用户管理</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="" class="left">
                        <img src=" ">
                        <span>应用管理</span>
                    </router-link>
                </li>
            </ul>
  </div>
</template>

<script>
export default {
  name: 'left',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
   methods: {
    fn:function(){
       var url="/api/admin/campus/multiCampus/"
       console.log(url)
    }
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .left{
        width:100px;
        height:100%;
        background:#3f3f3f;
        float:left;
       
    }
    .left ul{
        list-style:none;
    }
    .left ul li{
        width:100px;
        height:85px;
        text-align:center;
    }
    .left ul li .left{
        display:block;
        width:100px;
        height:85px;
        color:#fff;
        text-decoration:none;
        font-size:14px;
    }
    .left ul li .left img{
        display:block;
        width:42px;
        height:42px;
        margin-left:29px;
    }
    .left .logo{
        
        width:100px;
        height:130px;
    }
</style>
