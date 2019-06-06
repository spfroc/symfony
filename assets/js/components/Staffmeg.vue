<template>
  <div class="staffmeg">
        <p><span>员工</span>管理</p>
        <div class="supplemeg">
            <form>
                <div style="height:152px;background:#fff;">
                    <router-link to="" class="fanhui">×</router-link>
                    <input type="submit" class="tiaozhuan" value="√" >
                    <p>请选择需要报名的学员并补充必要信息</p>
                    <div class="childname">
                        员工ID:<span></span>
                    </div>
                </div>
                <div class="centermeg">
                    姓名:<input type="text" name="yuangongname" class="yonggongname" required>
                    性别:<select class="yuangongsex" required>
                        <option>男</option>
                        <option>女</option>
                    </select><br>
                    学员身份证号码:<input type="number" minlength="18" maxlength="18" class="shenfen" required><br>
                    入职日期:<select class="ruzhitime" required>
                    
                    </select><br>
                    基础薪资:<input type="number" step="0.01" class="xinzi" required>

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
  name: 'staffmeg',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  methods:{
    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .staffmeg p{
      font-size:22px;
      margin:2% 0 0 10%;
    }
    .staffmeg p span{
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
        width:218px;
        height:34px;
        line-height:34px;
        margin:20px 0 0 85px;
        color:#e3a33d;
        border-bottom:2px solid #e3a33d;
        
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
        color:#e08332;
    }
    input{
        border:none;
        border-bottom:2px solid #ccc;
        background:#f2f2f2;
        margin-top:18px;
        height:34px;
    }
    .yonggongname{
        width:260px;
        
    }
    .yuangongsex{
        width:116px;
        height:34px;
        border-bottom:2px solid #ccc;
        background:#f2f2f2;
         margin-top:18px;
    }
    .shenfen{
        width:336px;
    }
    .ruzhitime{
        width:385px;
        height:34px;
        border-bottom:2px solid #ccc;
        background:#f2f2f2;
        margin-top:18px;
    }
    .xinzi{
         width:385px;
    }
    .tishi{
        color:#e6954f;
        font-size:12px;
        padding-top:26px;
    }
    .tishi span{
        margin:0 0 0 426px;
    }
</style>
