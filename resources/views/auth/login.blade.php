<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Health Clinic - Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
            background-image: url('https://www.careersportal.co.za/sites/default/files/styles/max_2600x2600/public/images/Abdul%20Gallow/vut2.jpg?itok=c0UqhTz8');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 40px;
            text-align: center;
        }

        .logo {
            width: 120px;
            margin-bottom: 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: rgba(51, 74, 255, .8);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        .links {
            margin-top: 20px;
            font-size: 14px;
        }

        .links a {
            color: #3498db;
            text-decoration: none;
            margin: 0 5px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .role-selector {
            margin-bottom: 20px;
        }

        .role-selector select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <x-auth-card>
            <x-slot name="logo">
                <img src="images/Logo.png" alt="University Logo" class="logo"
                    style="width: 120px; margin-bottom: 20px;">
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <h1 style="color: #2c3e50; font-size: 24px; margin-bottom: 30px; text-align: center;">VUT Clinic Portal
                </h1>

                <!-- Role -->
                <select name="role" required>
                    <option value="">-- Select Role --</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="nurse">Nurse</option>
                </select>

                <!-- Email -->
                <input type="email" name="email" required autofocus></input>

                <!-- Password -->
                <input type="password" name="password" required ></input>

                <!-- Submit -->
                <button type="submit">Login</button>
            </form>
        </x-auth-card>
    </div>
</body>

</html>