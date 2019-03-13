<script src="./dashboard.js"></script>

<template>
  <div class="">
    <!-- Navbar -->
    <aside-menu></aside-menu>
    <div class="page">
      <header class="header">
        <navbar></navbar>
      </header>

      <section id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <transition name="fade">
                <router-view></router-view>
              </transition>
            </div>
          </div>
        </div>
      </section>      

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p></p>
            </div>
            <div class="col-sm-6 text-right">
              <p>
                <a href="http://www.supernovaapps.com.mx" class="external" target="_blank">
                  Supernova Apps &copy;
                </a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</template>

<style lang="sass" scoped>
  @import "../../../libs/dashboard_theme/css/style.sea.css"
  @import "./dashboard.sass"
</style>