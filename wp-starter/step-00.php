<h2 class="text-center color-hippieblue">In the beginning select your language</h2>
<form class="starter-form width-50 float-center" method="post" action="">
    <fieldset>
        <label for="language" class="">Select Language</label>
        <select id="language" class="" name="language">
            <option value="en_US">English (United States)</option>
            <?php
            // Get all available languages
            $languages = json_decode( file_get_contents( 'http://api.wordpress.org/translations/core/1.0/?version=4.6' ) )->translations;
            foreach ( $languages as $language ) {
                echo '<option value="' . $language->language . '">' . $language->native_name . '</option>';
            }
            ?>
        </select>
        <button id="submit" class="button button-hippieblue float-center">Next step</button>
    </fieldset>
</form>