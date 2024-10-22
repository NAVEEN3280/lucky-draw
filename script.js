function submitForm() {
    const name = document.getElementById('name').value;
    const mobile = document.getElementById('mobile').value;
    const bill = document.getElementById('bill').value;

    // Here you could save the data to local storage or send it to a server if desired

    // Redirect to thank you page with name in URL
    window.location.href = `thankyou.html?name=${encodeURIComponent(name)}`;
    return false; // Prevent form from actually submitting
}
    // Get URL parameters
    const params = new URLSearchParams(window.location.search);
    const name = params.get('name');

    // Display the personalized message
    if (name) {
        document.getElementById('thankYouMessage').textContent = `Thanks for submitting, ${name}!`;
    } else {
        document.getElementById('thankYouMessage').textContent = "Thank you for your submission!";
    }