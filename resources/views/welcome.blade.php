<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
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
            margin: 10px;
            font-size: 18px;
            padding: 10px 20px;
        }
        .btn-primary {
            position: relative;
        }
        .btn-secondary {
            position: relative;
        }
        .icon {
            margin-right: 5px;
        }
        p {
            font-size: 1.2em;
            color: #555;
        }
        .feature-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .feature-icon {
            text-align: center;
            margin: 0 20px;
        }
        .feature-icon i {
            font-size: 40px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Welcome to Contact Manager!</h1>
        <br><br>
        <p class="text-center">Here you can add a contact, view the list of contacts and delete a contact!</p>
        <div class="text-center">
            <a href="/add-contact" class="btn btn-primary">
                <i class="fas fa-user-plus icon"></i>Add Contact
            </a>
            <a href="/list-contacts" class="btn btn-secondary">
                <i class="fas fa-list-alt icon"></i>List Contacts
            </a>
            <a href="/delete-contact" class="btn btn-danger">
                <i class="fas fa-user-minus icon"></i>Delete Contact
            </a>
        </div>
        </div>
    </div>
</body>
</html>
