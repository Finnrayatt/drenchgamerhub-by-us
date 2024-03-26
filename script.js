// Function to display detailed game information
// Function to display detailed game information
function checkGameInfo(gameName) {
    var gameData = {}; // Placeholder object to store game data
    
    // Check the game name and assign the corresponding data
    switch (gameName) {
        case "NINTENDO ANIME":
            gameData = {
                description: "Embark on an epic adventure with Nintendo Anime. Explore vast worlds, solve puzzles, and battle enemies.",
                screenshots: ["screenshot1.jpg", "screenshot2.jpg", "screenshot3.jpg"],
                systemRequirements: {
                    minimum: "OS: Windows 10, Processor: Intel Core i5, Memory: 8 GB RAM, Graphics: NVIDIA GTX 1060",
                    recommended: "OS: Windows 10, Processor: Intel Core i7, Memory: 16 GB RAM, Graphics: NVIDIA RTX 2080"
                },
                reviews: {
                    userRating: "4.5/5",
                    criticRating: "9/10"
                },
                price: 39.99
            };
            break;
        
        case "NBA 2K":
            gameData = {
                description: "Experience the thrill of NBA 2K. Play basketball with realistic gameplay and stunning graphics.",
                screenshots: ["screenshot1.jpg", "screenshot2.jpg", "screenshot3.jpg"],
                systemRequirements: {
                    minimum: "OS: Windows 10, Processor: Intel Core i5, Memory: 8 GB RAM, Graphics: NVIDIA GTX 1050",
                    recommended: "OS: Windows 10, Processor: Intel Core i7, Memory: 16 GB RAM, Graphics: NVIDIA RTX 2060"
                },
                reviews: {
                    userRating: "4.7/5",
                    criticRating: "9.2/10"
                },
                price: 49.99
            };
            break;
            
        case "CREW 2":
            gameData = {
                description: "Ride and drive through the vast open world of The Crew 2. Experience the thrill of street racing, off-road adventures, and aerobatics.",
                screenshots: ["screenshot1.jpg", "screenshot2.jpg", "screenshot3.jpg"],
                systemRequirements: {
                    minimum: "OS: Windows 10, Processor: Intel Core i5, Memory: 8 GB RAM, Graphics: NVIDIA GTX 970",
                    recommended: "OS: Windows 10, Processor: Intel Core i7, Memory: 16 GB RAM, Graphics: NVIDIA GTX 1080"
                },
                reviews: {
                    userRating: "4.6/5",
                    criticRating: "9.1/10"
                },
                price: 59.99
            };
            break;
            
        case "GOD OF WAR":
            gameData = {
                description: "Embark on a journey with Kratos in God of War. Engage in brutal combat, solve puzzles, and uncover the truth about Kratos' past.",
                screenshots: ["screenshot1.jpg", "screenshot2.jpg", "screenshot3.jpg"],
                systemRequirements: {
                    minimum: "PS4 Console",
                    recommended: "PS4 Pro Console"
                },
                reviews: {
                    userRating: "4.8/5",
                    criticRating: "9.5/10"
                },
                price: 49.99
            };
            break;
            
        case "GTA V":
            gameData = {
                description: "Explore the vast open world of Los Santos in Grand Theft Auto V. Engage in heists, car races, and various activities in this action-packed game.",
                screenshots: ["screenshot1.jpg", "screenshot2.jpg", "screenshot3.jpg"],
                systemRequirements: {
                    minimum: "OS: Windows 10, Processor: Intel Core i5, Memory: 8 GB RAM, Graphics: NVIDIA GTX 660",
                    recommended: "OS: Windows 10, Processor: Intel Core i7, Memory: 16 GB RAM, Graphics: NVIDIA GTX 970"
                },
                reviews: {
                    userRating: "4.9/5",
                    criticRating: "9.7/10"
                },
                price: 29.99
            };
            break;
            
        case "CALL OF DUTY":
            gameData = {
                description: "Join the battlefield in Call of Duty. Experience intense multiplayer action, gripping campaigns, and thrilling zombie modes.",
                screenshots: ["screenshot1.jpg", "screenshot2.jpg", "screenshot3.jpg"],
                systemRequirements: {
                    minimum: "OS: Windows 10, Processor: Intel Core i5, Memory: 8 GB RAM, Graphics: NVIDIA GTX 960",
                    recommended: "OS: Windows 10, Processor: Intel Core i7, Memory: 16 GB RAM, Graphics: NVIDIA GTX 1060"
                },
                reviews: {
                    userRating: "4.7/5",
                    criticRating: "9.3/10"
                },
                price: 49.99
            };
            break;
        
        default:
            alert("Game information not available.");
            return;
    }

    
    // Construct the game information
    var gameInfo = "Game Description: " + gameData.description + "\n\n" +
                   "Screenshots: " + gameData.screenshots.join(", ") + "\n\n" +
                   "System Requirements:\nMinimum: " + gameData.systemRequirements.minimum + "\nRecommended: " + gameData.systemRequirements.recommended + "\n\n" +
                   "User Rating: " + gameData.reviews.userRating + "\nCritic Rating: " + gameData.reviews.criticRating + "\n\n" +
                   "Price: $" + gameData.price;
    
    alert(gameInfo);
}

// Function to handle adding a game to the cart
function addToCart(gameName, price) {
    var itemName = gameName;
    var itemPrice = price;
    var quantity = 1; // Assuming one item is added to the cart
    
    var confirmationMessage = "Item added to cart:\n" +
                              "Name: " + itemName + "\n" +
                              "Price: $" + itemPrice + "\n" +
                              "Quantity: " + quantity;
    
    alert(confirmationMessage);
    
    if (confirm("Do you want to continue shopping?")) {
        // User wants to continue shopping
    } else {
        // User wants to proceed to checkout
    }
}

