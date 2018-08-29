function main(quotes) {
    document.getElementById("main_holder").innerHTML = ""; // Clear before running the whole function.
    quotes = getQuotes(quotes);
    for (x = 0; x < 5; x++) {
        let foo = "";
        shuffle(quotes);
        for (i = 0; i < 8; i++) {
            foo = foo + quotes[i] + " ";
        }
        document.getElementById("main_holder").innerHTML += "<p>" + foo + "</p>";
    }
}

function shuffle(harray) { // Shuffle the array into a random order.
    let j, x, i;
    for (i = harray.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = harray[i - 1];
        harray[i - 1] = harray[j];
        harray[j] = x;
    }
}
function getQuotes(tv_show) { // Gets an array of quotes from somewhere...
    let quotes = [];
    switch (tv_show) {
        case "friends":
            quotes = friends_quotes;
            break;
        case "scrubs":
            quotes = scrubs_quotes;
            break;
        case "rick_and_morty":
            quotes = rick_and_mortey_quotes;
            break;
        default:
            quotes = [
                'It looks like something\'s broken...',
            ]
    }
    return quotes;
}
window.onload = main('friends'); // Run everything on first window load.
new ClipboardJS('#copyHtml');