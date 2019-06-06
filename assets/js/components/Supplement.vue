<template>
  <div class="supple">
        <p><span>报名</span>管理</p>
        <div class="supplemeg">
            <form>
                <div style="height:152px;background:#fff;">
                    <router-link to="" class="fanhui">×</router-link>
                    <input type="submit" class="tiaozhuan" value="√">
                    <p>请选择需要报名的学员并补充必要信息</p>
                    <ul class="childname">
                        <li><span>+</span></li>
                    </ul>
                </div>
                <div class="centermeg">
                    <span class="bitian">学员姓名:</span><input type="text" name="childmeg" class="childmeg" required><br>
                    
                    <span class="bitian">学员ID</span>:<input type="number" name="childid" class="childid" required>
                    <span class="bitian">性别:</span><select class="childsex" required>
                        <option>男</option>
                        <option>女</option>
                    </select><br>
                    出生日期:<select class="chushengtime"></select><br>
                    学员在读学校:<input type="text" name="schoolname" class="schoolname"><br>
                    学员在读年级:<input type="text" name="nianji" class="nianji">学员在读班级:<input type="text" name="classname" class="classname"><br>
                    学员身份证号码:<input type="number" minlength="18" maxlength="18" name="shenfen" class="shenfen"><br>
                    备用联系方式1:<input type="number" name="mobile1" class="mobile1"><br>
                    备用联系方式2:<input type="number" name="mobile2" class="mobile2">

                </div>
            </form>
             <div class="tishi">
                <span>黄色字段为必填项</span>
            </div>
            
        </div>
  </div>
</template>

<script>
export default {
  name: 'supple',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  methods:{
    //   tiaozhuan:function(){
    //       window.location.href="/apply";
    //   }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .supple p{
      font-size:22px;
      margin:2% 0 0 10%;
    }
    .supple p span{
      font-size:28px;
    }
    .supplemeg{
        width:602px;
        height:648px;
        background:#fff;
        margin:4% auto;
        border-radius:30px;
        box-shadow:0 50px 50px #cecece;
        overflow:hidden;
    }
    .supplemeg .fanhui{
        display:inline-block;
        width:45px;
        height:45px;
        border-radius:50%;
        background:#e7e7e7;
        text-align:center;
        line-height:45px;
        font-size:30px;
        color:#aaa;
        text-decoration:none;
        margin:28px 0 0 28px;
    }
    .supplemeg .tiaozhuan{
        display:inline-block;
        width:45px;
        height:45px;
        border-radius:50%;
        background:#efa73a;
        text-align:center;
        line-height:45px;
        font-size:20px;
        color:#fff;
        text-decoration:none;
        margin:28px 0 0 450px;
    }
    .supplemeg p{
        font-size:20px;
        margin:0;
        margin-left:130px;
    }
    .supplemeg .childname{
        width:420px;
       
        margin:15px auto 5px;
         list-style: none;
    }
    .supplemeg .childname li{
        width:140px;
        height:40px;
        text-align:center;
    }
    .supplemeg .childname li span{
        display:inline-block;
        width:38px;
        height:38px;
        border-radius:50%;
        border:1px solid #ddd;
        font-size:28px;
        color:#ddd;

    }
    input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button{
         -webkit-appearance: none !important;
         margin: 0;
      }
    .centermeg{
        margin-top:10px;
        width:602px;
        height:425px;
        background:#f2f2f2;
        padding-left:70px;
        color:#bfbfbf;
    }
    input{
        border:none;
        border-bottom:1px solid #ccc;
        background:#f2f2f2;
        height:36px;
        margin-top:16px;
        outline: none;
        
    }
   .childsex{
       width:116px;
       height:36px;
       display:inline-block;
       background:#f2f2f2;
       border-bottom:1px solid #ccc;
       outline: none;
   }
    .childmeg{
        width:395px;
    }
    .childid{
        width:255px;
    }
    .chushengtime{
        width:395px;
        height:36px;
        background:#f2f2f2;
        border-bottom:1px solid #ccc;
        margin-top:10px;
        outline: none;
    }
    .schoolname{
        width:364px;
    }
    .nianji{
        width:133px;
    }
    .classname{
        width:133px;
    }
    .shenfen{
        width:350px;
    }
    .mobile1,.mobile2{
        width:360px;
    }
    .tishi{
        color:#e6954f;
        font-size:12px;
        padding-top:26px;
    }
    .tishi span{
        margin:0 0 0 426px;
    }
    .bitian{
        color:#e58e31;
    }
</style>
