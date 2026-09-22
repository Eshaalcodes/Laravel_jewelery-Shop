<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | JENNY Jewelry & Cosmetics</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            width: 100%;
            max-width: 430px;
            padding: 20px;
        }

        .register-card {
            background: #fff;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.12);
            border: 1px solid #f3d5df;
        }

        .logo {
            text-align: center;
            font-size: 34px;
            font-weight: bold;
            letter-spacing: 5px;
            color: #111;
            margin-bottom: 8px;
        }

        .tagline {
            text-align: center;
            color: #d97898;
            font-size: 14px;
            margin-bottom: 30px;
        }

        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 25px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #222;
            font-weight: 600;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #e58fa9;
            box-shadow: 0 0 0 3px #f8d7e2;
        }

        .register-btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #e58fa9;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
        }

        .register-btn:hover {
            background: #d97898;
        }

        .login-link {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
        }

        .login-link a {
            color: #d97898;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            background: #ffe5eb;
            color: #b4234d;
            padding: 10px;
            border-radius: 7px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        @media (max-width: 500px) {
            .register-card {
                padding: 30px 22px;
            }

            .logo {
                font-size: 29px;
            }
        }
    </style>
</head>

<body>

    <div class="register-container">

        <div class="register-card">

            <div class="logo">
                JENNY.
            </div>

            <div class="tagline">
                Jewelry & Cosmetics
            </div>

            <h2>Customer Registration</h2>

            @if ($errors->any())
                <div class="error-message">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('userRegister') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <button type="submit" class="register-btn">
                    Create Account
                </button>

            </form>

            <div class="login-link">
                Already have an account?
                <a href="{{ route('loginFrom') }}">Login</a>
            </div>

        </div>

    </div>

</body>

</html>