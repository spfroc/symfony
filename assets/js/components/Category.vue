<template>
  <div class="category">
        <p><span>财务</span>管理——按类别查看</p>
        <div class="biaoge">
            <div class="top">
                <span>财务收入明细</span>
                <img src=" ">
            </div>
            <div class="center">
                <table class="shourumeg">
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>序号</td>
                        <td>金额</td>
                        <td>登记时间</td>
                        <td>项目</td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr v-for="item in meg">
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>{{item.id}}</td>
                        <td>{{item.num}}</td>
                        <td>{{item.time}}</td>
                        <td>{{item.active}}</td>
                        <td>
                            <img src=" ">
                            <span>审核</span>
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
        <div class="xiangqing">

        </div>
        
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      meg:[{
        id:"1",
        num:"300",
        time:"2019-09-01",
        active:"学费"
      },{
        id:"1",
        num:"300",
        time:"2019-09-01",
        active:"学费"
      }]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .category p{
      font-size:22px;
      margin:2% 0 0 10%;
    }
    .category p span{
      font-size:28px;
    }
    .biaoge{
        width:570px;
        height:796px;
        margin:3% 0 0 25%;
        background:#eee2cd;
        border-radius:30px;
        display:inline-block;
    }
    .biaoge .top{
        width:100%;
        height:115px;
        line-height:115px;
         
    }
    .biaoge .top span{
        margin:0;
        margin-right:110px;
        margin-left:218px;
    }
    .biaoge .top img{
        display:inline-block;
        width:45px;
        height:45px;
    }
    .biaoge .center{
        width:570px;
        height:606px;
        background:#f2f2f2;
    }
    .biaoge .center .shourumeg{
        width:570px;
        border-collapse: collapse
    }
    .biaoge .center .shourumeg tr{
        height:38px;
        text-align:center;
       
    }
    .biaoge .center .shourumeg tr td{
         border-bottom:1px solid #dfdfdf;
    }
    .biaoge .center .shourumeg tr td img{
        display:inline-block;
        width:20px;
        height:20px;
        border-radius:50%;
        vertical-align:middle
    }
    input[type='checkbox']{
    width: 20px;
    height: 20px;
    background-color: #fff;
    border: 1px solid #c9c9c9;
    border-radius: 2px;
    outline: none;
    cursor: pointer;
}

.alertmeg{
    display:inline-block;
    width:535px;
    height:678px;
    background:#fff;
}
.category .xiangqing{
   

    display:inline-block;
    width:537px;
    height:675px;
    background:#fff;
}
</style>
