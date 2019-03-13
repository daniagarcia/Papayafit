'use strict'
import Landing from "../objects/Landing"

const landing = new Landing()

let oauth = localStorage.getItem(landing.JSONAppName)
if (oauth != null && oauth != "") {
  window.location.href = "/administrador"
}

import Access from "../objects/Access"

window.onload = __boot();

function __boot() {

  landing.initDefault()

  const login = new Access()
  const btnLogin = document.getElementById("login")
  const txtUsername = document.getElementById("username")
  const txtPassword = document.getElementById("password")

  txtUsername.addEventListener("keyup", function (event) {
    if (event.which == 13) {
      login.trigger(btnLogin, 'click')
    }
  })

  txtPassword.addEventListener("keyup", function (event) {
    if (event.which == 13) {
      login.trigger(btnLogin, 'click')
    }
  })

  btnLogin.addEventListener("click", function (e) {
    btnLogin.disabled = true;
    btnLogin.innerHTML = login.btnLoginHTMLLoading
    if (txtUsername.value == "" || txtPassword.value == "") {
      login.message({
        title: "Información",
        message: "Rellena todos los campos",
        type: "info"
      })
      btnLogin.disabled = false
      btnLogin.innerHTML = login.btnLoginHTML
    }
    else {
      login.signIn({
        username: txtUsername.value,
        password: txtPassword.value,
        client_id: login.OAuthConfig.client_id,
        client_secret: login.OAuthConfig.client_secret,
        grant_type: login.OAuthConfig.grant_type
      });
    }
  })

}