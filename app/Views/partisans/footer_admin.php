<script>
    $(document).ready(function() {
        $("#allChecked").click(function() {
            // $(".allChecked").(':checked');
            if ($('#allChecked').is(':checked')) {
                $(".allChecked").prop('checked', true);
            } else {
                $(".allChecked").prop('checked', false);
            }
        });
    });
</script>
</body>

</html>