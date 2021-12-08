function adminLogin(){
    alert("admin login successfully!")
    window.location.replace("/viewReport")
}

function filterBooks(){
    var selectedIndex = document.getElementById("searchBy").value; //value='1'
    var searchBy = document.getElementById("searchBy").options[document.getElementById("searchBy").selectedIndex].text;
    let params = "searchBy=" + searchBy + "&search=" +  document.getElementById("search").value;
    console.log(params)

	let xhttp = new XMLHttpRequest();
	xhttp.open('GET', '/filterBooks/' + params, true);

	//Send the proper header information along with the request
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onload = function() {//Call a function when the state changes.
		if(xhttp.readyState == 4 && xhttp.status == 200) {
			// redirect to the page after sending search request
            console.log(xhttp.readyState)
			// window.location.replace("/filteredBookList")
            window.location.replace(xhttp.responseURL)
		} else {
			alert(xhttp.responseText)
		}
	}

	xhttp.send();
}

function userRegister(){
    let obj = {Username: document.getElementById("username").value, UserPassword: document.getElementById("psw").value, Email: document.getElementById("email").value, Address: document.getElementById("addr").value, PhoneNumber: document.getElementById("phone").value}
    console.log(obj)

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '/userRegister', true);

	//Send the proper header information along with the request
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onload = function() {//Call a function when the state changes.
		if(xhttp.readyState == 4 && xhttp.status == 200) {
			// redirect to the page after sending search request
            window.location.replace("/userProfile/Username=" +  document.getElementById("username").value)
		} else {
			alert(xhttp.responseText)
		}
	}

	xhttp.send(JSON.stringify(obj));
}

function userLogin(){
    let params = "Username=" + document.getElementById("username").value + "&UserPassword=" +  document.getElementById("psw").value;
	console.log(params)

	let xhttp = new XMLHttpRequest();
	xhttp.open('GET', '/userLogin/' + params, true);

	//Send the proper header information along with the request
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onload = function() {//Call a function when the state changes.
		if(xhttp.readyState == 4 && xhttp.status == 200) {
			// redirect to the page after sending search request
			alert("user login successfully!")
            window.location.replace("/userProfile/Username=" +  document.getElementById("username").value)
		} else {
			alert(xhttp.responseText)
		}
	}

	xhttp.send();
}