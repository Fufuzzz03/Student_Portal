<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal Login</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 360px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 8px;
            color: #333;
        }

        .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 22px;
        }

        label {
            font-weight: 600;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2c5364;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #203a43;
        }

        .error {
            margin-top: 15px;
            text-align: center;
            color: #a80000;
            background: #ffdada;
            padding: 8px;
            border-radius: 5px;
            font-size: 14px;
            display: none; /* HIDDEN ON LOAD */
        }

        #flagOutput {
            display: none;
        }
    </style>

    <script>
        function handleLogin() {
            // Always fail login (intentional)
            document.getElementById("errorMsg").style.display = "block";
            return false;
        }

        function revealFlag() {
            const encodedFlag = "Cn0hITlUMzNyUF8zUkBfdTBZe2RGVEMK";
            document.getElementById("flagOutput").innerText = encodedFlag;
            document.getElementById("flagOutput").style.display = "block";
        }
    </script>
</head>
<body>

<div class="login-card">
    <h2>Student Portal</h2>
    <p class="subtitle">Login with your Student ID</p>

    <form onsubmit="return handleLogin();">
        <label>Student ID</label>
        <input type="text">

        <label>Password</label>
        <input type="password">

        <button type="submit">Login</button>
    </form>

    <div class="error" id="errorMsg">
        Invalid Student ID or password
    </div>

    <div id="flagOutput"></div>
</div>
</body>
</html>
