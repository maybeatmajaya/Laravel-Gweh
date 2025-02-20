@if($user->isAdmin())
    <p>Admin Panel</p>
@elseif($user->isEditor())
    <p>Editor Panel</p>
@else
    <p>User Panel</p>
@endif

@switch($status)
    @case('pending')
        <p>Order Pending</p>
        @break
    @case('completed')
        <p>Order Completed</p>
        @break
    @default
        <p>Unknown Status</p>
@endswitch

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .welcome {
            margin-top: 10px;
            padding: 10px;
            background: #d1e7dd;
            border-left: 5px solid #198754;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Dashboard</h1>
        <div class="welcome">
            <p>Selamat datang di dashboard,
                @if(isset($user->role))
                    <strong>{{ ucfirst($user->role) }}</strong>
                @else
                    <strong>Guest</strong>
                @endif
            </p>
        </div>

        <p>Silakan pilih menu di atas untuk melanjutkan.</p>
    </div>

</body>
</html>
