<template>
  <div class="teach">
      <p><span>教学</span>管理</p> 
      <div class="teachlei">
          <p>班级&学员管理</p>
          <span class="suoyou">
              <img src=" ">
              所有学员
          </span>
          <div class="top">
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      查看班级学员
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      按考勤查找学员
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      按学费状态查找学员
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      查看课程进度
                  </router-link>
                  <router-link to="" class="lei">
                      <img src=" ">
                      查看为提交作业学员
                  </router-link>

              </div>
              <div class="topone">
                  <router-link to="" class="lei mei">
                      <img src=" ">
                      查看本月末关怀学员
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
      <router-link to="" class="zuoye">
          <img src=" ">
          作业批改
      </router-link>
  </div>
</template>

<script>
export default {
  name: 'teach',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
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
    .teachlei{
        width:560px;
        height:636px;
        background:#fff;
        border-radius:30px;
        float:left;
        margin:60px 50px 0 115px;
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
    }
    .top .topone .lei{
        display:inline-block;
        width:74px;
        height:110px;
        text-align:center;
        font-size:13px;
        margin-left:22px;
        text-decoration:none;
        color:#000;
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
    .zuoye{
        display:inline-block;
        width:274px;
        height:143px;
        background:#fff;
        border-radius:20px;
        text-align:center;
        color:#000;
        text-decoration:none;
        margin-top:60px;
    }
    .zuoye img{
        display:block;
        width:65px;
        height:65px;
        border-radius:50%;
        margin:20px 0 10px 105px;
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
</style>
