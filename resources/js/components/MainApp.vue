<template>
  <div id="main">
    <Navbar />
    <div id="router-view-content">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Navbar from "./Navbar";

export default {
  name: "main-app",
  components: {
    Navbar
  }
};
</script>

<style lang="scss">
#router-view-content {
  width: 80%;
  margin-left: 20%;
}
</style>
