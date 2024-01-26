<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home - INFO 2300</title>

  <link rel="stylesheet" type="text/css" href="styles/site.css" media="all">
</head>

<body>
  <header>
    <h1 id="title">Home - INFO 2300</h1>

    <nav id="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="citations.php">Citations</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2>INFO/CS 2300; NBA 5301</h2>

    <p>This website is rendered server-side in PHP.</p>

    <p>You're running PHP version: <strong><?php echo htmlspecialchars(phpversion()); ?></strong>.</p>
  </main>

  <footer>
    <p>Contact Information: <a href="mailto:info2300@cornell.edu">info2300@cornell.edu</a>.</p>
  </footer>
</body>

</html>
