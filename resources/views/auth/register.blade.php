<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #3490dc;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required autofocus>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>
