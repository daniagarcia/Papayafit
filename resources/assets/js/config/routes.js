import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import dashboard from '../components/dashboard/dashboard.vue'

export default new Router({
  mode: "history",
  base: __dirname,
  routes: [
    {
      path: "/administrador",
      name: "dashboard",
      component: dashboard,
      // redirect: { name: "adminTest" },
      // children: [{
      //   path: "admin-test",
      //   name: "adminTest",
      //   component: test
      // }]
    },
  ]
})
