<?php 

?>
<main>
    <form class="contact-form center" action="" method="post">
        <div class="form-group lato">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="name">
        </div>
        <div class="form-group lato">
            <label for="email">Mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group lato">
            <label for="message">Message</label>
            <textarea id="message" name="message" id="" cols="30" rows="10"></textarea>
        </div>
            <button id="submit" type="submit">Envoyer</button>
    </form>
</main>
<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
<script src="app/public/js/creds.js"></script>
<script src="app/public/js/index.js"></script>
</body>