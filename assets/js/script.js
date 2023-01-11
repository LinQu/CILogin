$(document).ready(function () {
	//validate form field on keyup
	$("#username").keyup(function () {
		validateForm();
	});

	$("#password").keyup(function () {
		validateForm();
		Passval();
	});

	$("#passwordval").keyup(function () {
		validateForm();
	});

	$("#telepon").keypress(function (e) {
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			//display error message
			$("#errmsg").html("Digits Only").show().fadeOut("slow");
			return false;
		}

		//max 13 digit
		if (this.value.length == 13) {
			return false;
		}
		validateForm();
	});

	$("#nama").keypress(function (e) {
		var charCode = e.which ? e.which : e.keyCode;
		if (
			(charCode >= 65 && charCode <= 90) ||
			(charCode >= 97 && charCode <= 122) ||
			charCode == 32
		)
			return true;
		validateForm();
		return false;
	});

	// get Edit Product
	$(".btn-edit").on("click", function () {
		// get data from button edit
		const username = $(this).data("username");
		const password = $(this).data("password");
		const nama = $(this).data("nama");
		const role = $(this).data("role");
		const email = $(this).data("email");
		const telepon = $(this).data("telepon");

		// Set data to Form Edit
		$(".username").val(username);
		$(".password").val(password);
		$(".nama").val(nama);
		$(".role").val(role);
		$(".email").val(email);
		$(".telepon").val(telepon);

		// Call Modal Edit
		$("#editModal").modal("show");
	});

	// get Delete Product
	$(".btn-delete").on("click", function () {
		// get data from button delete
		const username = $(this).data("username");
		// Set data to Form Edit
		$(".username").val(username);
		// Call Modal Edit
		$("#deleteModal").modal("show");
	});
});

$(function () {
	$("#example2").DataTable({
		paging: true,
		lengthChange: false,
		searching: true,
		ordering: true,
		info: true,
		autoWidth: true,
		responsive: true,
	});
});

function emailValidation() {
	var email = document.getElementById("emails").value;
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if (!emailReg.test(email)) {
		alert("Email tidak valids");
		return false;
	} else {
		return true;
	}
}

function validateForm() {
	const btnsave = document.getElementById("btn-save");
	const btnupdate = document.getElementById("btn-update");

	var username = document.forms["myForm"]["username"].value;
	var password = document.forms["myForm"]["password"].value;
	var nama = document.forms["myForm"]["nama"].value;
	var role = document.forms["myForm"]["role"].value;
	var email = document.forms["myForm"]["emails"].value;
	var telepon = document.forms["myForm"]["telepon"].value;

	validate();
	validate1();

	if (
		username == "" ||
		password == "" ||
		nama == "" ||
		role == "" ||
		email == "" ||
		telepon == "" ||
		validate() == false ||
		validate1() == false ||
		Passval() == false ||
		emailValidation() == false
	) {
		btnsave.setAttribute("disabled", "disabled");
		btnupdate.setAttribute("disabled", "disabled");
		console.log("disabled");
	} else if (
		username != "" &&
		password != "" &&
		nama != "" &&
		role != "" &&
		email != "" &&
		telepon != ""
	) {
		btnsave.removeAttribute("disabled");
		btnupdate.removeAttribute("disabled");
		console.log("enabled");
	}
}

function validate1() {
	var password = document.getElementById("password1").value;
	var passwordval = document.getElementById("passwordval1").value;
	const alert = document.getElementById("alert1");
	const btnsave = document.getElementById("btn-save");
	const btnupdate = document.getElementById("btn-update");
	if (password != passwordval) {
		alert.classList.add("alert-danger");
		alert.classList.remove("alert-success");
		alert.innerHTML = "Password not same";

		btnsave.setAttribute("disabled", "disabled");
		btnupdate.setAttribute("disabled", "disabled");
		alert.style.display = "block";
		return false;
	} else {
		alert.classList.remove("alert-danger");
		alert.classList.add("alert-success");
		// alert.style.display = "none";
		btnsave.removeAttribute("disabled");
		btnupdate.removeAttribute("disabled");
		alert.innerHTML = "Password same";
		return true;
	}
}

function validate() {
	var password = document.getElementById("password").value;
	var passwordval = document.getElementById("passwordval").value;
	const btnsave = document.getElementById("btn-save");
	const btnupdate = document.getElementById("btn-update");
	const alert = document.getElementById("alert");
	if (password != passwordval) {
		alert.classList.add("alert-danger");
		alert.classList.remove("alert-success");
		alert.innerHTML = "Password not same";

		btnsave.setAttribute("disabled", "disabled");
		btnupdate.setAttribute("disabled", "disabled");

		alert.style.display = "block";
		return false;
	} else {
		alert.classList.add("alert-success");
		alert.classList.remove("alert-danger");
		//alert.style.display = "none";
		alert.innerHTML = "";

		btnsave.removeAttribute("disabled");
		btnupdate.removeAttribute("disabled");
		alert.innerHTML = "Password same";
		return true;
	}
}

//Jquery Validate Method letters,numbers and special character
function Passval() {
	const btnsave = document.getElementById("btn-save");
	const btnupdate = document.getElementById("btn-update");
	var pass = document.getElementById("password").value;
	var passval = document.getElementById("passwordval").value;
	var passreg =
		/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
	if (!passreg.test(pass)) {
		//error show assword must contain at least ONE UPPERCASE LETTER
		//ONE LOWERCASE LETTER, ONE NUMBER, ONE SPECIAL CHARACTER
		//AND MUST BE AT LEAST 8 CHARACTERS LONG
		//inner html tag list di alert
		$("#alert2").html(
			"Password must contain at least ONE UPPERCASE LETTER, ONE LOWERCASE LETTER, ONE NUMBER, ONE SPECIAL CHARACTER AND MUST BE AT LEAST 8 CHARACTERS LONG"
		);
		$("#alert2").addClass("alert-danger");
		$("#alert2").removeClass("alert-success");
		$("#alert2").show();
		btnsave.setAttribute("disabled", "disabled");
		btnupdate.setAttribute("disabled", "disabled");

		return false;
	} else {
		$("#alert2").hide();
		return true;
	}
}
