
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){
            $(".link_child").hide("fast")
        $(this).find(".link_main").hover(function(){
        $(this).find(".link_child").fadeToggle("fast")
        });

        $("#modal_btn").click();
        });
    </script>
</body>
</html>