document.getElementById("open-modal-btn").addEventListener("click", function () {
    document.getElementById("log-modal").classList.add("open")
    document.getElementById("container-vid").classList.add("not-vid")
})
document.getElementById("close-my-modal-btn").addEventListener("click", function () {
    document.getElementById("log-modal").classList.remove("open")
    document.getElementById("container-vid").classList.remove("not-vid")
})

var sigin = true;
document.getElementById("in-up").addEventListener("click", function () {
    if (sigin) {
        document.getElementById("t-in-up").classList.add("in")
        sigin = false
    }
    else {
        document.getElementById("t-in-up").classList.remove("in")
        sigin = true
    }
})