<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SERVER['SERVER_NAME']; ?></title>
    <style type="text/css" media="screen">
        html, body {
            min-height: 100vh;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
            font-family: sans-serif;
            line-height: 2;
            color: #333;
        }
        h1 {
            font-weight: normal;
        }
        .card {
            margin: 5em auto;
            padding: 1em;
            width: 20em;
            background-color: white;
            border-radius: 0.5em;
            text-align: center;
        }
        .portret {
            margin: -1em;
            width: calc(100% + 2em);
            border-radius: 0.5em;
        }
    </style>
</head>
<body>
<div class="card">
    <img alt="A portret of me" class="portret"
         src="https://s.gravatar.com/avatar/2fafff9b7d608f40a41f6e4eb3b12d5e?s=1024">
    <h1>Hi! I&rsquo;m Marc</h1>
    <p>
        <a href="https://github.com/MGHollander/">GitHub</a>
        | <a href="https://www.linkedin.com/in/mghollander/">LinkedIn</a>
    </p>
</div>
</body>
</html>
