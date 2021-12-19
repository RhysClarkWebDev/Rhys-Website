


let url = window.location.href;

document.getElementById('facebookSharer').onclick = socialSharerFacebook();
document.getElementById('twitterSharer').onclick = socialSharerTwitter();


function socialSharerFacebook (){
  let facebookShareLink = 'https://www.facebook.com/sharer/sharer.php?u=';
  document.getElementById("facebookSharer").href = facebookShareLink + url;
}


function socialSharerTwitter(){
  let twitterShareLink = "https://twitter.com/intent/tweet?text=Check%20out%20this%20awesome%20blog!%0A%0A%3C";
  document.getElementById("twitterSharer").href = twitterShareLink + url;
}
