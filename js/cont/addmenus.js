$(document).ready(function() {
   $('#savemenus').on('click', function(event) {
      $.ajax({
         url: 'main/exec.php',
         type: 'GET',
         data: $('form[name="formaddmenu"]').serialize(),
      })
      .done(function(json) {
         window.location.href = "./?p=invmenus&nt=true";
      })
      .fail(function(json) {
         console.log("error"+json);               
      })
   });

   $('#btn-add-adicionales').click(function(event) {               
      html = '<div class="btn-group"><button type="button" value="'+$('#textaddmenu').val()+'" class="btn btn-default btn-principal">'+$('#textaddmenu').val()+'</button><button type="button" value="'+$('#textaddmenu').val()+'" class="btn btn-default btn-secundario"><span class="icon16 icomoon-icon-settings"></span></button><button type="button" value="'+$('#textaddmenu').val()+'" class="btn btn-default btn-secundario"><span class="icon16 icomoon-icon-cancel-circle"></span></button></div>'
      $('#content-add-adicionales').append(html)
      $('#textaddmenu').val('')
   });

   if ($('textarea').hasClass('elastic')) {
      $('.elastic').elastic();
   }
});
