## __construct
**Description**:  
Creates an instance of the Auth class with the provided database connection and config class instance.

**Parameters**:
* `$dbh` : PDO Database connection
* `$config` : An instance of the Config class

**Returns**:  
> Void

## login

**Description**:  
Authenticates a user with the system.
Note: Also installs a cookie named `config->cookie_name` (see config)

**Parameters**:
* `$email` (string): User's email address
* `$password` (string): User's password
* `$remember` (boolean): Remember me checkbox value (temporary or permanent session)
* `$captcha_response` (string, optional): captcha response code if needed, default NULL

**Returns**:  
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message
    * `hash` (string): The session hash to be stored in the session cookie
    * `expire` (int): Timestamp of session expiry time
    * `cookie_name` (string): Cookie name from config


## register

**Description**:  
Handles the registration of a new user.

**Parameters**:
* `$email` (string): User's email address
* `$password` (string): User's password
* `$repeatpassword` (string): User's password confirmation
* `$params` (array, optional): additional params to set in users table (attr_name => value), default Array()
* `$captcha_response` (string, optional): captcha code if needed, default NULL
* `$use_email_activation` (boolean, optional): enable/disable email activation, default NULL

**Returns**:  
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message


## activate
**Description**:  
Activates a user's account with the activation key sent via email

**Parameters**:
* `$key` (string): The user's activation key

**Returns**:  
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## requestReset

**Description**:  
Creates a password reset request for a given email address and sends email

**Parameters**:
* `$email` (string): User's email address
* `$use_email_activation` (boolean, optional): enable/disable email activation, default NULL

**Returns**:  
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## logout
**Description**:  
Terminates a given session

**Parameters**:
* `$hash` (string): User's session hash

**Returns**:  
* (boolean)

## getHash

**Description**:  
Hashes a given password using bcrypt

**Parameters**:
* `$password` (string): String to hash

**Returns**:  
* (string)

## getUID

**Description**:  
Gets the user's ID associated with a given email address

**Parameters**:
* `$email` (string): User's email address

**Returns**:  
* `$id` (int): User's ID

## addSession (protected)

**Description**:  
Creates a session for a given UID. Also installs a cookie named `config->cookie_name`.

**Parameters**:
* `$uid` (int): User's ID
* `$remember` (boolean): Remember me checkbox value (temporary or permanent session)

**Returns**:  
* `$data` (array)
    * `hash` (string): The session hash to be stored in the session cookie
    * `expire` (int): Timestamp of session expiry time 
    * `cookie_crc` (string): CRC created from hash and `config->site_key` 

## deleteExistingSessions (protected)

**Description**:  
Deletes all existing sessions for a given UID

**Parameters**:
* `$uid` (int): User's ID

**Returns**:  
* (boolean)

## deleteSession (protected)

**Description**:  
Deletes the session associated with a given session hash

**Parameters**:
* `$hash` (string): The session hash

**Returns**:  
* (boolean)

## checkSession

**Description**:
Checks if a session hash is valid (i.e. it exists in the session table, it hasn't expired, and the user's IP address matches the database entry)

**Parameters**:
* `$hash` (string): The session hash

**Returns**:
* (boolean)

## getSessionUID

**Description**:
Retrieves the UID associated with a given session hash

**Parameters**:
* `$hash` (string): The session hash

**Returns**:
* `$uid` (int): User's ID

## isEmailTaken

**Description**:  
Checks if an email is already in use by another user

**Parameters**:
* `$email` (string): An email address

**Returns**:  
* (boolean)

## isEmailBanned

**Description**:  
Checks if an email is banned

**Parameters**:
* `$email` (string): An email address

**Returns**:  
* (boolean)

## addUser

**Description**:  
Adds a new user to the database

**Parameters**:  
* `$email` (string): User's email address
* `$password` (string): User's password
* `$params` (array, optional): additional params to set in users table (attr_name => value), default Array()
* `$use_email_activation` (boolean, optional): enable/disable email activation

**Returns**:  
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## getBaseUser (protected)

**Description**:
Gets basic user data for a given UID

**Parameters**:
* `$uid` (int): User's ID

**Returns**:
* `$data` (array)
    * `email` (string): User's email address
    * `password` (string): User's password
    * `isactive` (boolean): Is user's account activated
    * `uid` (int): User's ID

## getUser

**Description**:
Gets user data for a given UID

**Parameters**:
* `$uid` (int): User's ID
* `$withpassword` (boolean, optional): Whether to include the user's password in the returned data array, default false (Note: `password` returned is bcrypt-encrypted hash, not their actual password)

**Returns**:
* `$data` (array)
    * `email` (string): User's email address
    * `password` (string): User's password
    * `isactive` (boolean): Is user's account activated
    * `uid` (int): User's ID

## deleteUser

**Description**:
Delete's a user's account, sessions and requests

**Parameters**:
* `$uid` (int): User's ID
* `$password` (string): User's password
* `$captcha_response` (string, optional): captcha response code if needed, default NULL

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## deleteUser

**Description**:
Force delete user without password or captcha verification

**Parameters**:
* `$uid` (int): User's ID

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## addRequest (protected)

**Description**:
Creates a new password reset / activation request for a given user and sends the email

