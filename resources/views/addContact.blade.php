<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            color: #333;
        }
        .container {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            border-radius: 10px;
            background-color: #ffffff;
            margin-top: 100px;
        }
        h1 {
            color: #007bff;
            font-weight: bold;
        }
        .btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Add New Contact</h1>
        <form action="/add.contact" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Add Contact
                </button>
                <a href="/list-contacts" class="btn btn-secondary">
                    <i class="fas fa-list-alt"></i> Back to Contacts
                </a>
            </div>
        </form>
    </div>
</body>
</html>
