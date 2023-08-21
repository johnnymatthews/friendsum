const express = require('express');
const Chance = require('chance');
const chance = new Chance();

const app = express();
const port = process.env.PORT || 3000;

const friendsQuotes = [
  "How you doin'?",
  "We were on a break!",
  "Smelly Cat, Smelly Cat, what are they feeding you?",
  "PIVOT!",
  "Could I BE any more...?",
  "It's like all my life everyone's always told me, 'You're a shoe! You're a shoe! Well, what if I don't want to be a shoe?'",
];

app.get('/:numQuotes', (req, res) => {
  const numQuotes = parseInt(req.params.numQuotes);
  if (isNaN(numQuotes) || numQuotes <= 0 || numQuotes >=100) {
    res.status(400).json({ error: 'Invalid number of quotes.' });
    return;
  }

  const randomQuotes = chance.pickset(friendsQuotes, numQuotes);

  res.json({ quotes: randomQuotes });
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
