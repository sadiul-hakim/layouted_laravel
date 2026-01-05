<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input,
        textarea {
            margin: 10px 0;
            padding: 5px;
            font-size: 20px;
            width: 250px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Mail Sender</legend>
        <form action="/mail/send" method="post">
            @csrf
            <input type="email" name="to" id="to" placeholder="Send to"><br />
            <input type="text" name="mail_subject" id="mail_subject" placeholder="Mail Subject"><br />
            <textarea name="mail_content" id="mail_content"></textarea>
            <br />
            <input type="submit" value="Send">
        </form>
    </fieldset>
</body>

</html>
