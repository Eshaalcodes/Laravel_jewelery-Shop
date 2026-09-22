<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Messages | JENNY</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8d7e2;
            color: #111;
        }

        .header {
            background: #111;
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
        }

        .logo span {
            color: #e58fa9;
        }

        .back-btn {
            background: #e58fa9;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 20px;
        }

        .back-btn:hover {
            background: white;
            color: #111;
        }

        .container {
            width: 90%;
            margin: 40px auto;
        }

        h1 {
            margin-bottom: 25px;
        }

        .message-card {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .message-card h3 {
            margin-bottom: 10px;
        }

        .message-card p {
            margin: 8px 0;
        }

        .message {
            margin-top: 15px;
            padding: 15px;
            background: #f8d7e2;
            border-radius: 8px;
        }

        .no-message {
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

    </style>

</head>

<body>

    <div class="header">

        <div class="logo">
            JENNY<span>.</span>
        </div>

        <a href="/admin" class="back-btn">
            Back to Dashboard
        </a>

    </div>


    <div class="container">

        <h1>Contact Messages</h1>


        @if($contacts->count() > 0)

            @foreach($contacts as $contact)

                <div class="message-card">

                    <h3>
                        {{ $contact->subject }}
                    </h3>

                    <p>
                        <strong>Name:</strong>
                        {{ $contact->name }}
                    </p>

                    <p>
                        <strong>Email:</strong>
                        {{ $contact->email }}
                    </p>

                    <p>
                        <strong>Date:</strong>
                        {{ $contact->created_at->format('d M Y') }}
                    </p>

                    <div class="message">

                        <strong>Message:</strong>

                        <p>
                            {{ $contact->message }}
                        </p>

                    </div>

                </div>

            @endforeach

        @else

            <div class="no-message">
                No contact messages found.
            </div>

        @endif

    </div>

</body>

</html>