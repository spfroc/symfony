<template>
  <div class="addmeg">
         <p><span>校区</span>管理——校区设置{{name}}</p>
         <div class="tianjia">
            <form>
                <router-link to="/campusmanagement" class="fanhui">×</router-link>
                <input type="submit" value="√" class="tijiao"><br>
                <div class="one">
                    校区名称:<input type="text" placeholder="点击填写校区名称">
                    校区电话:<input type="number">
                </div>
                <div class="two">
                    校区封面:<br>
                    &nbsp&nbsp<input type="file"><br>
                    <div class="fengmian">
                        <img src="">
                    </div>
                    
                </div>
                <div class="three">
                    {{address}}:<br>
                    <input type="text" placeholder="点击填写校区地址,在地图中点击确定">
                    <div class="address">

                    </div>
                </div>
                
            </form>
         </div>
  </div>
</template>

<script>
export default {
  name: 'school',
  data () {
    return {
        name: '学校名称~~',
        address: '校区~~~~~地址'
    }
    
  },
}
</script>