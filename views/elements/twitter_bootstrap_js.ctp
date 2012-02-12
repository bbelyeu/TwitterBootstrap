	<script type="text/javascript" src="/twitter_bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // If a flash message exists - style it
        $("#flashMessage").addClass("alert");
        $("#flashMessage:contains('deleted')").addClass("alert-error");
        $("#flashMessage:contains('saved')").addClass("alert-success");

        // For actions div in admin
        $("div.actions").addClass("well");
        $("div.actions > h3").hide();
        $("div.actions > ul").addClass("nav nav-list");
        $("div.actions > ul").prepend('<li class="nav-header">Actions</li>');

        /*
         * The rest of the jQuery listeners were borrowed from:
         * https://github.com/mtkocak/Cakephp-Bootstrappifier/blob/master/cakebootstrap.js
         */
        // All submit forms wrapped to div.action
        $('input[type="submit"][class!="btn primary"]').wrap('<div class="actions" />');
        // All submit forms converted to primary button
        $('input[type="submit"]').addClass('btn primary');
        // All index actions converted into pretty buttons
        $('td.actions > a[class!="btn"]').addClass('btn');

        // All (div.inputs) with default FormHelper style (div.input > label ~ input)
        // converted into Twitter Bootstrap Style (div.clearfix > label ~ div.input)
        $('div[class!="input added"].input').removeClass().addClass('clearfix');
        $('div.clearfix > label ~ input').wrap('<div class="input added" />');
        $('div.clearfix > label ~ select').wrap('<div class="input added" />');
        $('div.clearfix > label ~ textarea').wrap('<div class="input added" />');

        //Default CakePHP Error inputs are converted to twitter bootstrap style
        $('.message').addClass('alert alert-info');
        $('.flash_success').addClass('alert alert-success');
        $('.flash_warning').addClass('alert');
        $('.error-message').addClass('alert alert-error');
        $('.form-error').addClass('error');
        $('.form-error').closest('.clearfix').addClass('error');
    });
    </script>

