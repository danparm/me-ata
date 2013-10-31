function GetForecast() {
	PROXY_SCRIPT = 'scripts/proxy.php';

	this.requestData = function(latitude, longitude) {
		request_url = PROXY_SCRIPT + '?url=' + latitude + ',' + longitude + '?units=auto';
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if(xhr.readyState==4 && xhr.status==200) {
				content = xhr.responseText;
			}
		}
		xhr.open('GET', request_url, false);
		xhr.send();

		if(content != '' && (content)) {
			return JSON.parse(content);
		} else {
			return false;
		}
	}

	this.getCurrentConditions = function(latitude, longitude) {
		var data = this.requestData(latitude, longitude);
		if(data !== false) {
			return data;
		} else {
			return false;
		}
	}
}