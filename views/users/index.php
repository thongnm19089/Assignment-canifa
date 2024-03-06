<?php
echo '<ul>';
foreach ($users as $user) {
  echo '<li>
    <a href="index.php?controller=users&action=showUser&id=' . $user->users_id . '">' . $user->users_name . '</a>
  </li>';
  // echo '<li>
  //   <a href="index.php?controller=users&action=insertUser&id=' . $user->id . '">' . $user->name . $user->email .'</a>
  // </li>';
}
echo '</ul>';
?>