document.getElementById('checkBtn').addEventListener('click', () => {
    const ref = document.getElementById('refInput').value.trim();
    const resultDiv = document.getElementById('statusResult');
    resultDiv.textContent = ''; // clear previous

    if (!ref) {
        resultDiv.textContent = 'Please enter a reference number.';
        return;
    }

    fetch('get-status.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({reference_number: ref})
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            resultDiv.textContent = `Current Status: ${data.status}`;
        } else {
            resultDiv.textContent = data.message || 'Status not found.';
        }
    })
    .catch(() => {
        resultDiv.textContent = 'Error checking status.';
    });
});

fetch('get-status.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: new URLSearchParams({reference_number: ref})
})
.then(res => res.text()) // first get raw text
.then(text => {
    console.log('Response text:', text);
    try {
        const data = JSON.parse(text);
        if (data.success) {
            resultDiv.textContent = `Current Status: ${data.status}`;
        } else {
            resultDiv.textContent = data.message || 'Status not found.';
        }
    } catch (e) {
        resultDiv.textContent = 'Invalid response from server.';
        console.error(e);
    }
})
.catch(() => {
    resultDiv.textContent = 'Error checking status.';
});
