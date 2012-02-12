	<script type="text/javascript" src="/twitter_bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        if ($("#flashMessage").exists()) {
            $("#flashMessage").addClass("alert");
            $("#flashMessage:contains('deleted')").addClass("alert-error");
            $("#flashMessage:contains('saved')").addClass("alert-success");
        }
    });
    </script>
