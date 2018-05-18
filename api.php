<?php

// User decides what TV show they want.
$url_query = (parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY));

if(($url_query == "friends") || ($url_query == "scrubs") || ($url_query == "rick_and_morty")) {
	// Define the quotes array.
	switch ($url_query) {
		case "scrubs":
			$quotes = [
				"Don't ever be afraid to come to me with stuff like that. The simple fact that you actually seem to give a crap is the reason I took an interest in you to begin with. It's why I trust you as a doctor. Hell, it's... it's why I trust you as a person.",
				"It sounds like you're asking me out on a man date.",
				"Turk, why are you so afraid of loving me?",
				"Oh, Dr. Cox, does this lipstick make me look like a clown?",
				"No, Barbie, no... it makes you look like a prostitute who caters exclusively *to* clowns.",
				"I'm sorry, that was my mistake, I keep forgetting that you're a horrible, horrible person.",
				"Ladies and gentlemen, allow me to present, Man Not Caring.",
				"What is it with steel wool? Is it steel? Or is it wool?",
				"Well isn't that just the pickle on the giant crap sandwich that is my day.",
				"Carla you devil I can't help but notice you love telling jokes. What was it you were saying about your coffee?",
				"Normally you would hear crickets but they were uncomfortable about just how unfunny that was.",
				"Sorry Snoop Dogg Resident. Laverne believes in God which is hilarious to me and Ted is the hospital sad sack.",
				"And me well, I'm funny cause I commit. C-O-M-M-I-T-T-T-T-T-T-T... T",
				"The point is *PLEASE* don't tell anymore jokes.",
				"Because nothing sucks worse than feeling alone, no matter how many people are around.",
				"Christopher? You only call me Christopher when you're mad or when we're having sex... Baby, are you mad when we're having sex?",
				"Oh what the hell. Back in '68 I don't like you. The end.",
				"I'm not angry. So my girlfriend serviced most of the staff? I'm proud of her commitment to medicine.",
				"Would you please get off my ex-wife?",
				"Well... dammit! Gosh, now I'm too proud of you to be mad at you.",
				"You are, in fact, a perfectly healthy 26-year-old doctor who keeps whining about how horrible his father was.",
				"Do you want me to order you a clown?",
				"You've always known about my sleep toots. Hell, you used to imitate the sound they made, remember?",
				"I make Mr. Roberts wear special air-tight boxer shorts.",
				"Laverne, I wrote the guest list for this conversation, and just in case, if you're wondering, you're not on it!",
				"I don't like you.",
				"Why do you have to jump out and scare me all the time?",
				"Time to take the GR off my Gratitude and give that old bastard some Attitude, J.D. style.",
				"Yeah, I have to throw up first.",
				"Why aren't you using the mop I bought you?",
				"Hm! Can't believe Chuck gave up stripping to become a city councilman!",
				"Same job, different outfit.",
				"One thing I've learned is to never play Operation against a surgeon for money.",
				"The sweatpants years.",
			];
			break;
		case "rick_and_morty":
			$quotes = [
				"Nobody exists on purpose. Nobody belongs anywhere. We're all going to die. Come watch TV.",
				"Listen, Morty, I hate to break it to you but what people call \"love\" is just a chemical reaction that compels animals to breed. It hits hard, Morty, then it slowly fades, leaving you stranded in a failing marriage. I did it. Your parents are gonna do it. Break the cycle, Morty. Rise above. Focus on science",
				"Weddings are basically funerals with cake.",
				'"What about the reality where Hitler cured cancer, Morty? The answer is: Don\'t think about it."',
				"All right, all right, cool it! I see what's happening here. You're both young, you're both unsure about your place in the universe, and you both want to be Grandpa's favorite. I can fix this.",
				"Now, listen—I know the two of you are very different from each other in a lot of ways, but you have to understand that as far as Grandpa's concerned, you're both pieces of shit!",
				"Yeah. I can prove it mathematically. Actually, l-l-let me grab my whiteboard. This has been a long time coming, anyways.",
				"It's like the N word and the C word had a baby and it was raised by all the bad words for Jews.",
				"I mean, why would a Pop-Tart want to live inside a toaster, Rick? I mean, that would be like the scariest place for them to live. You know what I mean?",
				"You're missing the point Morty. Why would he drive a smaller toaster with wheels? I mean, does your car look like a smaller version of your house? No.",
				"You're young, you have your whole life ahead of you, and your anal cavity is still taut yet malleable.",
				"If it was, you could call me Ernest Hemingway.",
				"He's not a hot girl. He can't just bail on his life and set up shop in someone else's.",
				"Wubba-lubba-dub-dub!",
				"Rick, I'm Pencilvester! Listen to that name! You can't kill me!",
				"Ah, Master Rick, remember when you weren't going to shoot me?",
				"Wait for the ramp, Morty. They love the slow ramp.",
				"I told them it means 'peace among worlds.",
				"Sweetie, is your shirt on backwards?",
				"Psych, just kidding! My new catchphrase is \"I don't give a f**k!\"",
				"It has been a... challenging mating season for Birdperson.",
				"Sometimes science is more art than science, Morty. Lot of people don't get that.",
				"You pass butter.",
			];
			break;
		case "friends":
			$quotes = [
				"Welcome to the real world. It sucks. You're gonna love it!",
				"Oh... my... God!",
				"How long do cats live? Like assuming you don't throw ‘em under a bus or something?",
				"You know how you come home at the end of the day and throw your jacket on a chair? Yeah. Well, instead of a jacket, it's a pile of garbage. And instead of a chair, it's a pile of garbage. And instead of the end of the day, it's the end of time and garbage is all that has survived.",
				"Guys, guess what?! Ok, the fifth dentist caved and now they're ALL recommending Trident?",
				"WHOOOPAH!",
				"Sure I peed on her. And if I had to, I'd pee on any one of you!",
				"He must decide. He must decide. Even though I made him up, he must decide!",
				"Here come the meat sweats...",
				"Wow, you guys sure have a lot of books about being a lesbian. Well, you know, you have to take a course. Otherwise they don't let you do it.",
				"All right, kids, I gotta get to work. If I don't input those numbers... it doesn't make much of a difference.",
				"Well, I'm sorry if I'm not a middle-aged black woman. And I'm also sorry if sometimes I go to the wrong audition.",
				"Hey, Ross, I got a science question: If the homo sapiens were, in fact, HOMO sapiens...is that why they're extinct? Joey, homo sapiens are PEOPLE. Hey, I'm not judgin'!",
				"Come on Ross, you're a paleontologist, dig a little deeper.",
				"15 Yemen Road, Yemen.",
				"Wait, what are you doing? Getting dressed. Why? Well, when I walk outside naked, people throw garbage at me.",
				"THIS IS BRAND NEW INFORMATION!",
				"Yeah, I definitely don't like the name Ross. What a weird way to kick me when I'm down.",
				"It's a moo point. It's like a cow's opinion; it doesn't matter. It's moo.",
				"Uh, uh, we'll flip for it, ducks or clowns. Oh, we're gonna flip for the baby? You got a better idea? All right, call it in the air. Heads. Heads it is. Yess! Whoo! We have to assign heads to something! Right, okay, okay, uhhh, ducks is heads, because ducks...have heads. What kinda' scary-ass clowns came to your birthday!?",
				"I remember the day I got my first paycheck, there was a cave-in in one of the mines.",
				"Phoebe, you worked in a mine?",
				"No I worked in a Dairy Queen.",
				"You could not be any more wrong. You could try, but you would not be successful.",
				"You've been BAMBOOZLED!",
				"Man this is weird. You ever realize Captain Crunch's eyebrows are actually on his hat?",
				"You think that's what's weird? Joey, the man's been captain of a cereal for the last 40 years.",
				"Paper...snow.....a ghost!!!",
				"Chandler entered a Vanilla Ice look-alike contest and WON! Ross came fourth and CRIED!",
				"Condoms? We don't know how long we're gonna be stuck here. We might have to repopulate the world. And condoms are the way to do that?",
				"It was summer... and it was hot. Rachel was there... A lonely grey couch...\"OH LOOK!\" cried Ned, and then the kingdom was his forever. The End.",
				"So, uh, what did the insurance company say? Oh, they said uh, \"You don't have insurance here so stop calling us.\"",
				"Why do you have to break up with her? Be a man. Just stop calling.",
				"So basically you get your ya-yas from taking money from all of your friends? Yeah. Yes, and I get my ya-yas from Ikea. You have to put them together yourself, but they cost a little less, so...",
				"My motto is get out before they go down. That is so not my motto.",
				"Oh, are you setting Ross up with someone? Does she have a wedding dress?",
				"Hey, Mon, look, I'm melting butter. That's great, Rach. You now have the cooking skills of a hot day.",
				"Je m'appelle Claude",
				"I'm not so good with the advice. Can I interest you in a sarcastic comment?",
				"I swear to god, Dad. That's not how they measure pants!",
				"Hey, you know what I just realized? ‘Joker' is ‘poker' with a ‘J'. Coincidence? Hey, that's ‘joincidence' with a ‘C'.",
				"Just because she went to Yale drama, she thinks she's like the greatest actress since, since, sliced bread! Ah, Sliced Bread, a wonderful Lady MacBeth.",
				"Suppose we're a divorced couple. Okay. And I got custody of the kid, right? Now, suppose the kid dies and I gotta buy a new kid.",
				"Raspberries? Good. Ladyfingers? Good. Beef? GOOD!",
				"Chandler. I sensed it was you.",
				"Ah, salmon skin roll.",
				"Okay, is everybody clear? We're gonna pick it up and move it. All we need is teamwork, okay? We're gonna lift the car... and slide it out. Lift... and slide.",
				"Could I BE wearing any more clothes?",
				"JOEY DOESN'T SHARE FOOD.",
				"Hey, just so you know: it's NOT that common, it DOESN'T happen to every guy, and it IS a big deal!",
				"They're still not coming on man! And the lotion and the powder have made a paste!",
				"Fine! Judge all you want but: married a lesbian, left a man at the alter, fell in love with a gay ice dancer, threw a girl's wooden leg in a fire, LIVES IN A BOX!",
				"Rules are good, rules control the fun!",
				"Getting over you was the hardest thing I ever had to do, and I never let myself thing about you.",
				"I've got this uncontrollable need to please people.",
				"And remember, If I'm harsh with you, it's only because you're doing it wrong.",
				"If you didn't eat fast, you didn't eat.",
				"I tell you, when I actually die, some people are gonna get seriously haunted.",
				"Someone ate the only good thing going on in my life.",
				"Don't you put words in people's mouths, you put turkey in people's mouths!",
				"Over the line? You are so far past the line that you can't even see the line. The line is a dot to you.",
				"You just said a bunch of stuff I don't know.",
				"You can't just give up. Is that what a dinosaur would do?",
				"I'm curvy and I like it.",
				"Well, the fridge broke and I had to eat everything.",
				"One really does have a stick up one's ass. Doesn't one?",
				"I was so focused on being mad at you, I forgot what it was I was mad about.",
				"I may play the fool at times but I'm more than a pretty blonde girl with an ass that won't quit.",
				"He may not be my soul mate, but a girl's gotta eat.",
				"I can hear the voices in my head again.",
				"If I were in prison, you guys would be, like my bitches.",
				"I wish I could help you but I don't want to.",
				"We would like some more alcohol. You know what else? We would like some more beers.",
				"I'm not great at the advice. Can I interest you in a sarcastic comment?",
				"I'm gonna get all uncomfortable and probably make some stupid joke.",
				"Should I use my invisibility to fight crime or for evil?",
			];
	}
} else {
	// Prepare for user failure.
	print 'Invalid TV Show. Valid inputs are "friends", "scrubs", and "rick_and_morty".';
	die;
}

// Randomly pick 8 quotes from the array.
$random_quotes = (array_rand($quotes, 8));

// Print out the quotes.
foreach($random_quotes as $random_quote) {
	print $quotes[$random_quote] . " ";
}