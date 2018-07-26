// vars
let result = document.querySelector('.result'),
img_result = document.querySelector('.img-result'),
img_w = document.querySelector('.img-w'),
img_h = document.querySelector('.img-h'),
options = document.querySelector('.options'),
save = document.querySelector('.save'),
cropped = document.querySelector('.cropped'),
dwn = document.querySelector('.download'),
upload = document.querySelector('#file-input'),
cropper = '';

// on change show image with crop options
upload.addEventListener('change', (e) => {
  if (e.target.files.length) {
    // start file reader
    const reader = new FileReader();
    reader.onload = (e)=> {
      if(e.target.result){
        // create new image
        let img = document.createElement('img');
        img.id = 'image';
        img.src = e.target.result;
        // clean result before
        result.innerHTML = '';
        // append new image
        result.appendChild(img);
        // show save btn and options
        save.classList.remove('hide');
        options.classList.remove('hide');
        // init cropper
        cropper = new Cropper(img);
      }
    };
    reader.readAsDataURL(e.target.files[0]);
  }
});

// save on click
save.addEventListener('click',(e)=>{
  e.preventDefault();
  // get result to data uri
  let imgSrc = cropper.getCroppedCanvas({
    width: img_w.value // input value
  }).toDataURL();
  // remove hide class of img
  cropped.classList.remove('hide');
  img_result.classList.remove('hide');
  // show image cropped
  cropped.src = imgSrc;

  cropped.id = "image";
  
  document.getElementById("transbox").innerHTML = "";
  
    document.getElementById("rotate").innerHTML = "";
    var x = document.createElement("BUTTON");
    var t = document.createTextNode("Rotate");
    x.appendChild(t);
    x.setAttribute("id", "button");
    x.classList.add("btn");
    document.getElementById("rotate").appendChild(x);
    
    
    var angle = 0,
    img = document.getElementById('rotate1');
    document.getElementById('button').onclick = function() {
    angle = (angle + 90) % 360;
    img.className = "rotate" + angle;
    }

  
  let temp0 = imgSrc;
  var x = document.createElement("IMG");
    x.setAttribute("src", temp0);
    x.classList.add("img0");
    x.setAttribute("alt", "image");
    document.getElementById("transbox").appendChild(x);

    x.addEventListener('click', function(){
      cropped.classList.remove('pic1');
      cropped.classList.remove('pic2');
      cropped.classList.remove('pic3');
      cropped.classList.remove('pic4');
      cropped.classList.remove('pic5');
      cropped.classList.add('pic0');
      //cropped.src = "https://www.w3schools.com/w3css/img_forest.jpg";
    });

  let temp1 = imgSrc;
  var x = document.createElement("IMG");
    x.setAttribute("src", temp1);
    x.classList.add("img1");
    x.setAttribute("alt", "image");
    document.getElementById("transbox").appendChild(x);

    x.addEventListener('click', function(){
      cropped.classList.remove('pic2');
      cropped.classList.remove('pic3');
      cropped.classList.remove('pic4');
      cropped.classList.remove('pic5');
      cropped.classList.remove('pic6');
      cropped.classList.add('pic1');
      //cropped.src = "https://www.w3schools.com/w3css/img_forest.jpg";
    });

  
  let temp2 = imgSrc;
  var x = document.createElement("IMG");
    x.setAttribute("src", temp2);
    x.classList.add("img2");
    x.setAttribute("alt", "image");
    document.getElementById("transbox").appendChild(x);

    x.addEventListener('click', function(){
      cropped.classList.remove('pic1');
      cropped.classList.remove('pic3');
      cropped.classList.remove('pic4');
      cropped.classList.remove('pic5');
      cropped.classList.remove('pic6');
      cropped.classList.add('pic2');
      //cropped.src = "https://www.w3schools.com/w3css/img_forest.jpg";
    });
  
  let temp3 = imgSrc;
  var x = document.createElement("IMG");
    x.setAttribute("src", temp3);
    x.classList.add("img3");
    x.setAttribute("alt", "image");
    document.getElementById("transbox").appendChild(x);

    x.addEventListener('click', function(){
      cropped.classList.remove('pic1');
      cropped.classList.remove('pic2');
      cropped.classList.remove('pic6');
      cropped.classList.remove('pic4');
      cropped.classList.remove('pic5');
      cropped.classList.add('pic3');
      //cropped.src = "https://www.w3schools.com/w3css/img_forest.jpg";
    });

  let temp4 = imgSrc;
  var x = document.createElement("IMG");
    x.setAttribute("src", temp4);
    x.classList.add("img4");
    x.setAttribute("alt", "image");
    document.getElementById("transbox").appendChild(x);

    x.addEventListener('click', function(){
      cropped.classList.remove('pic1');
      cropped.classList.remove('pic2');
      cropped.classList.remove('pic3');
      cropped.classList.remove('pic6');
      cropped.classList.remove('pic5');
      cropped.classList.add('pic4');
      //cropped.src = "https://www.w3schools.com/w3css/img_forest.jpg";
    });

  let temp5 = imgSrc;
  var x = document.createElement("IMG");
    x.setAttribute("src", temp5);
    x.classList.add("img5");
    x.setAttribute("alt", "image");
    document.getElementById("transbox").appendChild(x);

    x.addEventListener('click', function(){
      cropped.classList.remove('pic1');
      cropped.classList.remove('pic2');
      cropped.classList.remove('pic3');
      cropped.classList.remove('pic4');
      cropped.classList.remove('pic6');
      cropped.classList.add('pic5');
      //cropped.src = "https://www.w3schools.com/w3css/img_forest.jpg";
    });
  
  
  dwn.classList.remove('hide');
  dwn.download = 'imagename.png';
  dwn.setAttribute('href',imgSrc);
});