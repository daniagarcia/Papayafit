import Supernova from "../../../../development/objects/SupernovaApps"

const supernova = new Supernova()

export default {
  data: () => ({
    loading: false
  }),
  methods: {
    signout() {
      this.loading = true
      supernova.send("GET", "/api/logout-api", null, this.successSignout, this.errorSignout, this)
    },
    successSignout(response) {
      localStorage.removeItem(supernova.JSONAppName)
      localStorage.removeItem(supernova.JSONAppNameRole)
      window.location.href = supernova.routeLogin
    },
    errorSignout(error) {
      scope.$notify({
        title: "Error",
        message: "",
        type: "error"
      })
      console.log("ERROR", error)
      this.loading = false
    }
  }
}