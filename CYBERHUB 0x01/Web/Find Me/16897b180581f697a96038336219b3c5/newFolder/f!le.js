// for developer: remember to change the function to GET request

function getInfo(value){

	if (value == null){

		alert("Please add a value here.");

	}

}

function nothing(url = "16897b180581f697a96038336219b3c5/newFolder/g3tinf0.php", data, success) {
    
    var params = typeof data == 'string' ? data : Object.keys(data).map(
            function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
        ).join('&');

    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('POST', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    return xhr;
}

// example request
// nothing('http://foo.bar/', 'uname=guest', function(data){ console.log(data); });