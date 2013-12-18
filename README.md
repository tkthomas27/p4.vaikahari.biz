p4.vaikahari.biz
================

# Devanagari Pariksha


### or


# Devanagari Test


===========================

## overview

Devanagari is the script of choice for a large portion of South Asia. It is the official script of India and Nepal. Devanagari is also important for studying Sanskrit and Avestan  - the classical languages of India and Persia. By knowing Devanagari, one is empowered to begin studying a rich and varied ancient and modern culture.

The Devanagari Pariksha (Pariksha begin a Sanskrit word for test), is an easy and fun way to begin learning the basic characters. The test method here is a memory card game where you attempt to match Devanagari characters with their Roman transliteration. You begin each round with 1000 points and lose one point for each second and click - efficiency and speed and critical!

Hope you enjoy this app - I spent a lot of time on this app and I hope it shows!

========================

## game mechanics

1. Select Level on the main landing page; the level selection is done via radio buttons that have levels ('tattva') hardcoded in them. Selecting start game will initialize a game by adding that level ('tattva') to the users table and a game start date
2. Each page contains a cheat sheet for reference
3. Each page contains a quit button. This quit button opens a modal box (called using javascript). Clicking on the quit button in the modal box will insert a new row in the socres table with your score data (name, date, score, which is then displayed on the score page) and deletes your game data from your users row
4. Each page also has a fake image that is hidden; when this image loads, javascript will change the class of the side buttons so that they change color and become unclickable. This is an attempt to prevent people from leaving the game without correctly quitting
5. The quizy plugin will start a timer and track the number of clicks
6. **I have modified the quizy plugin**: The first modification starts a score variable at 1000 and deducts for every second and every click (negatives are fine); When the game is finished, the score is displayed in the summary (which I modified to fit the score); the score is also output to a hidden input field; this hidden input field is what is read by php into the mySql database; when the score is output to the input field, javascript changes the class on the continue button so that it is green and clickable
7. The quizy plugin requires you to make divs with match pair ids; the goal of the game is to match each character with its transliteration
8. On completion, click the continue button; this continue button will update the users table with game data
9. Quit when you want or when you make it to the end of game

===================================


## features:  

* Signup
* Login
* Profile Editing: Select two avatars that appear on the side of the screen; add a location
* Reset password (found in profile editing)
* Can track your scores
* Scores are posted to score board

=================================

##javascript

* Chardin (plugin; when clicking the instructions button)

* Validation (plugin; for signing up validation)

* Accordion (jQuery; for organizing the FAQ page)

* Quit Button/Cheat Sheet (jQuery Modal Box)

* Datatable (plugin; for displaying the scores)

* Quizy(plugin; for supplying the memory game)
	
* Hidden avatara/devata (jQuery; found on stack overflow - simply displays hidden divs)


**written in Mou**
