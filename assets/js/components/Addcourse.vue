<template>
  <div class="addcourse">
        <p><span>校区</span>管理——校区设置{{msg}}</p>
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
  name: 'course',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App~~~~'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<!--<style scoped>-->
<!--    -->
<!--</style>-->
