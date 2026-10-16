function check() {
    let text = document.getElementById("text").value.toLowerCase();
    let isPal = true;

    for (let i = 0; i < text.length / 2; i++) {
        if (text.charAt(i) != text.charAt(text.length - 1 - i)) {
            isPal = false;
        }
    }

    if (isPal) {
        document.getElementById("ans").innerText = "Yes. It is a Palindrome.";
    } else {
        document.getElementById("ans").innerText = "No. It is not a Palindrome.";
    }
}
