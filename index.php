<html>
    <head>
        <title>WYSIWYG editor</title>
        <meta charset="utf-8">
        
        <script src="js.js"></script>
    </head>
    
    <body onload="iframe()">
        <form method="POST" action="submit.php" id="rtf">
            <input type="button" value="Gras" onclick="bold()">
            <input type="button" value="Souligné" onclick="underline()">
            <input type="button" value="Italic" onclick="italic()">
            <input type="button" value="Titre" onclick="titre()">
            <input type="button" value="Sous-Titre" onclick="s_title()">
            <input type="button" value="Texte" onclick="p()">
            <input type = "button" value = "Link">
            <input type="text" id="recup_http">
            <input type="button" value="valider lien" onclick="link()">
            <br><br>
            
            <textarea name="textarea" id="textarea" style="display:none;"></textarea>
            <iframe name="editor" id="editor" style="width:500px;height:400px;"></iframe>
            <br><br>
            
            <input type="submit" onclick="formsubmit()" value="post">
        </form>
        
    </body>
</html>