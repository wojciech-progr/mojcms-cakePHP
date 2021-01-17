<!-- File: src/Template/Defaultpages/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <form method="post" action="/mojcake/settings/checkpassword">
    <label for="password">Hasło:</label><br>
    <input type="text" id="password" name="password" value=""><br>

    <input type="submit" value="Zaloguj">
  </form>
  <?php
  if (!empty($_GET['error']) && $_GET['error'] == true) {
    echo '<div style="color: red;">błędne hasło.</div>';
  }
  ?>
</div>