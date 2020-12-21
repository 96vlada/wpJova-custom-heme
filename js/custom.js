  $(function(){

    // $('#jova-about-section').on('click', function () {
    //   $("html, body").animate({ scrollTop: $('#jova-about-section').offset().top }, 1000);
    //
    //
    //   function removeLocationHash(){
    //       var noHashURL = window.location.href.replace(/#.*$/, '');
    //       window.history.replaceState('', document.title, noHashURL)
    //   }
    //   window.addEventListener("popstate", function(event){
    //       removeLocationHash();
    //   });
    //   window.addEventListener("hashchange", function(event){
    //       event.preventDefault();
    //       removeLocationHash();
    //   });
    //   window.addEventListener("load", function(){
    //       removeLocationHash();
    //   });
    // });



    $('#search-icon').on('click', function () {
      $(this).css("display", "none");
      $('#search-input').stop().fadeIn();
      $('#close-icon').css("display", "inline");
    })

    $('#close-icon').on('click', function () {
      $(this).css("display", "none");
      $('#search-input').css("display", "none");
      $('#search-icon').css("display", "inline");
    })

    // #######################
    // Testimonial
    // #######################


    $("#jovaTestimonialForm").on("submit", function (e) {
      e.preventDefault();

      var form = $(this),
      				testimonialName = form.find('#testimonialName').val(),
      				testimonialProf = form.find('#testimonialProf').val(),
      				testimonialMessage = form.find('#testimonialMessage').val(),
      				ajaxurl = form.data('url');

      		if( testimonialName === '' || testimonialProf == '' || testimonialMessage == '' ){
      			console.log('Required inputs are empty');
      			return;
      		}

      		$.ajax({

      			url : ajaxurl,
      			type : 'post',
      			data : {

      				testimonialName : testimonialName,
      				testimonialProf : testimonialProf,
      				testimonialMessage : testimonialMessage,
      				action: 'jova_save_user_testimonial_form'

      			},
      			error : function( response ){
      				console.log(response);
      			},
      			success : function( response ){
      				if( response == 0 ){
                var msgSaved ="<div class='alert alert-danger pb-0'><p>Something wrong!</p></div>";
                $("#testimonial-msg").html(msgSaved);
      				} else {
                var msgSaved ="<div class='alert alert-success pb-0'><p>Message saved, thank you!</p></div>";
                form[0].reset();
                $("#testimonial-msg").html(msgSaved);
      				}
      			}

      		});

    });


    // #######################
    // Contact
    // #######################


    $("#jovaContactForm").on("submit", function (e) {
      e.preventDefault();

      var form = $(this),
              contactName = form.find('#contactName').val(),
              contactEmail = form.find('#contactEmail').val(),
              contactMessage = form.find('#contactMessage').val(),
              ajaxurl = form.data('url');

          if( contactName === '' || contactEmail == '' || contactMessage == '' ){
            console.log('Required inputs are empty');
            return;
          }

          $.ajax({

            url : ajaxurl,
            type : 'post',
            data : {

              contactName : contactName,
              contactEmail : contactEmail,
              contactMessage : contactMessage,
              action: 'jova_save_user_contact_form'

            },
            error : function( response ){
              console.log(response);
            },
            success : function( response ){
              if( response == 0 ){
                var msgSaved ="<div class='alert alert-danger pb-0'><p>Something wrong!</p></div>";
                $("#contact-msg").html(msgSaved);
              } else {
                var msgSaved ="<div class='alert alert-success pb-0'><p>Message saved, thank you!</p></div>";
                form[0].reset();
                $("#contact-msg").html(msgSaved);
              }
            }

          });

    });


  });
