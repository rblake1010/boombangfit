



$(document).ready(function() {


$('.fancybox').fancybox();



if($('body').find('.myProfile_stage2')){
var currPercent = $('span.active').parent().find('input').val();
Individualmeter(currPercent);




}else {

    
}


function meter() {

//Progress Bar Code
var myPer = 75;
$( "#progressbar" ).progressbar({
      value: false
  }).next().html('<strong class="example">' + myPer + '%' + '</strong>' + ' of Total information complete')
    .css("display", "block");

//Progress Bar Animation
function progress() {
     var progressbar = $( "#progressbar" )
      var val = progressbar.progressbar("value") || 0;
      progressbar.progressbar( "value", val + 2 );
 
      if ( val < myPer ) {
        setTimeout( progress, 10 );
      }
 }
 setTimeout( progress, 2500 );

//Progress Bar Number Animation
    $({value: 0}).animate({value: myPer}, {
        duration: 2500,
        easing:'swing',
        step: function() {
            $('.example').text(Math.ceil(this.value) + '%');
            $('#progressbar').val(Math.ceil(this.value));
        },
        complete: function() {
            
        },  

});

}
meter();




function Individualmeter(currPercent) {

var myPer = currPercent;

$( "#progressbar" ).progressbar({
      value: false
  }).next().html('<strong class="example">' + myPer + '%' + '</strong>' + ' of Total information complete')
    .css("display", "block");


function progress(event) {
    
     var progressbar = $( "#progressbar" )
      var val = progressbar.progressbar("value") || 0;
      progressbar.progressbar( "value", val + 2 );
 
      if ( val < myPer ) {
        setTimeout( progress, 10 );
      }
 }
 setTimeout( progress, 2500 );

// Animate the element's value:
  
  //Progress Bar Number Animation
    $({value: 0}).animate({value: myPer}, {
        duration: 2500,
        easing:'swing',
        step: function() {
            $('.example').text(Math.ceil(this.value) + '%');
            $('#progressbar').val(Math.ceil(this.value));
        },
        complete: function() {
            
        },  

});

}


$('.myProfile_stage2 .icon').mouseenter(function(event) {

$('span.active').removeClass('active');
$(this).next('span').addClass('active');
var currPercent = $(this).find('.knob').val();
Individualmeter(currPercent);
});


$('.myProfile .knob').each(function(){
var toolPercent = $(this).val();
$(this).closest('.icon').attr('title', toolPercent + '%');

});
$('.icon').tooltip();





 
           


 				$(".knob").knob({
                    change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        //console.log(this.$.attr('value'));
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : ", this);
                    },
                    /*format : function (value) {
                        return value + '%';
                    },*/
                    draw : function () {


			
                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            this.cursorExt = 0.3;

                            var a = this.arc(this.cv)  // Arc
                                , pa                   // Previous arc
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            if (this.o.displayPrevious) {
                                pa = this.arc(this.v);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;


                        }
                    }
                });



	
});