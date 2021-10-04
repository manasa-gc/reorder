 
<script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
<html>
    <head>
        <meta name="appleid-signin-client-id" content="menuzapp.com.client">
        <meta name="appleid-signin-scope" content="name email">
        <meta name="appleid-signin-redirect-uri" content="https://example-app.com/redirect">
        <meta name="appleid-signin-state" content="EN">
    </head>
    <body>
    
        <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
    </body>
</html> 

<html>
    <head>
    </head>
    <body>

        <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
        <div id="appleid-signin" data-color="black" data-border="true" data-type="sign in"></div>
        <script type="text/javascript">
            AppleID.auth.init({
                clientId : 'menuzapp.com.client',
                scope : 'name email',
                redirectURI: 'https://example-app.com/redirect',
                state : 'EN',
            });
        </script>
    </body>
</html>



