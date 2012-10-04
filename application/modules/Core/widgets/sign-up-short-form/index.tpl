<div id="login-holder">
    <form method="POST" action="">
        <div class="select-values hidden">
            <a href="#" id="1">Dog</a>
            <a href="#" id="2">Cat</a>
            <a href="#" id="3">Pig</a>
            <a href="#" id="4">Chicken</a>
            <a href="#" id="5" class="last">Bird</a>
        </div>
        <label>
            <input type="text" class="text radius" name="nickname" value="Tiername" />
        </label>
        <label class="select-holder">
            <span class="text radius unselectable" unselectable="on">Tierart wählen</span>
            <input type="hidden" name="type-select" />
            <a href="#" class="select-m"></a>
        </label>
        <label>
            <input type="text" class="text radius email" name="email" value="E-Mail-Adresse" />
        </label>
        <label>
            <span>Passwort</span>
            <input type="password" class="text radius" name="pass1" value="" />
        </label>
        <label>
            <span>Passwort wiederholen</span>
            <input type="password" class="text radius" name="pass2" value="" />
        </label>

        <input type="submit" class="submit" value="Anmelden" />
    </form>
</div>