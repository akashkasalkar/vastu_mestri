function login(mobile, password) {
    var apiEndpoint = './function/product.php?getSizeDetails=' + selectedValue;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', apiEndpoint, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var responseData = JSON.parse(xhr.responseText);
            return responseData;
        } else {
            console.error('Request failed. Error code:', xhr.status);
        }
    };
    xhr.onerror = function () {
        console.error('Network error occurred.');
    };
    xhr.send();
}