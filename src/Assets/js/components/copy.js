let container = document.getElementsByClassName('file-container');
let copyBtn = document.getElementsByClassName('copy-btn');
let cuttextarea = document.getElementsByClassName('value-input');
let currentCopy;
let i;

for (i = 0; i < copyBtn.length; i++) {

    currentCopy = copyBtn[i].nextElementSibling.innerHTML;

    copyBtn[i].addEventListener("click", function () {

        /* Find Input */
        currentCopy = this.nextElementSibling;


        /* Select the text field */
        currentCopy.select();

        console.log(currentCopy);
        /* Copy the text inside the text field */
        document.execCommand('copy');

        /* Alert the copied text */
        alert("URL Copied: " + currentCopy.value);

    });

}