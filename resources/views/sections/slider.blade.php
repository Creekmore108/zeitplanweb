
 <style>
      .sliderId {
        width: 300px;
        margin: auto;
        text-align: center;
        position: relative;
        height: 100px;
      }
      .sliderId svg,
      .sliderId input[type=range] {
        position: absolute;
        left: 0;
        bottom: 0;
      }
      input[type=number] {
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
        -moz-appearance: textfield;
      }
    
      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
      }
      input[type=number]:invalid,
      input[type=number]:out-of-range {
        border: 2px solid #e60023;
      }
      input[type=range] {
        -webkit-appearance: none;
        width: 100%;
      }
      input[type=range]:focus {
        outline: none;
      }
      input[type=range]:focus::-webkit-slider-runnable-track {
        background: #1da1f2;
      }
      input[type=range]:focus::-ms-fill-lower {
        background: #1da1f2;
      }
      input[type=range]:focus::-ms-fill-upper {
        background: #1da1f2;
      }
      input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 5px;
        cursor: pointer;
        animate: 0.2s;
        background: #1da1f2;
        border-radius: 1px;
        box-shadow: none;
        border: 0;
      }
      input[type=range]::-webkit-slider-thumb {
        z-index: 2;
        position: relative;
        box-shadow: 0px 0px 0px #000;
        border: 1px solid #1da1f2;
        height: 18px;
        width: 18px;
        border-radius: 25px;
        background: #a1d0ff;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -7px;
      }
      input[type=range]::-moz-range-track {
        width: 100%;
        height: 5px;
        cursor: pointer;
        animate: 0.2s;
        background: #1da1f2;
        border-radius: 1px;
        box-shadow: none;
        border: 0;
      }
      input[type=range]::-moz-range-thumb {
        z-index: 2;
        position: relative;
        box-shadow: 0px 0px 0px #000;
        border: 1px solid #1da1f2;
        height: 18px;
        width: 18px;
        border-radius: 25px;
        background: #a1d0ff;
        cursor: pointer;
      }
      input[type=range]::-ms-track {
        width: 100%;
        height: 5px;
        cursor: pointer;
        animate: 0.2s;
        background: transparent;
        border-color: transparent;
        color: transparent;
      }
      input[type=range]::-ms-fill-lower,
      input[type=range]::-ms-fill-upper {
        background: #1da1f2;
        border-radius: 1px;
        box-shadow: none;
        border: 0;
      }
      input[type=range]::-ms-thumb {
        z-index: 2;
        position: relative;
        box-shadow: 0px 0px 0px #000;
        border: 1px solid #1da1f2;
        height: 18px;
        width: 18px;
        border-radius: 25px;
        background: #a1d0ff;
        cursor: pointer;
      }
    </style>
  
    <div class="sliderId">
      <span>Users: <input type="number" value="3" min="1" max="10"/>
      Total: $<input type="number" id="total" value="38" min="1" max="56" /></span>
      <input value="3" min="1" max="10" step="1" type="range" /> 
      
      <svg width="100%" height="25">
        <line x1="4" x2="520" stroke="#212121" stroke-width="20" stroke-dasharray="1 31"></line>
      </svg>
    </div>
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