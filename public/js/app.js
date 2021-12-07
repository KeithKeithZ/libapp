function adminLogin(){
    alert("admin login successfully!")
    window.location.replace("/viewReport")
}

function userLogin(){
    alert("user login successfully!")
    window.location.replace("/userProfile")
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