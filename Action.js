var button1 = document.getElementById("forward");
 var output = document.getElementById("demo");
 output.innerHTML = button1.value;
 button1.oninput = function() {
 output.innerHTML = this.value;
}

var Left = document.getElementById("Left");
  var demo2 = document.getElementById("demo2");
  demo2.innerHTML = Left.value;
  Left.oninput = function() {
  demo2.innerHTML = this.value;
}

var Stop = document.getElementById("Stop");
  var demo3 = document.getElementById("demo3");
  demo3.innerHTML = Stop.value;
  Stop.oninput = function() {
  demo3.innerHTML = this.value;
}


var Right = document.getElementById("Right");
  var demo4 = document.getElementById("demo4");
  demo4.innerHTML = Right.value;
  Right.oninput = function() {
  demo4.innerHTML = this.value;
}

var backward = document.getElementById("backward");
  var demo5 = document.getElementById("demo5");
  demo5.innerHTML = backward.value;
  backward.oninput = function() {
  demo5.innerHTML = this.value;
}