// Function to handle purchasing a game
function buyGame(gameName, price) {
    var purchaseOptions = "Digital Download, Physical Copy";
    var priceAndPaymentInfo = "Price: $" + price + "\nPayment method: Credit Card";
    var confirmation = "Thank you for your purchase of " + gameName + "!";
    var supportInfo = "For any assistance, please contact our support team at support@gaminguniverse.com.";

    var purchaseInfo = "Purchase Options: " + purchaseOptions + "\n\n" +
                       "Price and Payment Information:\n" + priceAndPaymentInfo + "\n\n" +
                       "Confirmation: " + confirmation + "\n\n" +
                       "Support and Assistance: " + supportInfo;
    
    alert(purchaseInfo);
}
// Function to display detailed game information
function checkPeripheralInfo(peripheralName) {
    var peripheralData = {}; // Placeholder object to store peripheral data
    
    // Check the peripheral name and assign the corresponding data
    switch (peripheralName) {
        case "Mechanical Keyboards":
            peripheralData = {
                description: "Mechanical keyboards offer a tactile typing experience with individual mechanical switches under each key.",
                features: ["Customizable RGB lighting", "Durable build quality", "Tactile key switches"],
                price: 10000
            };
            break;
        
        case "Gaming Mouse":
            peripheralData = {
                description: "Gaming mice are designed for precise and responsive cursor movements, with additional features tailored for gaming.",
                features: ["Adjustable DPI settings", "Programmable buttons", "Ergonomic design"],
                price: 3000
            };
            break;
            
        case "Gaming Headset":
            peripheralData = {
                description: "Gaming headsets provide immersive audio experience with features like surround sound and noise-cancellation.",
                features: ["Virtual surround sound", "Noise-cancelling microphone", "Comfortable ear cushions"],
                price: 6000
            };
            break;
            
        case "Gaming Monitors":
            peripheralData = {
                description: "Gaming monitors offer high refresh rates and low response times for smooth gameplay visuals.",
                features: ["High refresh rate (e.g., 144Hz)", "Low response time (e.g., 1ms)", "Adaptive sync technology"],
                price: 60000
            };
            break;
            
        case "Gaming Chairs":
            peripheralData = {
                description: "Gaming chairs provide ergonomic support and comfort during long gaming sessions.",
                features: ["Adjustable lumbar support", "Reclining feature", "Premium materials"],
                price: 40999
            };
            break;
            
        case "Gaming Controllers":
            peripheralData = {
                description: "Gaming controllers offer precise control for console gaming, with features like customizable buttons and triggers.",
                features: ["Wireless connectivity", "Ergonomic design", "Customizable buttons"],
                price: 7000
            };
            break;
        
        case "Gaming Mousepads":
            peripheralData = {
                description: "Gaming mousepads provide a smooth surface for precise mouse tracking and comfort during long gaming sessions.",
                features: ["Large surface area", "Non-slip base", "Stitched edges for durability"],
                price: 2000
            };
            break;
            
        case "Gaming Microphone":
            peripheralData = {
                description: "Gaming microphones offer high-quality voice capture for clear communication during gaming sessions or streaming.",
                features: ["Noise-cancelling technology", "Adjustable boom arm", "Plug-and-play setup"],
                price: 12000
            };
            break;
        
        default:
            alert("Peripheral information not available.");
            return;
    }

    // Construct the peripheral information
    var peripheralInfo = "Peripheral Description: " + peripheralData.description + "\n\n" +
                   "Features: " + peripheralData.features.join(", ") + "\n\n" +
                   "Price: Ksh " + peripheralData.price;
    
    alert(peripheralInfo);
}

// Function to handle adding a peripheral to the cart
function addToCart(peripheralName, price) {
    var itemName = peripheralName;
    var itemPrice = price;
    var quantity = 1; // Assuming one item is added to the cart
    
    var confirmationMessage = "Item added to cart:\n" +
                              "Name: " + itemName + "\n" +
                              "Price: Ksh " + itemPrice + "\n" +
                              "Quantity: " + quantity;
    
    alert(confirmationMessage);
    
    if (confirm("Do you want to continue shopping?")) {
        // User wants to continue shopping
    } else {
        // User wants to proceed to checkout
    }
}

// Function to handle purchasing a peripheral
function buyPeripheral(peripheralName, price) {
    var purchaseOptions = "Digital Download, Physical Copy";
    var priceAndPaymentInfo = "Price: Ksh " + price + "\nPayment method: M-Pesa";
    var confirmation = "Thank you for your purchase of " + peripheralName + "!";
    var supportInfo = "For any assistance, please contact our support team at support@drenchgamerhub.com.";

    var purchaseInfo = "Purchase Options: " + purchaseOptions + "\n\n" +
                       "Price and Payment Information:\n" + priceAndPaymentInfo + "\n\n" +
                       "Confirmation: " + confirmation + "\n\n" +
                       "Support and Assistance: " + supportInfo;
    
    alert(purchaseInfo);
}
function addToCart(name, price) {
    // Initialize cart if it's not already set
    if (!sessionStorage.getItem('cart')) {
        sessionStorage.setItem('cart', JSON.stringify([]));
    }
    
    // Retrieve cart items from session storage
    let cart = JSON.parse(sessionStorage.getItem('cart'));
    
    // Add the selected item to the cart
    cart.push({ name: name, price: price });
    
    // Update session storage with the updated cart
    sessionStorage.setItem('cart', JSON.stringify(cart));
    
    // Alert the user that the item has been added to the cart (you can customize this)
    alert(name + " has been added to your cart!");
}
