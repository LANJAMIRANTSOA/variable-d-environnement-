<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable d'environnement</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Signification</th>
            <th>valeur</th>
        </tr>
        <tr>
            <td>SERVER_ADD</td>
            <td>Adresse IP du serveur</td>
            <td> <?php echo $_SERVER['SERVER_ADDR']; ?></td>
        </tr>
        <tr>
            <td>HTTP_HOST</td>
            <td>nom d'hote et port du serveur </td>
            <td> <?php echo $_SERVER['HTTP_HOST']; ?> </td>
        </tr>
        <tr>
            <td>REMOTE_ADDR</td>
            <td>Adresse IP du client</td>
            <td> <?php echo $_SERVER['REMOTE_ADDR'];?></td>
        </tr>
        <tr>
            <td>gethostByAddr(REMOTE_ADDR)</td>
            <td>Nom d'hote client </td>
            <td> <?php echo gethostByAddr($_SERVER['REMOTE_ADDR']); ?></td>
        </tr>
        <tr>
            <td>HTTP_USER_AGENT</td>
            <td>Navigateur web et systeme d'exploitation du client</td>
            <td> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
        </tr>
    </table>
    
</body>
</html>