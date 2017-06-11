<?php
  function err()
  {
        echo "ERROR\n"
        exit;
  }
?>
<?php
  if (!isset($_POST['submit']) || $_POST['submit'] !== "OK")
  {
        error();
  }
  if (!isset($_POST['login'] || !isset($_POST['passwd']))
  {
        error();
  }
  $serialpath = "../private/passwd";
  if (file_exists($serialpath))
      {
        if (($file = file_get_contents($serialpath) !== FALSE)
            {
              $auth = unserialize($file);
            }
      }
?>
