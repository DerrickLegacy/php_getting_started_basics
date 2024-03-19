     
                Sessions
        You can store user information (e.g. username,
        items selected, etc.) in the server side for later
        use using PHP session.
        Sessions work by creating a unique id (UID)
        for each visitor and storing variables based on
        this UID.
        The UID is either stored in a cookie or is
        propagated in the URL.


                When should you use sessions?
        Need for data to stored on the server
        Unique session information for each user
        Transient data, only relevant for short time
        Data does not contain secret information
        Similar to Cookies, but it is stored on the server

        More secure, once established, no data is sent
        back and forth between the machines
        Works even if cookies are disabled
        Example: we want to count the number of
        “hits” on our web page.

        Before you can store user information in your PHP
session, you must first start up the session.

        <?php session_start(); ?>
        <html>
            <body>
                .....some page code.
            </body>
        </html>