var myIndex=0;
carousal();
function carousal(){
  var i;
  var x=document.getElementsByClassName("myslides");
  for(i=0;i<x.length;i++)
    {
      x[i].style.display="none";
    }
  myIndex++;
  if(myIndex>x.length)
    {
      myIndex=1;
    }
  x[myIndex-1].style.display = "block";  
    setTimeout(carousal, 2000);
}