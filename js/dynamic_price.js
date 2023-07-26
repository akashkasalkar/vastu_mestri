document.addEventListener("DOMContentLoaded", function () {
    // Attach click event listeners to radio buttons
    var radioButtons = document.querySelectorAll('input[type="radio"]');
    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener("click", function () {
            // Check if the radio button is checked
            if (this.checked) {
                // Get the selected value (e.g., option1 or option2)
                var selectedValue = this.value; // ppd_id
                // Make the AJAX call to the API
                makeAPICall(selectedValue);
            }
        });
    });
});

function makeAPICall(selectedValue) {
    // Replace 'your_api_endpoint' with the actual endpoint of your API
    var apiEndpoint = './function/product.php?getSizeDetails='+selectedValue;

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the GET request
    xhr.open('GET', apiEndpoint, true);

    // Set up the event listener to handle the response
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Parse the JSON response
            var responseData = JSON.parse(xhr.responseText);
            // Update the HTML with the data from the API
            updateHTMLWithData(responseData);
        } else {
            // Handle the error, if any
            console.error('Request failed. Error code:', xhr.status);
        }
    };

    // Set up error handling
    xhr.onerror = function () {
        console.error('Network error occurred.');
    };

    // Send the request
    xhr.send();
}

function updateHTMLWithData(data) {
    // Assuming your data is a string or an object with a 'data' property
    var htmlData = typeof data === 'string' ? data : data.data;
    // Update the data-container div with the API data
    let price = data.data[0]['price'] - ( data.data[0]['price']*data.data[0]['discount'] / 100);
    let oldPrice = data.data[0]['price'];
    let discount = data.data[0]['discount'];
    var priceTag = document.getElementById('price_id');
    var oldPriceTag = document.getElementById('old_price_id');
    var discountTag = document.getElementById('discount_id');
    priceTag.innerHTML = "₹ " + price + " /-";
    oldPriceTag.innerHTML = price == oldPrice ? "" : "₹ " + oldPrice.strike() + " /-";
    discountTag.innerHTML = discount != 0 ? discount + "% off":"";
}