**Parameters**:
* `$uid` (int): User's ID
* `$email` (string): User's email address
* `$type` (string): Type of request (`activation` or `reset`)
* `$use_email_activation` (boolean, optional): enable/disable email activation, default undefined

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## getRequest

**Description**:
Returns request data based on request key and type

**Parameters**:
* `$key` (string): Request key
* `$type` (string): Type of request (`activation` or `reset`)

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `id` (int): Request ID
    * `uid` (int): User's ID

## deleteRequest (protected)

**Description**:
Deletes a request by request ID

**Parameters**:
* `$id` (int): Request ID

**Returns**:
* (boolean)

## validatePassword (protected)

**Description**:
Checks if a password meets specific length

**Parameters**:
* `$password` (string): User's password

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## validateEmail (protected)

**Description**:
Checks if an email address is valid and is not banned

**Parameters**:
* `$email` (string): User's email address

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## resetPass

**Description**:
Allows a user to change their password with a password reset request key

**Parameters**:
* `$key` (string): Request key
* `$password` (string): User's password
* `$repeatpassword` (string): User's password confirmation
* `$captcha_response` (string, optional): captcha response code if needed, default NULL

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## resendActivation

**Description**:
Recreates activation email for a given email and sends

**Parameters**:
* `$email` (string): User's email address
* `$use_email_activation` (boolean, optional): enable/disable email activation, default null

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## changePassword

**Description**:
Changes a user's password

**Parameters**:
* `$uid` (int): User's ID
* `$currpass` (string): User's current password
* `$newpass` (string): User's new password
* `$repeatnewpass` (string): User's new password confirmation
* `$captcha_response` (string, optional): captcha response code if needed, default NULL

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## changeEmail

**Description**:
Changes a user's email address

**Parameters**:
* `$uid` (int): User's ID
* `$email` (string): User's new email address
* `$password` (string): User's password
* `$captcha` (string, optional): captcha response code if needed, default NULL

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## isBlocked

**Description**:
Checks if the current IP is temporarily blocked from the system

**Parameters**:
> Void

**Returns**:
* (boolean)

## checkCaptcha (protected)

**Description**:
Verifies a captcha code. (Currently returns `true` for any value.)

**Parameters**:
* `$captcha` (string, optional): captcha response code

**Returns**:
* (boolean)

## checkReCaptcha (protected)

**Description**:
Check Google Recaptcha code. If reCaptcha disabled in config or config not defined - return TRUE (captcha passed)

**Parameters**:
* `$captcha_response` (string, optional): captcha response code

**Returns**:
* (boolean)

## addAttempt (protected)

**Description**:
Adds an attempt to database for the current IP

**Parameters**:
> Void

**Returns**:
* (boolean)

## deleteAttempts (protected)

**Description**:
Deletes attempts (all attempts or expired ones) for a given IP from database

**Parameters**:
* `$ip` (string): User's IP
* `$all` (boolean): If true, delete all attempts. If false, delete all expired attempts.

**Returns**:
* (boolean)

## getRandomKey

**Description**:
Provides a randomly generated string

**Parameters**:
* `$length` (int): Randomly generated string length, default 20

**Returns**:
* `$key` (string): Randomly generated string

## getIp (protected)

**Description**:
Provides the current user's IP

**Parameters**:
> Void

**Returns**:
* `$ip` (string): User's IP

## getCurrentSessionHash

**Description**:
Returns current session hash

**Parameters**:
> Void

**Returns**:
* `hash` (string): Current session hash

## isLogged

**Description**:
Returns is user logged in

**Parameters**:
> Void

**Returns**:
* (boolean)

## getCurrentUser

**Description**:
Gets user data for current user (from cookie/session_hash) and returns an array, password is not returned

**Parameters**:
> Void

**Returns**:
* (array, or false if no current user)

## comparePasswords

**Description**:
Compare user's password with given password

**Parameters**:
* `$userid` (int): User's ID
* `$password_for_check` (string): User's password

**Returns**:
* (boolean)

## comparePasswords

**Description**:
Compare user's password with given password

**Parameters**:
* `$userid` (int): User's ID
* `$password_for_check` (string): User's password

**Returns**:
* (boolean)

## password_verify_with_rehash

**Description**:
Verifies the entered password against the stored hash. If the `bcrypt_cost` setting are now stronger than when the password was originally hashed and stored in the database, the password will be rehashed and the database-entry replaced by the new value.

**Parameters**:
* `$password` (string): Password to verify.
* `$hash` (string): Hash to to verify password against.
* `$uid` (int): User's id.

**Returns**:
* (boolean)

## do_SendMail

**Description**:
Send email via PHPMailer.

**Parameters**:
* `$email` (string): Destination email address
* `$type` (string): 'activation' or 'reset'
* `$key` (string): Random string key

**Returns**:
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## updateUser 

**Description**:  
Updates a user info at the database

**Parameters**:  
* `$uid` (int): User id
* `$params` (array) User data

**Returns**:  
* `$return` (array)
    * `error` (boolean): Informs whether an error was encountered or not
    * `message` (string): User-friendly error / success message

## getCurrentUID 

**Description**:  
Returns current user UID if logged or FALSE otherwise.

**Returns**:  
* `$return` (int): user UID