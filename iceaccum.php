<?php /* Template Name: Example Template */ ?>

<!DOCTYPE html>
<html>
    <head>
      <style>
        #main {
          max-width: 100vw;
        }

        #test-img {
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            object-fit: contain !important;
            box-shadow: 2vh !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        #pic-slider {
            display: block !important;
            width: 60vw !important;
            margin-left: auto !important;
            margin-right: auto !important;
            background-color: #DCDCDC !important;
            z-index: 10 !important;
            border-radius: 10% !important;
        }
        
        #picture-box {
            text-align: center !important;
            position: relative !important;
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            margin-top: 2vh !important;
            width: 60vw !important;
            height: 80vh !important;
            border: 2px solid black !important;
            box-shadow: 2vh !important;
        }
        
        #button-container {
        	position: absolute !important;
        	top: 83% !important;
        	left: 74% !important;
          width: 22% !important;
        }
        
        .currentPos {
          margin-top: 2vh !important;
          display: block !important;
          margin-left: auto !important;
          margin-right: auto !important;
          text-align: center !important;
        }
        
        #currentDate {
          font-weight: bold !important;
          text-align: center !important;
        }

        .fas {
          padding-left: 2% !important;
          padding-right: 2% !important;
          clear: left !important;
        } 

        .fas:hover {
          color: #2C99CB !important;
          cursor: pointer !important;
        }

        .rangeslider {
          -webkit-appearance: none !important;
          height: 13px !important;
          border-radius: 6px !important;
          outline: none !important;
          padding: 0 !important;
          margin: 0 !important;
          color: black !important;
        }


        /* Dropdown */

        .dropdown {
          text-align: center !important;
          position: relative !important;
          display: block !important;
          margin-left: auto !important;
          margin-right: auto !important;
          margin-top: 2vh !important;
          width: 35vw !important;
          box-shadow: 2vh !important;
        }

        .dropdown-menu {
          border: none !important;
          text-align: center !important;
        }

        .dropdown-menu a {
          text-align: center !important;
          display: inline-block !important;
          white-space: normal !important;
          width: 100% !important;
          word-wrap: break-word !important;
        }

        .dropdown-toggle::after { 
          color: black !important;
        }

        .dropdown-item {
          color: black !important;
        }

        .dropdown {
          color: black !important;
        }

        /*.show {
          background-color: #1e0dad;
        }*/

        .dropdown-toggle p {
          display: inline-block !important;
          color: black !important;
        }

        .cf-dropdown-first {
            text-align: center !important;
            width: 100% !important;
        }

        .cf-dropdown, .cf-dropdown-menu {
            margin-top: 1vh !important;
            text-align: center !important; 
            left: 50% !important;
            right: auto !important;
            text-align: center !important;
            transform: translate(-50%, 0) !important;
        }
        @media only screen and (max-width: 576px) {
            #picture-box {
                height: 30vh !important;
                width: 80vw !important;
            } 
            #button-container {
        	      position: absolute !important;
        	      top: 150% !important;
        	      left: 0% !important;
                width: 100% !important;
            }
            /*.fa-pause, .fa-play, .fa-stop, .fa-forward, .fa-fast-forward {
              height: auto;
              width: 50%;
            } */
        }
        @media only screen and (max-width: 768px) and (min-width: 577px) {
          #picture-box {
                height: 30vh !important;
                width: 80vw !important;
            } 
            #button-container {
        	      position: absolute !important;
        	      top: 140% !important;
        	      left: 0% !important;
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 991px) and (min-width: 769px) {
          #picture-box {
                height: 30vh !important;
                width: 80vw !important;
            } 
            #button-container {
        	      position: absolute !important;
        	      top: 150% !important;
        	      left: 0% !important;
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 1200px) and (min-width: 992px) {
            #picture-box {
                height: 25vh !important;
                width: 45vw !important;
            }
            #button-container {
            	position: absolute !important;
            	top: 75% !important;
            	left: 58% !important;
              width: 37% !important;
            }
        }
        @media only screen and (max-width: 1400px) {
        }

      </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
      <script src="https://kit.fontawesome.com/dffdf6b1bf.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section id = "main">
            <div class="dropdown">
                <button class="btn btn-light cf-button dropdown-toggle cf-dropdown-first" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  CONUS
                </button>
                <div class="dropdown-menu cf-dropdown-menu" aria-labelledby="dropdownMenuButton" id = "dropdown-regions">
                  <!-- <a class="dropdown-item" id = "CONUS-button">CONUS</a>
                  <a class="dropdown-item" id = "AR-button">AR</a>
                  <a class="dropdown-item" id = "OK-button">OK</a> -->
                </div>
            </div>
            <!-- <div id = "region-buttons">
              <button id = "CONUS-button"> CONUS </button>
              <button id = "AR-button"> AR </button>
              <button id = "OK-button"> OK </button>
            </div> -->
            <div id = "picture-box">
                <img id = "test-img" />
                <div id = "button-container">
                  <div class = "fas fa-pause fa-2x" id = "buttonPlay"></div>
                  <div class = "fas fa-stop fa-2x" id = "buttonStop"></div>
                  <div class = "fas fa-forward fa-2x" id = "button1"></div>
                  <div class = "fas fa-fast-forward fa-2x" id = "button2"></div>
                </div>
                <!-- <div class = "box center pause"></div> -->
            </div>
            <div class = "currentPos">
              <p id = "currentDate"> </p>
            </div>
            <div class="rangeslider">
                <input id = "pic-slider" type="range" min="0" value ="0" max="">
            </div>
        </section>
        <footer>

        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/dffdf6b1bf.js" crossorigin="anonymous"></script>
    </body>
