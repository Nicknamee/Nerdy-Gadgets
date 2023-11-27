function addToWinkelwagen() {
    console.log (addToWinkelwagen)
    const productDetails = {
        title: "Apple MacBook Air (2020) MGN63N/A - 13.3 inch - Apple M1 - 256 GB - Space Grey",
        price: 999.99,
    };

    winkelwagen.push(productDetails);
    updateWinkelwagen()
    console.log (addToWinkelwagen);
}

function updateWinkelwagen() {
    const winkelwagenContainer = document.getElementById("winkelwagen-container");
    let winkelwagenHTML = "<h3>Winkelwagen</h3>";

    if (winkelwagen.length === 0) {
        winkelwagenHTML += "<p>Winkelwagen is leeg.</p>";
    } else {
        let totalPrice = 0;

        winkelwagen.forEach((product) => {
            winkelwagenHTML += <p>${product.title} - €${product.price.toFixed(2)}</p>;
            totalPrice += product.price;
        });

        winkelwagenHTML += <p>Total: €${totalPrice.toFixed(2)}</p>;
    }

    winkelwagenContainer.innerHTML = winkelwagenHTML;
}