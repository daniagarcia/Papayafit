<script src="./asideImage.js"></script>

<template>
  <div>
    <div class="sidenav-header-inner text-center">
      <center>
        <div class="user-logo">{{image}}</div>
        <h2 class="h5">
          {{name}}
        </h2>
      </center>
    </div>
    <div class="sidenav-header-logo">
      <a href="javascript:void(0)" class="brand-small text-center">
        <div class="user-logo-small">{{image}}</div>
      </a>
    </div>
  </div>
</template>

<style lang="sass" scoped>
  @import "./asideImage.sass"
</style>
