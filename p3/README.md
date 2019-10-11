# Project 3
+ By: *Kenyon M King*
+ Production URL: <http://p3.digitalcrimson.org>

## Game planning
* This uses the simplest Design A and a GET method. I didn't see an upside to using POST in this scenario. I like refreshing the results page to generate random outcomes. It's oddly satisfying. 🤓
* I define a variable ($throwOptions) that contains 'rocks', 'paper' 'scissors'
* I then define two variables, $userMove and $computerMove. 
* $userMove gets the user's input using $_GET superglobal
* $computerMove chooses a string at random from the $throwOptions variable: 'rocks' (0), 'paper' (1) or 'scissors' (2)
* Using conditional logic, I'll declare the winner (in new variable $winner) based on our understanding of rock beating scissors, etc.
* On process.php page load, I'll display what the user threw, and what the computer threw, and who the winner is.


## Outside resources
* I used the lecture notes that linked to PHP.net
* I used the W3C HTML validator

## Notes for instructor
I thought I was all set a few days ago until I hit the Submit button without first making a choice.  Boom - I got all these gnarley undefined index __Notices__. Ick.
It took some trial and error to come up with a solution. I found the answers by reviewing the [Notes](https://hesweb.dev/e2/notes#/php/form-inputs-misc) and checking to see if something was checked and  combined that with a __header__ redirect.
