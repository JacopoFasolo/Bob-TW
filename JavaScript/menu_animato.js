function menu_animato(){
    $(document).ready(function() {
    $("#burgermenu").click(function() {
      $(".stick").toggleClass(function () {
        return $(this).is('.open, .close') ? 'open close' : 'open';
      });
    });
  });
};