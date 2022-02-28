# LMS-Library
Demo Library Portal


Use the given user sql file.

for demo:
username: uncleiroh007
password: password



Password is concatenated with the username and hashed
using the sha1 hashing algorithm.


Simple Protection Measures:
____________________________

-- the signup page checks for any SQL keywords to
  prevent any SQL injection. (String comparision and strpos)
  
-- Also used htmlspecialchars() to prevent XSS on some level.


