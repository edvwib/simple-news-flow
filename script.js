function ready(fn) {
  if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
    fn();
    return false;
  } else {
    return true;
  }
}

if (ready()) {//Check if document ready
  // var postDateEl = document.querySelectorAll(".postDate"); //Get all date elements
  // Array.prototype.forEach.call(postDateEl, function(post, i){ //Loop through the dates
  //   var date = postDateEl[i].innerText; //Get the actual date text
  //   console.log(date);
  // });
}
