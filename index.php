<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
</head>
<body>
    <!-- Your navigation bar or other elements go here -->

    <button id="loginBtn" style="display:none;">Login</button>
    <button id="logoutBtn" style="display:none;">Logout</button>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loginBtn = document.getElementById("loginBtn");
            const logoutBtn = document.getElementById("logoutBtn");

            // Check login status from localStorage
            const isLoggedIn = localStorage.getItem("isLoggedIn") === "true";

            if (isLoggedIn) {
                logoutBtn.style.display = "inline";
                logoutBtn.addEventListener("click", () => {
                    localStorage.setItem("isLoggedIn", "false");
                    location.reload();
                });
            } else {
                loginBtn.style.display = "inline";
            }
        });
    </script>
</body>
</html>
