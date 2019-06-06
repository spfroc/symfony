<template>
  <div class="teach">
      <p><span>教务</span>管理</p> 
      <div class="teachlei">
          <p>班级管理</p>
          <span class="suoyou">
              <img src=" ">
              所有班级
          </span>
          <div class="top">
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      <span>按校区查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按教师查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按首课日期查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按班级续费提醒</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按班级状态查找</span>
                  </router-link>

              </div>
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      <span>按教室查找</span>
                  </router-link>
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      <span>按课程查找</span>
                  </router-link>
                  <router-link to="" class="lei jiansuo jiansuo1">
                      <img src=" ">
                      数据分析
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      综合检索
                  </router-link>
                </div>
                <div class="sousuo2">
                        <img src="">
                        <input type="text" placeholder="">
                </div>
          </div>
          
      </div>
      <div class="teachlei teachlei2">
          <p>学员管理</p>
          <span class="suoyou">
              <img src=" ">
              所有学员
          </span>
          <div class="top">
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      <span>按校区查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                     <span>按教师查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按学费状态查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>查找缺课学员</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按顾问查找</span>
                  </router-link>

              </div>
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      <span>按校区查找</span>
                  </router-link>
                  <router-link to="" class="lei jiansuo">
                      <img src=" ">
                      数据分析
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      综合检索
                  </router-link>
                </div>
                <div class="sousuo2">
                        <img src="">
                        <input type="text" placeholder="">
                </div>
          </div>
          
      </div>
      <div class="teachlei teachlei2">
          <p>师资管理</p>
          <span class="suoyou">
              <img src=" ">
              所有教师
          </span>
          <div class="top">
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      <span>按校区查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按课程查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按上课时间查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      <span>按性别查找</span>
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      综合检索
                  </router-link>

              </div>
              <div class="topone">
                  
                  <router-link to="" class="lei jiansuo">
                      <img src=" ">
                      数据分析
                  </router-link>
                  
                </div>
                <div class="sousuo2">
                        <img src="">
                        <input type="text" placeholder="">
                </div>
          </div>
          
      </div>
     <div class="toadd">
        <router-link to="" class="addmeg">
            <img src="">
            <span>添加教室</span>
        </router-link>
        <router-link to="" class="addmeg">
            <img src="">
            <span>添加班级</span>
        </router-link>
        
     </div>

     <div class="msgtj">

     </div>
     <div class="msgtj msgtj2">

     </div>
     <div class="msgtj msgtj2">

     </div>
  </div>
</template>

<script>

export default {
  name: 'teach',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
 
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .teach p{
      font-size:22px;
      margin:65px 0 0 172px;
    }
    .teach p span{
      font-size:28px;
    }
    .teach{
        width:1820px;
        height:990px;
         overflow: hidden;
        overflow-y: scroll;
    }
     .teach::-webkit-scrollbar {
        width: 4px;
    /* height: 4px; */
    }

   .teach::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
        background: rgba(0, 0, 0, 0.2);
   }
    .teachlei{
        width:550px;
        height:636px;
        background:#fff;
        border-radius:30px;
        margin:60px 30px 0 60px;
        display:inline-block;
    }
    .teachlei2{
        margin-left:0;
    }
    .teachlei p{
        font-size:18px;
        margin:28px 0 0 42px;
        width:150px;
        display:inline-block;
    }
    .suoyou{
        display:inline-block;
        color:#e3a33d;
        font-size:12px;
        width:97px;
        height:30px;
        border:2px solid #e3a33d;
        line-height:30px;
        text-align:center;
        border-radius:7px;
        margin-left:200px;
    }
    .suoyou img{
        display:inline-block;
        width:15px;
        height:12px;
        // vertical-align:middle;
        
    }
    .top{
        height:260px;
        width:480px;
        border-bottom:2px solid #ddd;
        margin:50px auto 0;
    }
    .top .topone{
        width:480px;
        height:110px;
        vertical-align:super;
    }
    .top .topone .lei{
        float:left;
        display:block;
        width:74px;
        height:110px;
        text-align:center;
        font-size:13px;
        margin-left:22px;
        text-decoration:none;
        color:#000;
       
    }
    .top .topone .lei span{
        display:block;
        width:68px;
        height:35px;
    }
    .top .topone .mei{
        margin-left:0;
    }
    .top .topone .lei img{
        display:block;
        width:52px;
        height:52px;
        border-radius:50%;
        margin-left:11px;
        margin-bottom:12px;
    }
    .top .topone .jiansuo{
        margin-left:225px;
    }
    .top .topone .jiansuo1{
        margin-left:146px;
    }
    .sousuo2{
        width:480px;
        height:30px;
        margin-top:10px;
    }
    .sousuo2 img{
        display:inline-block;
        width:28px;
        height:30px;
        margin-left:40px;
        vertical-align:middle;
    }
    .sousuo2 input{
        width:350px;
        height:30px;

        outline: none;
    }
    .toadd{
        margin-left:65px;
        margin-top:35px;
    }
    .toadd .addmeg{
        display:inline-block;
        width:270px;
        height:140px;
        background:#fff;
        border-radius:20px;
        text-align:center;
        text-decoration:none;
        color:#000;
        margin-right:36px;
    }
    .toadd .addmeg img{
        display:block;
        width:63px;
        height:63px;
        border-radius:50%;
        margin:20px 0 10px 104px;
    }
    .msgtj{
        width:532px;
        height:525px;
        background:#fff;
        border-radius:30px;
        margin:38px 38px 68px 70px;
        display:inline-block;
    }
    .msgtj2{
        margin-left:0;
    }
</style>
