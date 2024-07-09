document.addEventListener('DOMContentLoaded', function () {
    let textElement = document.getElementById("to-copy");
    let copyBtn = document.getElementById("copy-btn");

    copyBtn.onclick = function () {
        let textToCopy = (textElement.textContent || textElement.innerText).trim();
        navigator.clipboard.writeText(textToCopy).then(function() {
            console.log('Text copied to clipboard');
        }).catch(function(error) {
            console.error('Error copying text: ', error);
        });
    };
});
