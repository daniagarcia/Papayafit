import asideMenu from "./asideMenu/asideMenu.vue"
import navbar from "./navbar/navbar.vue"
import Supernova from "../../development/objects/SupernovaApps"

const supernova = new Supernova()

export default {
  beforeRouteEnter(to, from, next) {
    let oauth = localStorage.getItem(supernova.JSONAppName)
    if (oauth != null && oauth != "") {
      next()
    } else {
      window.location.href = supernova.routeLogin
    }
  },
  components: {
    asideMenu,
    navbar
  },
  data: () => ({}),
  mounted() { }
}