</html>

<?php
$request = wp_remote_get( 'https://spidimaps.s3-us-east-2.amazonaws.com/qpf_validtimes.json' );
$request2 = wp_remote_get( 'https://spidimaps.s3-us-east-2.amazonaws.com/regions.json' );

if( is_wp_error( $request ) ) {
	return false; // Bail early
}

$body = wp_remote_retrieve_body( $request );
$body2 = wp_remote_retrieve_body( $request2 );

$data2 = json_decode( $body );

function javascriptCall($result, $result2) {
  echo "<script>
  console.log('Debug Objects: " . $result . "' );
  var timeSplit = $result;
  console.log(timeSplit);
  var timeKeys = Object.keys(timeSplit);
  var timeValues = Object.values(timeSplit);
  console.log(timeKeys);
  console.log(timeValues);
  var responseBackSlash3 = [];
  for(var i = 0; i < timeKeys.length; i++) {
    responseBackSlash3.push(
      {
        date: timeKeys[i],
        src: timeValues[i]
      }
    )
  }
  for(var j = 0; j < responseBackSlash3.length; j++) {
    console.log(responseBackSlash3[j].src);
    responseBackSlash3[j].src = responseBackSlash3[j].src.replace('REGION', 'CONUS');
    responseBackSlash3[j].src = responseBackSlash3[j].src.replace('qpf', 'iceaccum');
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
  console.log(responseBackSlash3);

        //Picture Looping
        var testImg = document.getElementById('test-img');
        var buttonSlow = document.getElementById('button1');
        var buttonFast = document.getElementById('button2');
        var buttonStop = document.getElementById('buttonStop');
        var buttonPlay = document.getElementById('buttonPlay');
        var picSlider = document.getElementById('pic-slider');
        var currentDateText = document.getElementById('currentDate');
        var dropdownButton = document.getElementById('dropdownMenuButton');

        var pictureObject;
        pictureObject = responseBackSlash3;

        console.log(pictureObject);

        buttonPlay.addEventListener('click', (e) => {
            switch (buttonPlay.className)  {
              case 'fas fa-pause fa-2x':
                stopFunction();
                buttonPlay.className = 'fas fa-play fa-2x';
                break;
              case 'fas fa-play fa-2x':
                stopFunction();
                buttonPlay.className = 'fas fa-pause fa-2x';
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
            //console.log(testImg.src);
            for(var j = 0; j < pictureObject.length; j++) {
                if(pictureObject[j].src == testImg.src) {
                    //console.log('found')
                    i = j;
                    break;
                }
                i;
            }
            i;
            //console.log(i);
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
            buttonPlay.className = 'fas fa-play fa-2x';
        }

        function updateSlider() {
            picSlider.max = pictureObject.length - 1;
            console.log(picSlider.max);
        }

        updateSlider();

        // Dropdown Functions //
        console.log('Current Regions: " . $result2 . "' );
        var regionSplit = $result2;
        var regionKeys = Object.keys(regionSplit);
        var regionValues = Object.values(regionSplit);
        var regionArray = [];
        for(var k = 0; k < regionKeys.length; k++) {
          regionArray.push(
            {
              regionFull: regionKeys[k],
              regionMin: regionValues[k]
            }
          )
        }
        console.log(regionArray);

        var dropdownRegions = document.getElementById('dropdown-regions');
        for(var u = 0; u < regionArray.length; u++) {
          var aTag = document.createElement('a');
          var node = document.createTextNode(regionArray[u].regionMin);
          aTag.appendChild(node);
          var aTagId = regionArray[u].regionMin + 'RegionButton';
          aTag.setAttribute('id', aTagId);
          aTag.setAttribute('class', 'dropdown-item');
          dropdownRegions.appendChild(aTag);
        }

        var items = [];
        function getElementsByIdStartsWith(container, prefix) {
            var myPosts = document.getElementById(container).getElementsByTagName('a');
            console.log(myPosts);
            for (var i = 0; i < myPosts.length; i++) {
                //omitting undefined null check for brevity
                if (myPosts[i].id.includes(prefix)) {
                    items.push({
                      html: myPosts[i],
                      id: myPosts[i].id
                    });
                }
            }
            return items;
        }
        getElementsByIdStartsWith('dropdown-regions', 'RegionButton');
        console.log(items);
        for(var j = 0; j < items.length; j++) {
          console.log(items[j]);
          items[j].html.addEventListener('click', (e) => {
            console.log(e);
            for(var x = 0; x < pictureObject.length; x++) {
              var picSrc = pictureObject[x].src;
              var srcSubString = picSrc.substring(
                picSrc.indexOf('_') + 1, 
                picSrc.lastIndexOf('_')
              );
              console.log(srcSubString);
              var idSplit = e.target.id.split('RegionButton');
              var idSplitFinal = idSplit[0];
              console.log(idSplitFinal);
              pictureObject[x].src = pictureObject[x].src.replace(srcSubString, idSplitFinal);
              stopFunction();
              buttonPlay.className = 'fas fa-pause fa-2x';
              onloadFunction();
              dropdownButton.innerText = idSplitFinal
            }
          })
        }

        picSlider.addEventListener('change', (e) => {
            console.log(e.target);
            testImg.src = pictureObject[e.target.value].src;
            currentDateText.innerText = pictureObject[e.target.value].date
            stopFunction();
            buttonPlay.className = 'fas fa-play fa-2x';
        })
  </script>";
}

javascriptCall($body, $body2);

?>


