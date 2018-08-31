let global_quotes = 'friends';
let as_html = false;

function main() {
    document.querySelector("#main_holder").innerHTML = ""; // Clear before running the whole function.
    quotes_array = getQuotes(global_quotes); // Get an array of quotes.
    changeBackground();
    changeHeader();

    // Create 5 paragraphs and shuffle the array each time.
    for (x = 0; x < 5; x++) {
        let block = "";
        shuffle(quotes_array);

        // Add 8 individual quotes into this block.
        for (i = 0; i < 8; i++) {
            block = block + quotes_array[i] + " ";
        }

        // Add the block to the main_holder div.
        if (document.querySelector('#viewAsHtml').checked === true) {
            document.querySelector("#main_holder").innerHTML += "<pre><code>&lt;p&gt;" + block + "&lt;/p&gt;</code></pre>";
        } else {
            document.querySelector("#main_holder").innerHTML += "<p>" + block + "</p>";
        }
    }
}

// Shuffle the array into a random order.
function shuffle(harray) {
    let j, x, i;
    for (i = harray.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = harray[i - 1];
        harray[i - 1] = harray[j];
        harray[j] = x;
    }
}

// Gets an array of quotes from the quotes.js script
function getQuotes(tv_show) {
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

// Set global the global global_quotes variable.
function setGlobalQuotes(quotes) {
    global_quotes = quotes;
    main();
}

// Change as_html gloabl variable based on the slider button.
function setAsHtml() {
    if (document.querySelector('#viewAsHtml').checked == true) {
        as_html = true;
    } else {
        as_html = false;
    }
    main();
}

// Change the background to whatever global_quotes is set to.
function changeBackground() {
    document.body.style.background = `#ffffff url('img/${global_quotes}.jpg') no-repeat fixed bottom`;
}

// Change the header to whatever global_quotes is set to.
function changeHeader() {
    document.querySelector("#main-header").className = "";
    document.querySelector("#main-header").classList.add(`${global_quotes}-header`);
    document.querySelector("#main-header").textContent = global_quotes;
}

window.onload = main(); // Run everything on first window load.