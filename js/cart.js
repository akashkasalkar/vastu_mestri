function APICallCart() {
    var product_id = document.getElementById('product_id').value;
    var qty = document.getElementById('qty_id').value;
    var product_price_id = document.getElementById('product_price_id').value;
    // Replace 'your_api_endpoint' with the actual endpoint of your API
    var apiEndpoint = './function/cart.php';

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the GET request
    xhr.open('POST', apiEndpoint, true);

    // Set up the event listener to handle the response
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Parse the JSON response
            var responseData = JSON.parse(xhr.responseText);
            // Update the HTML with the data from the API
            // updateHTMLWithData(responseData);
            if (responseData.data[0]['error'] == 101) {
                window.location.href = "login.php?cart=1";
            }else{
                // alert(JSON.stringify(responseData));

            }
        } else {
            // Handle the error, if any
            console.error('Request failed. Error code:', xhr.status);
        }
    };

    // Set up error handling
    xhr.onerror = function () {
        console.error('Network error occurred.');
    };

    var requestData = {
        product_id: product_id,
        qty: qty,
        product_price_id : product_price_id
        // Add any other data you want to send in the POST request
    };
    // Send the request
    xhr.send(JSON.stringify(requestData));
}

function updateHTMLWithData(data) {
    // Assuming your data is a string or an object with a 'data' property
    var htmlData = typeof data === 'string' ? data : data.data;
    // Update the data-container div with the API data
    let price = data.data[0]['price'] - (data.data[0]['price'] * data.data[0]['discount'] / 100);
    let oldPrice = data.data[0]['price'];
    let discount = data.data[0]['discount'];

    var priceTag = document.getElementById('price_id');
    var oldPriceTag = document.getElementById('old_price_id');
    var discountTag = document.getElementById('discount_id');

    priceTag.innerHTML = "₹ " + price + " /-";
    oldPriceTag.innerHTML = price == oldPrice ? "" : "₹ " + oldPrice.strike() + " /-";
    discountTag.innerHTML = discount != 0 ? discount + "% off" : "";
}