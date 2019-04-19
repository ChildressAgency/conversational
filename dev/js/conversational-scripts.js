jQuery(document).ready(function($){
  $('#page-up').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 'slow');
  });

  // animation check
  var $animationElements = $('.animation-trigger');
  var $window = $(window);

  // disable on small devices
  var isMobile = window.matchMedia('(max-width:768px)');
  if(isMobile.matches){
    $animationElements.removeClass('animation-trigger');
  }

  function checkIfInView(){
    var windowHeight = $window.height();
    var windowTopPosition = $window.scrollTop();
    var windowBottomPosition = (windowTopPosition + windowHeight);

    $.each($animationElements, function(){
      var $element = $(this);
      var elementHeight = $element.outerHeight();
      var elementTopPosition = $element.offset().top;
      var elementHeightOffset = elementHeight * (75 / 100);
      var elementBottomPosition = (elementTopPosition + elementHeight);

      if((elementBottomPosition >= windowTopPosition) && 
        (elementTopPosition <= windowBottomPosition - elementHeightOffset)){
            $element.addClass('animation-go');
      }
    });
  }

  $window.on('scroll', checkIfInView);

  if(jQuery.fn.masonry){
    $('.post-grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
    });
  }

  $('.file-input').on('change', function(e){
    var fileName = '';
    var $selectedFileField = $('.selected-file');

    if(e.target.value){
      fileName = e.target.value.split('\\').pop();
    }

    if(fileName){
      $selectedFileField.text(fileName);
    }
    else{
      $selectedFileField.text('No File Chosen');
    }
  });

  $('#select-competitor').on('change', function(){
    var newTab = $(this).val();
    var $currentTab = $('.tab-pane.active');


    $currentTab.fadeOut('fast', function(){
      $currentTab.removeClass('show active');

      $('#' + newTab).fadeIn('fast', function(){
        $('#' + newTab).addClass('show active');
      });
    });

    //$('#' + newTab).fadeIn('fast').addClass('show active');
  });
});