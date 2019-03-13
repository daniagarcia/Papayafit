<template>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-holder d-flex align-items-center justify-content-between">

        <div class="navbar-header">
          <a id="toggle-btn" href="#" class="menu-btn">
            <i class="fa fa-bars"></i>
          </a>
          <a href="javascript:void(0)" class="navbar-brand">
            <div class="brand-image d-none d-md-inline-block">
              <img src="/assets/images/logos/logo_h_1900_800.png" alt="logotipo" class="img-fluid">
            </div>
          </a>
        </div>

        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

          <!-- <li class="nav-item dropdown">
            <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
              <i class="fa fa-bell"></i>
              <span class="badge badge-warning"> 12 </span>
            </a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li>
                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                  <div class="msg-profile"> <img src="/assets/images/dashboard/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                  </div>
                </a>
              </li>
              <li>
                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                  <strong>
                    <i class="fa fa-bell"></i>
                      view all notifications
                  </strong>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "",
  data: () => ({})
};
</script>

<style lang="sass" scoped>
  @import "./navbar.sass"
</style>
