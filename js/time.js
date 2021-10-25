var countDownDate1 = new Date("Nov 4, 2021 23:59:59").getTime();
var countDownDate2 = new Date("Dec 22, 2021 23:59:59").getTime();
var countDownDate3 = new Date("Nov 23, 2021 23:59:59").getTime();
var countDownDate4 = new Date("Nov 12, 2021 23:59:59").getTime();
var countDownDate5 = new Date("Dec 30, 2021 23:59:59").getTime();
var countDownDate6 = new Date("Nov 20, 2021 23:26:05").getTime();
var countDownDate7 = new Date("Dec 16, 2021 23:59:59").getTime();
var countDownDate8 = new Date("Dec 21, 2021 23:59:59").getTime();
var countDownDate9 = new Date("Nov 1, 2021 23:59:59").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance1 = countDownDate1 - now;
          var distance2 = countDownDate2 - now;
          var distance3 = countDownDate3 - now;
          var distance4 = countDownDate4 - now;
          var distance5 = countDownDate5 - now;
          var distance6 = countDownDate6 - now;
          var distance7 = countDownDate7 - now;  
          var distance8 = countDownDate8 - now;
          var distance9 = countDownDate9 - now;

          // Time calculations for days, hours, minutes and seconds
          var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
          var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

          var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
          var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

          var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
          var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);

          var days4 = Math.floor(distance4 / (1000 * 60 * 60 * 24));
          var hours4 = Math.floor((distance4 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes4 = Math.floor((distance4 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds4 = Math.floor((distance4 % (1000 * 60)) / 1000);

          var days5 = Math.floor(distance5 / (1000 * 60 * 60 * 24));
          var hours5 = Math.floor((distance5 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes5 = Math.floor((distance5 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds5 = Math.floor((distance5 % (1000 * 60)) / 1000);

          var days6 = Math.floor(distance6 / (1000 * 60 * 60 * 24));
          var hours6 = Math.floor((distance6 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes6 = Math.floor((distance6 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds6 = Math.floor((distance6 % (1000 * 60)) / 1000);

          var days7 = Math.floor(distance7 / (1000 * 60 * 60 * 24));
          var hours7 = Math.floor((distance7 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes7 = Math.floor((distance7 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds7 = Math.floor((distance7 % (1000 * 60)) / 1000);

          var days8 = Math.floor(distance8 / (1000 * 60 * 60 * 24));
          var hours8 = Math.floor((distance8 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes8 = Math.floor((distance8 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds8 = Math.floor((distance8 % (1000 * 60)) / 1000);

          var days9 = Math.floor(distance9 / (1000 * 60 * 60 * 24));
          var hours9 = Math.floor((distance9 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes9 = Math.floor((distance9 % (1000 * 60 * 60)) / (1000 * 60));
          var seconds9 = Math.floor((distance9 % (1000 * 60)) / 1000);

            
          // Output the result in an element with id="demo"
          document.getElementById("item1").innerHTML = days1 + "d " + hours1 + "h "+ minutes1 + "m " + seconds1 + "s ";
          document.getElementById("item2").innerHTML = days2 + "d " + hours2 + "h "+ minutes2 + "m " + seconds2 + "s ";
          document.getElementById("item3").innerHTML = days3 + "d " + hours3 + "h "+ minutes3 + "m " + seconds3 + "s ";
          document.getElementById("item4").innerHTML = days4 + "d " + hours4 + "h "+ minutes4 + "m " + seconds4 + "s ";
          document.getElementById("item5").innerHTML = days5 + "d " + hours5 + "h "+ minutes5 + "m " + seconds5 + "s ";
          document.getElementById("item6").innerHTML = days6 + "d " + hours6 + "h "+ minutes6 + "m " + seconds6 + "s ";
          document.getElementById("item7").innerHTML = days7 + "d " + hours7 + "h "+ minutes7 + "m " + seconds7 + "s ";
          document.getElementById("item8").innerHTML = days8 + "d " + hours8 + "h "+ minutes8 + "m " + seconds8 + "s ";
          document.getElementById("item9").innerHTML = days9 + "d " + hours9 + "h "+ minutes9 + "m " + seconds9 + "s ";
          if(distance1 < 0){
            clearInterval(x);
            document.getElementById("item1").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }

          if(distance2 < 0){
            clearInterval(x);
            document.getElementById("item2").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }

          if(distance3 < 0){
            clearInterval(x);
            document.getElementById("item3").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }
          
          if(distance4 < 0){
            clearInterval(x);
            document.getElementById("item4").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }
          
          if(distance5 < 0){
            clearInterval(x);
            document.getElementById("item5").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }
          
          if(distance6 < 0){
            clearInterval(x);
            document.getElementById("item6").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }
          
          if(distance7 < 0){
            clearInterval(x);
            document.getElementById("item7").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }
          
          if(distance8 < 0){
            clearInterval(x);
            document.getElementById("item8").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }

          if(distance9 < 0){
            clearInterval(x);
            document.getElementById("item9").innerHTML = "EXPIRED";
            document.getElementById("sub").style.pointerEvents="none";
            document.getElementById("sub").style.cursor="default";
          }
          
          
        }, 1000);