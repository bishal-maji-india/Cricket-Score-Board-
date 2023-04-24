<!-- jQuery CDN for dialog boxes -->
<link href="../../src/css/styles.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"> </script>
<!-- CSS -->
<style>

</style>
<div id="dialog">
  <h2>Oop's Something Went Wrong</h2>
  <p><?php echo $_GET['message']; ?></p>
  <a href="/{{ nav_route }}">OK</a>
</div>

<script>
  $(function() {
    $("#dialog").dialog({
      autoOpen: false
    });
    $("#dialog").dialog("open");

    $("#close_btn").click(function() {
      $("#dialog").dialog("close");
    });

  });
</script>