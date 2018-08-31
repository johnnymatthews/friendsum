let global_quotes = 'friends';
let as_html = false;

function main() {
    document.querySelector("#main_holder").innerHTML = ""; // Clear before running the whole function.
    quotes_array = getQuotes(global_quotes); // Get an array of quotes.
    
    // Change background image, header text, and header font.
    document.body.style.background = `#535959 url('img/${global_quotes}.jpg') no-repeat fixed bottom`; 
    document.querySelector("#main-header").className = "";
    document.querySelector("#main-header").classList.add(`${global_quotes}-header`);
    document.querySelector("#main-header").textContent = global_quotes;

    for (x = 0; x < 5; x++) {
        let block = "";
        shuffle(quotes_array);
        for (i = 0; i < 8; i++) {
            block = block + quotes_array[i] + " ";
        }

        if(as_html == true) {
            document.querySelector("#main_holder").innerHTML += "<pre><code>&lt;p&gt;" + block + "&lt;/p&gt;</code></pre>";
        } else {
            document.querySelector("#main_holder").innerHTML += "<p>" + block + "</p>";
        }
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
        case "rick-and-morty":
            quotes = rick_and_mortey_quotes;
            break;
        default:
            quotes = [
                'It looks like something\'s broken...',
            ]
    }
    return quotes;
}

function setGlobalQuotes(quotes) {
    global_quotes = quotes;
    main();
}

function setAsHtml() {
    if(as_html == true) {
        as_html = false;
        document.querySelector('#viewAsHtml').textContent = "View as HTML";
    } else {
        as_html = true;
        document.querySelector('#viewAsHtml').textContent = "View as Text";
    }
    main();
}



window.onload = main(); // Run everything on first window load.