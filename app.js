window.addEventListener("load", bounce);

function bounce() {
  let textBox = document.getElementById("php");
  let form = document.getElementById("form");
  let promptBox = document.getElementById("phpBox");
  TweenLite.to(form, 1.5, { ease: Back.easeOut.config(3), x: "200%" });

  if (textBox.innerHTML != "") {
    console.log(textBox.Text);
    textBox.style.display = "block";
    promptBox.style.display = "block";
    form.style.display = "none  ";
  }
}
