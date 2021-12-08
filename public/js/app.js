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
    let params = "?Username=" + document.getElementById("username").value + "&UserPassword=" +  document.getElementById("psw").value;
	console.log(params)

	let xhttp = new XMLHttpRequest();
	xhttp.open('GET', '/login' + params, true);

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

	xhttp.send();
}

function adminLogin(){
    let params = "AdminName=" + document.getElementById("admin").value + "&AdminPassword=" +  document.getElementById("psw").value;
	console.log(params)

	let xhttp = new XMLHttpRequest();
	xhttp.open('GET', '/adminLogin/' + params, true);

	//Send the proper header information along with the request
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onload = function() {//Call a function when the state changes.
		if(xhttp.readyState == 4 && xhttp.status == 200) {
			// redirect to the page after sending search request
            window.location.replace("viewReport")
		} else {
			alert(xhttp.responseText)
		}
	}

	xhttp.send();
}

function submitBookManagement(){
	let selectedIndex = document.getElementById("operations").value;
	let operations = document.getElementById("operations").options[document.getElementById("operations").selectedIndex].text;
    let obj = {operation: operations, BookName: document.getElementById("bookName").value, ISBN: document.getElementById("ISBN").value, Author: document.getElementById("author").value, Category: document.getElementById("category").value, Price: document.getElementById("price").value, Book_In_Stock: document.getElementById("stock").value, Publisher_ID: document.getElementById("publisher").value}
    console.log(obj)

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '/bookManage', true);

	//Send the proper header information along with the request
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.onload = function() {//Call a function when the state changes.
		if(xhttp.readyState == 4 && xhttp.status == 200) {
			// redirect to the page after sending search request
            window.location.replace("/BookList")
		} else {
			alert(xhttp.responseText)
		}
	}

	xhttp.send(JSON.stringify(obj));
}