// signin.js
document.getElementById('signinForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form from refreshing the page

    // Get the user's email
    const email = document.getElementById('email').value;

    // Display a welcome message
    const message = document.getElementById('message');
    message.textContent = `Welcome, ${email}!`;
    message.classList.remove('hidden');
    message.style.color = "green";

    // Optionally clear the form
    document.getElementById('signinForm').reset();
});

