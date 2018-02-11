function menu(js){
    $(document).ready(function() {
    $("#burgermenu").click(function() {
      $(".stick").toggleClass(function () {
        return $(this).is('.open, .close') ? 'open close' : 'open';
      });
    });
  });
};