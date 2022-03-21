function add_to_session()
 {
    session_start();
    if(isset($_POST['val']))
    {
     $_SESSION['href'] = $_POST['val'];//created a session named "href"
    }
   //use session 
   if(isset($_SESSION['href']))
   {
   echo $_SESSION['href'];//use your session.
   }
 }

add_action('add-session', 'add_to_session')