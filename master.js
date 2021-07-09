

var flag = true;
function toggleLights() {
  var x = document.getElementsByTagName("BODY")[0];
  x.style.backgroundColor = flag ? "white" : "";
  flag= !flag;
};
