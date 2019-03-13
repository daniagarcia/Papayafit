import SupernovaApps from "./SupernovaApps"

export default class Access extends SupernovaApps {

  constructor() {
    super()
    this.btnLoginHTML = `<i class="fas fa-sign-in-alt"></i>`
    this.btnLoginHTMLLoading = `<i class="fas fa-spinner fa-pulse"></i>`
  }

  rendered() {
    this.hidePreloader();
  }

  signIn(credentials) {
    this.send("POST", "/oauth/token", credentials, this.success, this.error);
  }

  signUp(data) {
    this.send("POST", '/sign-up', data, this.signedupSuccess, this.signedupError, this)
  }

  success(scope, response) {
    let res = response.data
    localStorage.setItem(scope.JSONAppName, res.access_token)
    scope.verifyUser()
  }

  error(scope, error) {
    switch (error.status) {
      case 400:
        scope.message({
          title: "Atención",
          message: "Ingresa tus datos completamente",
          type: "info"
        });
        break;
      case 401:
        scope.message({
          title: "Atención",
          message: "El usuario ingresado no existe",
          type: "info"
        });
        break;
      default:
        console.log("response login error", error.response);
        scope.message({
          title: "Error",
          message: "Se detectado un error imprevisto, intentalo nuevamente más tarde",
          type: "error"
        });
        break;
    }
    document.getElementById('login').disabled = false
    document.getElementById('login').innerHTML = scope.btnLoginHTML
  }

  verifyUser() {
    this.send("POST", '/api/verify-auth-user', null, (scope, response) => {
      if (response.data.status == 200) {
        localStorage.setItem(scope.JSONAppNameRole, response.data.data.token)
        window.location.href = "/administrador"
      }
      else {
        scope.message(response.data)
        document.getElementById('login').disabled = false
        document.getElementById('login').innerHTML = scope.btnLoginHTML
      }
    }, (scope, error) => {
      localStorage.removeItem(scope.JSONAppName)
      scope.message({
        'title': 'Error',
        'message': 'Algo ha salido mal intentalo nuevamente más tarde',
        'type': 'error'
      })
      document.getElementById('login').disabled = false
      document.getElementById('login').innerHTML = scope.btnLoginHTML
    })
  }

  signedupSuccess(sp, res, scope) {
    scope.signIn({
      username: res.data.data.email,
      password: res.data.data.password,
      client_id: this.OAuthConfig.client_id,
      client_secret: this.OAuthConfig.client_secret,
      grant_type: this.OAuthConfig.grant_type
    });
  }

  signedupError(sp, err, scope) {
    sp.message({
      title: 'Error Inesperado',
      message: 'Intentalo de nuevo más tarde, estamos trabajando en ello',
      type: 'error'
    })
    document.getElementById("btn-signup").disabled = false
    document.getElementById("btn-signup").innerHTML = 'Registrarme'
    console.log(err)
  }

}