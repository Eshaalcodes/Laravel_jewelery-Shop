<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Jenny Jewelry & Cosmetics</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff7fa, #fce8ef);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            margin: 30px;
            background: #ffffff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(180, 100, 130, 0.18);
            display: flex;
        }

        /* LEFT SIDE */

        .login-left {
            width: 48%;
            background: linear-gradient(145deg, #e58fa9, #c96f8d);
            color: white;
            padding: 55px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .brand-icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            border: 2px solid rgba(255, 255, 255, 0.45);
        }

        .login-left h1 {
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .login-left h3 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 25px;
        }

        .login-left p {
            font-size: 15px;
            line-height: 1.7;
            opacity: 0.95;
        }

        .decorative-icons {
            margin-top: 35px;
            font-size: 24px;
            letter-spacing: 15px;
        }


        /* RIGHT SIDE */

        .login-right {
            width: 52%;
            padding: 55px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .login-title h2 {
            color: #333333;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .login-title p {
            color: #888888;
            margin: 0;
            font-size: 14px;
        }


        /* ERROR */

        .error-message {
            background: #fff0f0;
            border: 1px solid #f2bcbc;
            color: #c62828;
            padding: 12px 15px;
            border-radius: 9px;
            margin-bottom: 20px;
            font-size: 14px;
        }


        /* INPUTS */

        .input-group-custom {
            margin-bottom: 22px;
        }

        .input-group-custom label {
            display: block;
            color: #333333;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .input-box {
            position: relative;
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #e58fa9;
            font-size: 18px;
        }

        .input-box input {
            width: 100%;
            padding: 13px 15px 13px 45px;
            border: 1px solid #ead3da;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        .input-box input:focus {
            border-color: #e58fa9;
            box-shadow: 0 0 0 3px rgba(229, 143, 169, 0.12);
        }


        /* LOGIN BUTTON */

        .login-btn {
            width: 100%;
            border: none;
            padding: 14px;
            border-radius: 10px;
            background: linear-gradient(135deg, #e58fa9, #d87596);
            color: white;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 8px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(216, 117, 150, 0.3);
        }


        /* REGISTER */

        .register-text {
            text-align: center;
            margin-top: 25px;
            color: #777777;
            font-size: 14px;
        }

        .register-text a {
            color: #d87596;
            font-weight: 700;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }


        /* RESPONSIVE */

        @media (max-width: 768px) {

            .login-wrapper {
                flex-direction: column;
                margin: 20px;
            }

            .login-left,
            .login-right {
                width: 100%;
            }

            .login-left {
                padding: 40px 25px;
            }

            .login-right {
                padding: 40px 25px;
            }

            .login-left h1 {
                font-size: 28px;
            }

            .decorative-icons {
                margin-top: 20px;
            }

        }

    </style>

</head>


<body>


<div class="login-wrapper">


    <!-- LEFT SIDE -->

    <div class="login-left">

        <div class="brand-icon">

            <i class="bi bi-gem"></i>

        </div>


        <h1>
            Jenny
        </h1>


        <h3>
            Jewelry & Cosmetics
        </h3>


        <p>
            Discover beautiful jewelry and cosmetics
            made to add a little more beauty to
            your everyday moments.
        </p>


        <div class="decorative-icons">

            <i class="bi bi-gem"></i>

            <i class="bi bi-stars"></i>

            <i class="bi bi-heart"></i>

        </div>

    </div>



    <!-- RIGHT SIDE -->

    <div class="login-right">


        <div class="login-title">

            <h2>
                Welcome Back
            </h2>

            <p>
                Login to your Jenny account
            </p>

        </div>



        <!-- ERROR MESSAGE -->

        @if(session('error'))

            <div class="error-message">

                <i class="bi bi-exclamation-circle"></i>

                {{ session('error') }}

            </div>

        @endif



        <!-- LOGIN FORM -->

        <form
            action="{{ route('userlogin') }}"
            method="POST"
        >

            @csrf


            <!-- EMAIL -->

            <div class="input-group-custom">

                <label>
                    Email Address
                </label>

                <div class="input-box">

                    <i class="bi bi-envelope"></i>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >

                </div>

            </div>



            <!-- PASSWORD -->

            <div class="input-group-custom">

                <label>
                    Password
                </label>

                <div class="input-box">

                    <i class="bi bi-lock"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>

            </div>



            <!-- LOGIN BUTTON -->

            <button
                type="submit"
                class="login-btn"
            >

                <i class="bi bi-box-arrow-in-right"></i>

                Login

            </button>


        </form>



        <!-- REGISTER LINK -->

        <div class="register-text">

            Don't have an account?

            <a href="/register">
                Create New Account
            </a>

        </div>


    </div>


</div>


</body>

</html>