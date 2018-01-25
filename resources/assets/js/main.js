$(function(){

  function navbarInit(){
    let navbarBurgers = $('.navbar-burger')
    if (navbarBurgers.length > 0) {
      navbarBurgers.on('click', function () {
        let $this = $(this)
        $this.toggleClass('is-active')
        $('#navbarMenuHeroC').toggleClass('is-active')
        $('#Navbar').toggleClass('is-active')
      })
    }
  }

  function contactUsInit(){
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $('#SendMessage').on('click', function(e){
      e.preventDefault();
      let $this = $(this)
      let formData = $("#ContactUsForm").serialize()
      let notif = $("#Notif")

      $this.addClass('is-loading')

      $.ajax({
        url: 'inquiry',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        success: function(result) {
          console.log(notif);
          notif.addClass('show')
          $this.removeClass('is-loading')
        },
        error: function(data){
          // Log in the console
          var errors = data;
          console.log(errors);
        }
      });
    })
  }

  function notificationInit(){
    let notif = $("#Notif")
    notif.find(".delete").on('click', function(){
      notif.removeClass('showing')
    })
  }

  contactUsInit();
  navbarInit()
})