<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form id="myForm" method="post">
            <h1>Dati</h1>
            <p id="nameError" style="color:red;"></p>
            <input type="text" id="name" name="name" placeholder="name">
            <p id="emailError" style="color:red;"></p>
            <input type="email" id="email" name="email" placeholder="e-mail">
            <p id="commentsError" style="color:red;"></p>
            <textarea id="comments" name="comments" placeholder="comments"></textarea>
            <input type="hidden" id="time" name="time">
            <input type="submit">
        </form>
    </div>
    <div>
        <label for="filter">Filter:</label>
        <select id="filter">
            <option value="date-asc">Date (oldest first)</option>
            <option value="date-desc">Date (newest first)</option>
            <option value="name-asc">Name (A-Z)</option>
            <option value="name-desc">Name (Z-A)</option>
        </select>
    </div>
    <div id="records"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>
</html>
