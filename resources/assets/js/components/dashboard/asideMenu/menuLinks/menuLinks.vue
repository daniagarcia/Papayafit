<script src="./menuLinks.js"></script>

<template>
  <ul id="side-main-menu" class="side-menu list-unstyled" v-loading.fullscreen.lock="loading">
    <li>
      <router-link :to="{ name: 'routeName'}">
        <i class="fas fa-caret-right"></i>&nbsp;
        <label>Link</label>
      </router-link>
    </li>
    <li>
      <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
        <i class="fas fa-caret-right"></i>&nbsp;
        <label>Dropdown</label>
      </a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled dropdown-list">
        <li><router-link :to="{ name: 'routeName'}">Link</router-link></li>
      </ul>
    </li>
    <li>
      <a href="javascript:void(0)" @click="signout">
        <i class="fas fa-sign-out-alt"></i>&nbsp;
        Salir
      </a>
    </li>
  </ul>
</template>

<style lang="sass" scoped>
  @import "./menuLinks.sass"
</style>
