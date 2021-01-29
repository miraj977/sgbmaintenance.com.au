$( document ).ready( function ()
{
  var $flexsliderOne = $( ".common-page-flexslider-content .flexslider" );
  $flexsliderOne.flexslider( {
    animation: "slide",
    useCSS: false,/* Chrome fix*/
    prevText: "Previous",
    nextText: "Next",
    controlNav: false,
    slideshow: false
  } );

} );


$( document ).ready( function ()
{
  var $flexslider = $( ".slideshow-container" );
  $flexslider.flexslider( {
    animation: "fade",
    manualControls: ".flex-control-nav li",
    useCSS: false,/* Chrome fix*/
    pauseOnHover: false,
    directionNav: false
  } );

} );


var modal = document.querySelector( ".modal" );
var trigger = document.querySelector( ".trigger" );
var closeButton = document.querySelector( ".close-button" );

function toggleModal ()
{
  modal.classList.toggle( "show-modal" );
}

function windowOnClick ( event )
{
  if ( event.target === modal )
  {
    toggleModal();
  }
}

trigger.addEventListener( "click", toggleModal );
closeButton.addEventListener( "click", toggleModal );
window.addEventListener( "click", windowOnClick );

//Book now modal

var modal2 = document.querySelector( ".modal2" );
var trigger2 = document.querySelector( ".trigger2" );
var closeButton2 = document.querySelector( ".close-button2" );

function toggleModal2 ()
{
  modal2.classList.toggle( "show-modal2" );
}

function windowOnClick2 ( event )
{
  if ( event.target === modal2 )
  {
    toggleModal2();
  }
}

trigger2.addEventListener( "click", toggleModal2 );
closeButton2.addEventListener( "click", toggleModal2 );
window.addEventListener( "click", windowOnClick2 );


jQuery( '.trigger2' ).on( 'click', function ()
{
  jQuery( '.modal2' ).toggleClass( 'show-modal2' );
} );

$( function ()
{
  $( 'li' ).each( function ()
  {
    var parent = $( this ).parent().parent();
    if ( parent.is( 'li' ) )
    {
      parent.addClass( "mt-15" );
    }
  } )
} );

jQuery( '#scrolldown' ).on( 'click', function ()
{
  jQuery( 'html,body' ).animate(
    {
      scrollTop: jQuery( '.commercial-services ' ).offset().top
    }, 1000
  );
} )

jQuery( '.trigger3' ).on( 'click', function ()
{
  //alert( 'hh' );
} );

// Back to TOP FUNNCTIONALITY

$(window).scroll(function(){
	if(document.body.scrollTop > 1500){
$('#top').css('display','unset');
	}else{
		$('#top').css('display','none');
	}
});
$('#top').on('click',function(){
	 $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
