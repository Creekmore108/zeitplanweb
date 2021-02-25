<script>
      (function() {
        var base = 35;
        var rate = 2;
        var total;
        var inputT = document.getElementById("total"); 
        let parent = document.querySelector(".sliderId");
        if(!parent) return;
        let rangeSlide = parent.querySelectorAll("input[type=range]");
        let numberSlide = parent.querySelectorAll("input[type=number]");
        
            rangeSlide.forEach(function(el) {
            el.oninput = function() {
                let slide1 = parseFloat(rangeSlide[0].value);
                numberSlide[0].value = slide1;
                total = (slide1 * rate) + base;
                inputT.setAttribute('value', total); 
                el_down.innerHTML =  
                   "Value = " + "'" + inputT.value + "'";
            }
        });

        numberSlide.forEach(function(el) {
            el.oninput = function() {
                let number1 = parseFloat(numberSlide[0].value);
                rangeSlide[0].value = number1;
                
            }
        });


      })();
    </script>