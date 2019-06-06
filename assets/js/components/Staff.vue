<template>
  <div class="staff">
        <p><span>员工</span>管理</p>
        <div id="sousuo">
            <p>请输入员工ID进行搜索</p>
            <div class="xiaokuai"></div>
            <input type="number" placeholder="  输入员工ID" class="shuru">
            <router-link to="/staffmeg" class="btn">搜索</router-link>
        </div>
  </div>
</template>

<script>
export default {
  name: 'staff',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
   
    .staff p{
      font-size:22px;
      margin:2% 0 0 10%;
    }
    .staff p span{
      font-size:28px;
    }
    #sousuo{
      width:600px;
      height:420px;
      margin:9% auto;
      background:#fff;
      box-shadow:0 50px 50px #cecece;
      border-radius:30px;
      padding-top:1px;
    }
    #sousuo p{
      font-size:26px;
      margin:120px 0 18px 168px;
    }
     #sousuo .xiaokuai{
       width:34px;
       height:10px;
       background:#bebebe;
       margin-left:282px;
       margin-bottom:68px;
     }
      #sousuo .shuru{
        width:400px;
        height:36px;
        line-height:36px;
        margin-left:100px;
        border-bottom:2px solid #f0a837;
       font-size:12px;
       outline: none;
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button{
         -webkit-appearance: none !important;
         margin: 0;
      }
      #sousuo .btn{
        display:inline-block;
        width:400px;
        height:46px;
        text-align:center;
        border-radius:10px;
        line-height:46px;
        margin:30px 0 0 100px;
        font-size:17px;
        color:#fff;
        letter-spacing:12px;
        background: linear-gradient(#f7df9c, #d46522);
        text-decoration:none;
      }
</style>
