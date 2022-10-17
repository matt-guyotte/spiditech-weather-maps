var testImg = document.getElementById('test-img');

function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); // New request object
    oReq.onload = function() {
      //Data Treatment
        console.log(this.responseText);
        console.log(this.responseText.split("console.log")); 
        var responseFirstSplit = this.responseText.split("console.log");
        var responseSecondSplit = responseFirstSplit[1].split(";</script>null");
        var responseBracketSplit1 = responseSecondSplit[0].split("({");
        var responseBracketSplit2 = responseBracketSplit1[1].split("})")
        var responseListSplit = responseBracketSplit2[0].split(",");
        var responseBackSlash = []
        for(var i = 0; i < responseListSplit.length; i++) {
          var replaceCurrent = responseListSplit[i].replace(/\\/g, '');
          console.log(replaceCurrent);
          var replaceCurrentString = replaceCurrent.toString();
          console.log(replaceCurrentString)
          responseBackSlash.push(replaceCurrentString); 
        }
        var responseBackSlash2 = [];
        for(var j = 0; j < responseBackSlash.length; j++) {
          var backsplit = responseBackSlash[j].split("\\")
          console.log(backsplit);
          responseBackSlash2.push(backsplit);
        }
        //console.log(responseBackSlash2);
        var responseBackSlash3 = [];
        for(var k = 0; k < responseBackSlash2.length; k++) {
          var a2s = responseBackSlash2[k].toString();
          var timeSplit = a2s.split(":")
          timeSplit.splice(1, 1);
          timeSplit[1] = "https:" + timeSplit[1];
          var quoteSplit1 = timeSplit[0].split('"');
          var quoteSplit2 = timeSplit[1].split('"');
          console.log(quoteSplit1);
          console.log(quoteSplit2);
          var quoteSplitFinal1 = quoteSplit1[1];
          var quoteSplitFinal2 = quoteSplit2[0];
          console.log(quoteSplitFinal1);

          var quoteSplitString1 = quoteSplitFinal1;
          var quoteSplitString2 = quoteSplitFinal2.toString();
          responseBackSlash3.push(
            {
              date: quoteSplitString1,
              src: quoteSplitString2
            }
          );
        }
        for(var j = 0; j < responseBackSlash3.length; j++) {
          console.log(responseBackSlash3[j].src);
          responseBackSlash3[j].src = responseBackSlash3[j].src.replace("REGION", "CONUS");
          console.log(responseBackSlash3[j].src);
        }

        function compare( a, b ) {
          if ( a.date < b.date ){
            return -1;
          }
          if ( a.date > b.date){
            return 1;
          }
          return 0;
        }

        responseBackSlash3.sort(compare);

        //Picture Looping
        var testImg = document.getElementById('test-img');
        var buttonSlow = document.getElementById('button1');
        var buttonFast = document.getElementById('button2');
        var buttonStop = document.getElementById('buttonStop');
        var buttonPlay = document.getElementById('buttonPlay');
        var picSlider = document.getElementById('pic-slider');
        var currentDateText = document.getElementById('currentDate');


        var dropdownButton = document.getElementById('dropdownMenuButton')
        var regionCONUS = document.getElementById('CONUS-button');
        var regionAR = document.getElementById('AR-button');
        var regionOK = document.getElementById('OK-button');

        var pictureObject;
        pictureObject = responseBackSlash3;

        console.log(pictureObject);

        buttonPlay.addEventListener('click', (e) => {
            switch (buttonPlay.className)  {
              case "fas fa-pause fa-3x":
                stopFunction();
                buttonPlay.className = "fas fa-play fa-3x";
                break;
              case "fas fa-play fa-3x":
                stopFunction();
                buttonPlay.className = "fas fa-pause fa-3x";
                playTimeout = setInterval(playFunction, 500);
                break;
            }
        })

        buttonSlow.addEventListener('click', () => {
            stopFunction();
            playTimeout = setInterval(playFunction, 1000);
        })

        buttonFast.addEventListener('click', () => {
            stopFunction();
            playTimeout = setInterval(playFunction, 200);
        })

        buttonStop.addEventListener('click', () => {
            stopFunction();
        })

        function onloadFunction() {
            console.log(pictureObject.length);
            testImg.src = pictureObject[0].src;
            secondLoopPlay()
        };

        onloadFunction();

        var playTimeout;

        function secondLoopPlay() {    
            playTimeout = setInterval(playFunction, 500)
        }

        function playFunction() {
            var i;
            console.log(testImg.src);
            for(var j = 0; j < pictureObject.length; j++) {
                if(pictureObject[j].src == testImg.src) {
                    console.log('found')
                    i = j;
                    break;
                }
                i;
            }
            i;
            console.log(i);
            i++;
            if(i == pictureObject.length) {
                i = 0;
            }
            testImg.src = pictureObject[i].src;
            picSlider.value = i;
            currentDateText.innerText = pictureObject[i].date
        }

        function stopFunction() {
            clearInterval(playTimeout);
            buttonPlay.className = "fas fa-play fa-3x";
        }

        function updateSlider() {
            picSlider.max = pictureObject.length - 1;
            console.log(picSlider.max);
        }

        updateSlider();

        regionCONUS.addEventListener('click', () => {
          for(var x = 0; x < pictureObject.length; x++) {
            pictureObject[x].src = pictureObject[x].src.replace("OK", "CONUS");
            pictureObject[x].src = pictureObject[x].src.replace("AR", "CONUS");
            stopFunction();
            buttonPlay.className = "fas fa-pause fa-3x";
            onloadFunction();
            dropdownButton.innerText = "CONUS"
          }
        })

        regionAR.addEventListener('click', () => {
          console.log(pictureObject);
          for(var y = 0; y < pictureObject.length; y ++) {
            pictureObject[y].src = pictureObject[y].src.replace("CONUS", "AR");
            pictureObject[y].src = pictureObject[y].src.replace("OK", "AR");
            stopFunction();
            buttonPlay.className = "fas fa-pause fa-3x";
            onloadFunction();
            dropdownButton.innerText = "AR"
          }
        })

        regionOK.addEventListener('click', () => {
          for(var z = 0; z < pictureObject.length; z++) {
            pictureObject[z].src = pictureObject[z].src.replace("CONUS", "OK");
            pictureObject[z].src = pictureObject[z].src.replace("AR", "OK");
            stopFunction();
            buttonPlay.className = "fas fa-pause fa-3x";
            onloadFunction();
            dropdownButton.innerText = "OK"
          }
        })

        picSlider.addEventListener('change', (e) => {
            console.log(e.target);
            testImg.src = pictureObject[e.target.value].src;
            currentDateText.innerText = pictureObject[e.target.value].date
            stopFunction();
            buttonPlay.className = "fas fa-play fa-3x";
        })
            };
    oReq.open("get", "https://johnl142.sg-host.com/public_html/wp-content/themes/Divi/php/weatherCallPREC.php", true);
    oReq.send();