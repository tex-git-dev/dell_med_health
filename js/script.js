var app = {
  MData:null, 
  SelecteM:null,  
  MIN:null,
  HR:null,
  SData:null,
  PageComplete:null, 
  cArrayT:[],
  cArrayN:[],
  cArrayT1:[],
  cArrayN1:[],
  WCList1:null,
  WCList2:null,
  SearchKey:null,
	init:function(){
		this.preLoader();
		this.Anim();
    this.Events();
	},
  DataSave:function(dataSave){
    // data save in recods table.
      $.post( "dataSave.php", dataSave, 
        function( data ) {  
        }, "json");
     //  console.log(dataSave)

  },
  MDataPopulate:function(){
    // this function used for data populate for home page menu.
    var loc1 = app.MData[app.SelecteM];
    var loc01 = {'m1':[1,26],'m2':[1,28],'m3':[1,55]}
    $(".menus .HR").html(loc01[app.SelecteM][0]);
    $(".menus .MIN").html(loc01[app.SelecteM][1]);
    $(".menus .lG2 .progress-bar").css({"width":loc1['complete']+"%"});
    $(".menus .lG2 .mP").text(loc1['complete']);
    var i=0;
    $.each(app.MData,function(v1,k1){ 
      i++;
      // console.log(k1.complete)
            if(k1.complete == '100') {
               $(".btnM"+i).addClass('complete');
              $(".btnM"+i+" .alert1").text('Revisit');
            }else if (k1.complete == '0') {
               $(".btnM"+i+" .alert1").text('Begin');
               $(".btnM"+i).removeClass('complete');
             }else{
              $(".btnM"+i+" .alert1").text('Continue');
              $(".btnM"+i).removeClass('complete');
             }
            $.each(k1,function(v2,k2){
		         if(v2 == "status"){
              $(".btnM"+i+" .small").text(k2)
          }
       })
    })
  },
  SDataPopulate:function(j){
    var loc1 = app.MData[app.SelecteM].sections;
    $(".MSection .lG2 .progress-bar").css({"width":loc1['s'+j]['complete']+"%"});
    $(".MSection .lG2 .mP").html(loc1['s'+j]['complete']+"%");
    $(".btnss").removeClass('act');
    $(".btnS"+j).addClass('act');
    $(".MSection .mn").html(j);
    $(".MSection .clickS").hide();
    $(".MSection .clickS"+j).show().removeClass('hide');
    var i=0;
    $.each(loc1,function(v,k){
      i++;
        if(k.complete == '100') {
          $(".btnS"+i).addClass('complete');
          $(".btnS"+i+" .alert1").text('Revisit');
        }else if (k.complete == '0') {
           $(".btnS"+i).removeClass('complete');
          $(".btnS"+i+" .alert1").text('Begin');
        }else{
           $(".btnS"+i).removeClass('complete');
          $(".btnS"+i+" .alert1").text('Continue');
        }
     
    })
    if (app.SelecteM == 'm1') {
      var timeFixed =[[00,02],[00,10],[00,10],[00,10],[00,12],[00,07],[00,15],[00,15],[00,05]];
    
    $(".MSection .HR").html(timeFixed[j-1][0]);
    $(".MSection .MIN").html(timeFixed[j-1][1]);
        if (j==9){
           $(".outc").hide();
        }else{
          $(".outc").show();
        }
    }else if (app.SelecteM == 'm2') {
      var timeFixed =[[00,04],[00,10],[00,10],[00,10],[00,12],[00,07],[00,15],[00,15],[00,05]];
    
    $(".MSection .HR").html(timeFixed[j-1][0]);
    $(".MSection .MIN").html(timeFixed[j-1][1]);
        if (j==1) {
           $(".outc").hide();
        }else if (j==8) {
           $(".outc").hide();
        }else{
          $(".outc").show();
        }
    }else if (app.SelecteM == 'm3') {
      var timeFixed = [[00,03],[00,10],[00,10],[00,10],[00,12],[00,07],[00,15],[00,15],[00,05]];
    
    $(".MSection .HR").html(timeFixed[j-1][0]);
    $(".MSection .MIN").html(timeFixed[j-1][1]);
      } 
  },

  Events:function(){ 
    $(".dis").click(function(e){
      $(this).hide();
    })
    $(".btns").click(function(e){
      var index = $(this).index();
      $("#module, .menus").hide();
      $("#section, .MSection").show();
      window.location="?id=m"+index+"/m"+index+"s1p1";
    });

    $(".allModule1 .btn, .allModule2 .btn, .allModule3 .btn").click(function(e){
      $(".allModule1 .btn, .allModule2 .btn, .allModule3 .btn").removeClass('act1');

      var index = $(this).text();
      if (index == 'Module 1') {
          $('._m1, ._m2, ._m3').hide();
          $('._m1').show();
          app.SelecteM = 'm1';
          $(".allModule1 .btn").eq(0).addClass('act1');
          $(".allModule2 .btn").eq(0).addClass('act1');
          $(".allModule3 .btn").eq(0).addClass('act1');
      }else if (index == 'Module 2') {
        $('._m1, ._m2, ._m3').hide();
        $('._m2').show();
        app.SelecteM = 'm2';
        $(".allModule1 .btn").eq(1).addClass('act1');
        $(".allModule2 .btn").eq(1).addClass('act1');
        $(".allModule3 .btn").eq(1).addClass('act1');
      }else if (index == 'Module 3') {
        $('._m1, ._m2, ._m3').hide();
        $('._m3').show();
        app.SelecteM = 'm3';
        $(".allModule1 .btn").eq(2).addClass('act1');
        $(".allModule2 .btn").eq(2).addClass('act1');
        $(".allModule3 .btn").eq(2).addClass('act1');

      }
      
      app.SDataPopulate(1);
      var hh = $(".op").height();
      $(".r2").css({'min-height':hh+'px'});

    });
    $(".btns").hover(function(e){
       var index = $(this).index();
        $(".menus .mn").html(index);
        $(".menus .clickM").hide();
        $(".menus .clickM"+index).show().removeClass('hide');
        $(".menus .btns").removeClass('act');
        $(".menus .btnM"+index).addClass('act');
        app.SelecteM='m'+index;
        app.MDataPopulate();
    });
    $("body").click(function(e){
      var loc0 = $(e.target).closest('.m').length;
      var loc1 = $(e.target ).closest('.section').length;
      if (loc0 == 0 && !loc1) {
          $(".MSection").hide();
          $(".disM").hide();
        //alert(loc0)
      }
      var loc2 = $(e.target).closest('.p').length;
      var loc3 = $(e.target ).closest('.mod').length;
      if (loc2 == 0 && !loc3) {
          $(".menus").hide();
          $(".disM").hide()
          // flip--;
      }
      var loc4 = $(e.target).closest('.mainFAQ').length;
      var loc5 = $(e.target ).closest('.faqBtn').length;
      if (loc4 == 0 && !loc5) {
          $(".FAQ").hide();
          $(".disF").hide();
      }
      var loc6 = $(e.target).closest('.mainSaerch').length;
      if (loc6 == 0) {
          $(".saerch").hide();
          $(".disS").hide()
      }
        //myModal

    });
   

	$(".btnss").click(function(e){
      var index = $(this).index();
      window.location="?id="+app.SelecteM+"/"+app.SelecteM+"s"+index+"p1";
    });

   
	$(".btnss").hover(function(e){
      var index = $(this).index();
      app.SDataPopulate(index);
    });

  },
  herf:function(v){
     window.location=v;
  },
  Alert:function(txt){
            $('.alerts').modal({
                    show: 'false'
              }); 
          $('.alerts h3').html(txt);

  },
  Anim:function(){
     var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       80,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
              // the callback is fired every time an animation is started
              // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
          }
        );
        wow.init();
  },
	preLoader:function(){
		setTimeout(function(){
          $('body').addClass('loaded');
          $('h1').css('color','#222222');
        }, 100);

	},
  WordC:function(list,id){
  //console.log(JSON.stringify(list));

       $("#"+id).jQCloud(list,{
        autoResize: true,
         colors: "#ffffff",
         delay: 1
       
      });
  }
}

