// JavaScript functionalities for button actions

// Function to change to the next token
function nextToken() {
    let tokenNumber = document.getElementById("tokenNumber");
    let currentNumber = parseInt(tokenNumber.textContent);
    tokenNumber.textContent = currentNumber + 1;
}

// Function to simulate a call for the token
function callToken() {
    alert("Calling Token " + document.getElementById("tokenNumber").textContent);
}

// Function to recall the token
function recallToken() {
    alert("Recalling Token " + document.getElementById("tokenNumber").textContent);
}

// Function to transfer the token (you can customize this behavior)
function transferToken() {
    alert("Transferring Token " + document.getElementById("tokenNumber").textContent);
}

// Function to start serving
function startServing() {
    alert("Serving started.");
}

// Function to close serving
function closeServing() {
    alert("Serving closed.");
}

// Function to add a visitor to the list
function addVisitor() {
    const visitorList = document.getElementById("visitorList");
    const newVisitor = document.createElement("div");
    newVisitor.classList.add("visitor");
    
    // Example visitor info (this can be dynamic)
    newVisitor.innerHTML = `<p>New Visitor</p><p>#${Math.floor(Math.random() * 100)}</p>`;
    
    visitorList.appendChild(newVisitor);
}