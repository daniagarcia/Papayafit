'use strict'

import jquery from "jquery"
import axios from 'axios'
import { Notification } from "element-ui"

export default class SupernovaApps {

	constructor() {
		this.routeLogin = "/entrar"
		this.JSONAppName = "JSONAppName"
		this.JSONAppNameRole = "JSONAppNameRole"
		this.OAuthConfig = {
			grant_type: "password",
			client_id: 4,
			client_secret: "K6bi6dxKLaTwgF6SrQ5y4b1W8fxpd7bRJGjFsi1q",
		}
		axios.defaults.baseURL = document.getElementById("api-url").content
		axios.defaults.headers.common["Accept"] = "application/json"
	}

	test() {
		alert("Supernova has been Instanced Successfully")
	}

	// Hacer un BLOB para una previsualización de una imagen
	makeImageBlob(id, indexFile) {
		let files = document.getElementById(id).files
		let browser = window.URL || window.webkitURL
		return browser.createObjectURL(files[(indexFile) ? indexFile : 0])
	}

	validateSizeUploadFile(id, maxSizieMB /*MegaBytes*/, indexFile) {
		let maxSize = maxSizieMB * 1048576
		let files = document.getElementById(id).files
		return (files[(indexFile) ? indexFile : 0].size > maxSize) ? false : true
	}

	validateTypeUploadFile(id, fileTypes, indexFile) {
		let files = document.getElementById(id).files
		let type = files[(indexFile) ? indexFile : 0].type
		let safe = false
		for (var i = 0; i < fileTypes.length; i++) {
			if (fileTypes[i] == type) {
				safe = true
				break
			}
		}
		if (safe) {
			return true
		}
		return false
	}

	send(method, url, data, callbackSuccess, callbackError, scope, content_type) {
		let scopeSupernova = this;
		axios({
			method: `${method}`,
			url: `${url}`,
			data: data,
			headers: {
				"content-type": content_type ? content_type : "application/json",
				Authorization: `Bearer ${localStorage.getItem(this.JSONAppName)}`
			}
		})
			.then(function (response) {
				callbackSuccess(scopeSupernova, response, scope);
			})
			.catch(function (error) {
				try {
					if (error.status == 401) {
						scopeSupernova.message({
							type: "warning",
							title: "Sesión Expirada",
							message: "Tu se sesión expirado, inicia sesión nuevamente"
						});
						localStorage.removeItem(this.JSONAppName);
						window.location.href = this.routeLogin;
					} else {
						console.log("Response ERROR CATCHED >>", error)
						callbackError(scopeSupernova, error.response, scope);
					}
				} catch (error) {
					return;
				}
			});
	}

	message(object /*{ type, title, message }*/) {
		let sound = document.getElementById(`sound-${object.type}`);
		sound.play();
		Notification({
			title: `${object.title}`,
			message: `${object.message}`,
			type: `${object.type}`
		});
	}

	hidePreloader() {
		let $ = jquery;
		$("body").css({ "padding-top": "5.5rem" });
		$("body").find("#spinner-container").fadeOut("slow", function () {
			$("body").find(".loader").fadeIn("slow", function () {
				$("body").css({ "overflow": "auto" });
			});
		});
	}

	formatMoney() {
		let formatter = require('numeral');
		let money = document.getElementsByClassName("format-money");
		for (let index = 0; index < money.length; index++) {
			money[index].innerHTML = `${formatter(money[index].innerHTML).format('$ 0, 0.00')}`;
		}
		formatter = undefined;
	}

	formatMoney_input() {
		let formatter = require('numeral');
		let money = document.getElementsByClassName("format-money");
		for (let index = 0; index < money.length; index++) {
			money[index].value = `${formatter(money[index].value).format('$ 0, 0.00')}`;
		}
		formatter = undefined;
	}

	formatNumbers() {
		let formatter = require('numeral');
		let numbers = document.getElementsByClassName("format-number");
		for (let index = 0; index < numbers.length; index++) {
			numbers[index].innerHTML = `${formatter(numbers[index].innerHTML).format('0,0')}`;
		}
		formatter = undefined;
	}

	formatNumbers_input() {
		let formatter = require('numeral');
		let numbers = document.getElementsByClassName("format-number");
		for (let index = 0; index < numbers.length; index++) {
			numbers[index].value = `${formatter(numbers[index].value).format('0,0')}`;
		}
		formatter = undefined;
	}

	capitalize(str) {
		return str.replace(/\b[a-z]/, function (letter) { return letter.toUpperCase() })
	}

	onlyNumbers(e) {
		var key = window.event ? e.which : e.keyCode;
		if (key < 48 || key > 57) {
			e.preventDefault();
		}
	}

	trigger(target, event) {
		target.dispatchEvent(new CustomEvent(event))
	}

	isApiAuth() {
		let oauth = localStorage.getItem(this.JSONAppName);
		if (oauth != null && oauth != "") {
			return true
		} else {
			return false
		}
	}

	getApiAuthRole() {
		let oauth = localStorage.getItem(this.JSONAppNameRole);
		if (oauth != null && oauth != "") {
			return oauth
		} else {
			return null
		}
	}

	isEmail(email) {
		let emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		if (emailRegex.test(email)) {
			return true
		} else {
			return false
		}
	}

}