var regex = /\s+/gi;
$(document).ready(function(){
      $('input').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
        $('.limit-input')
         .unbind('keyup change input paste')
         .bind('keyup change input paste',function(e){
              var $this = $(this);
              var val = $this.val().trim().replace(regex, ' ').split(' ').length;
              if(val<31){
                  e.preventDefault();
              }else{
                $(this).attr("maxlength",$this.val().length);
              }
          });
         $('.limit-input1')
         .unbind('keyup change input paste')
         .bind('keyup change input paste',function(e){
              var $this = $(this);
              var val = $this.val().trim().replace(regex, ' ').split(' ').length;
            //  console.log(val)
              if(val<31){
                  e.preventDefault();
              }else{
                $(this).attr("maxlength",$this.val().length);
              }
          });
    });
/*var width = $(window).width(), height = $(window).height();
$(window).resize(function()
{
  if($(window).width() != width && $(window).height() != height){
      alert(1)
     clearTimeout(this.id);
    this.id = setTimeout(app.doneResizing, 500);
}
    
})*/
/*window.addEventListener("orientationchange", function(e) {
  clearTimeout(this.id);
    this.id = setTimeout(app.doneResizing, 500);
}, false);*/
app.scroll= function(id,modal){
      $('html, body').animate({
          scrollTop: $('#'+id).offset().top
        }, 1000);

        $('#'+modal).modal({show: 'false'});
        $("body").css({"padding-right":"0px"});
        $("body").css("overflow",'visible');
        $(".modal-backdrop").hide();
}

app.topScroll=function(id){
    $('html, body').animate({
          scrollTop: $('.'+id).offset().top
        }, 1000);
}


app.qs = (function(a) {
    if (a == "") return {};
    var b = {};
    for (var i = 0; i < a.length; ++i)
    {
        var p=a[i].split('=', 2);
        if (p.length == 1)
            b[p[0]] = "";
        else
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
    }
    return b;
})(window.location.search.substr(1).split('&'));

