<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="terminal-header">
            <h1>Visitor Registration</h1>
            <p>Enter details to register a new visitor</p>
        </div>

        <div class="form-section">
            <form id="visitorForm">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </div>

        <hr class="divider">

        <div class="table-container">
            <table class="terminal-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Status</th>
                        <th>Toggle</th>
                    </tr>
                </thead>
                <tbody id="visitorsTableBody">
                </tbody>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>