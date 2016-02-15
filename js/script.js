$(document).ready(function() {
  $(".yes").click(function() {
    $("#reply").load("/includes/replies.php #yes");
  });
  $(".no").click(function() {
    $("#reply").load("/includes/replies.php #no");
  });
});
