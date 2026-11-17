async function SendQuote() {
    let valid = true;

    document.querySelectorAll(".error").forEach(el => {
        el.style.display = "none";
        el.innerText = "";
    });


    const name = document.getElementById("name").value.trim();
    if (name === "") {
        document.getElementById("error-name").innerText = "Please enter your name.";
        document.getElementById("error-name").style.display = "block";
        valid = false;
    }

    
    const email = document.getElementById("email").value.trim();
    if (email === "" || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById("error-email").innerText = "Please enter a valid email address.";
        document.getElementById("error-email").style.display = "block";
        valid = false;
    }

    
    const phone = document.getElementById("phone").value.trim();
    if (phone === "" || !/^[0-9+\-\s]{7,15}$/.test(phone)) {
        document.getElementById("error-phone").innerText = "Please enter a valid phone number.";
        document.getElementById("error-phone").style.display = "block";
        valid = false;
    }

  
    const message = document.getElementById("message").value.trim();
    if (message === "") {
        document.getElementById("error-message").innerText = "Please enter your order details.";
        document.getElementById("error-message").style.display = "block";
        valid = false;
    }

  
    if (valid) {
        const formData = new FormData();
        formData.append("name", name);
        formData.append("company", document.getElementById("company").value.trim());
        formData.append("email", email);
        formData.append("phone", phone);
        formData.append("message", message);

        try {
            const response = await fetch("backend/contactController.php", {
                method: "POST",
                body: formData
            });

            const res = await response.json();

            if (res.success) {
                alert(res.message);
                window.location.reload();
            } else {
                alert("There was an error sending your request: " + res.message);
                 window.location.reload();
            }
        } catch (err) {
            alert("Something went wrong. Please try again later.");
             window.location.reload();
        }
    }
}

