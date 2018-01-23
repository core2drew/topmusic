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
    
    $('#ContactUsForm').on('submit',function(){
      $('#SendMessage').addClass('is-loading')
      $.ajax({
        url: '/inquiry',
        type: 'POST',
        dataType: 'JSON',
        data: $(this).serialize(),
        success: function(result) {
          $('#SendMessage').removeClass('is-loading')
        },
        error: function(data){
          console.log(data)
        }
      });
    })
  }

  contactUsInit();
  navbarInit()
})