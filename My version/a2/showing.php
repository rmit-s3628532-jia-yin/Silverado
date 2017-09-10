<!DOCTYPE html>
<html>

<head>
    <title>Silverado</title>
	<link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
    <header>
        <h1>Silverado</h1>
    </header>

    <nav>
	    <ul>
			<li><a href='index.php'>home</a></li>
			<li><a href='showing.php'>showing</a></li>
		</ul>
    </nav>

    <main>
	<div class = 'container'>
	<h2>now showing</h2>
	</div>
	
	<figure>
	
	<!-- Original image below sourced for educational purposes: https://cdn.eventcinemas.com.au/cdn/resources/movies/10602/images/largeposter.jpg  -->
    <img src='../img/Mickey.jpg' alt='poster of mickey and the Roadster Racers' width = '240' height = '355'>	
	<caption>Mickey & the Roadster Racers</caption>
	</figure>
	
	<figure>
	<!-- Original image below sourced for educational purposes: https://www.google.com.au/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fen%2F6%2F69%2FThe_Big_Sick.jpg&imgrefurl=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FThe_Big_Sick&docid=0wnwq7PuefjotM&tbnid=fxoekunBVhvfUM%3A&vet=10ahUKEwiTxP7zzuXVAhUIhrwKHUHiD-oQMwgmKAAwAA..i&w=220&h=326&bih=690&biw=1396&q=the%20big%20sick&ved=0ahUKEwiTxP7zzuXVAhUIhrwKHUHiD-oQMwgmKAAwAA&iact=mrc&uact=8   -->
    <img src='../img/the_Big_Sick.jpg' alt='poster of the Big Sick' width = '240' height = '355'>	
	<caption>the Big Sick</caption>

	</figure>
	
	<figure>
	<!-- Original image below sourced for educational purposes: https://cdn.hoyts.com.au/mediafiles/images/AUposters/HO00004815.jpg   -->
    <img src='../img/Atomic_Blonde.jpg' alt='poster of Atomic Blonde' width = '240' height = '355'>	
	<caption>Atomic Blonde</caption>
	</figure>
	
	<figure>
	<!-- Original image below sourced for educational purposes: https://cdn.hoyts.com.au/mediafiles/images/AUposters/HO00005517.jpg  -->
    <img src='../img/Whisper_of_the_Heart.jpg' alt='poster of Whisper of the Heart' width = '240' height = '355'>	
	<caption>Whisper of the Heart</caption>
	</figure>
    </main>
	
	<h2>Seating</h2>
	<h3>Standard</h3>
	
	<table>
	<tr>
	<th>Seat Option</th>
	<th>Seat Code</th>
	<th>Mon - Tue (All Day)<br>Mon - Fri (1pm only)</th>
	<th>Wed - Fri (after 1pm)<br>Sat - Sun (All Day)</th>
	</tr>
	<tr>
	<td>Full</td>
	<td>SF</td>
	<td>$12.50</td>
	<td>$18.50</td>
	</tr>
	<tr>
	<td>Concession</td>
	<td>SP</td>
	<td>$10.50</td>
	<td>$15.50</td>
	</tr>
	
	<tr>
	<td>Child</td>
	<td>SC</td>
	<td>$8.50</td>
	<td>$12.50</td>
	</tr>
	</table>
	
	<h3>First Class</h3>
	<table>
	<tr>
	<th>Seat Option</th>
	<th>Seat Code</th>
	<th>Mon - Tue (All Day)<br>Mon - Fri (1pm only)</th>
	<th>Wed - Fri (after 1pm)<br>Sat - Sun (All Day)</th>
	</tr>
	<tr>
	<td>Adult</td>
	<td>FA</td>
	<td>$25</td>
	<td>$30</td>
	</tr>
	<tr>
	<td>Child</td>
	<td>FC</td>
	<td>$20</td>
	<td>$25</td>
	</tr>
	
	</table>
	
	<h3>Beanbag</h3>
	<table>
	<tr>
	<th>Seat Option</th>
	<th>Seat Code</th>
	<th>Mon - Tue (All Day)<br>Mon - Fri (1pm only)</th>
	<th>Wed - Fri (after 1pm)<br>Sat - Sun (All Day)</th>
	</tr>
	<tr>
	<td>Adult</td>
	<td>BA</td>
	<td>$22</td>
	<td>$33</td>
	</tr>
	<tr>
	<td>Family</td>
	<td>BF</td>
	<td>$20</td>
	<td>$30</td>
	</tr>
	<tr>
	<td>Child</td>
	<td>BC</td>
	<td>$20</td>
	<td>$30</td>
	</tr>
	
	</table>
	<!-- Original CSS code sourced and adapted for educational purposes: 
	https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php -->
	<form action='/~e54061/wp/silverado-test.php' method='post'>
	<fieldset><legend>Booking Form</legend>
      <p><label>Movie</label><select name='movie'>
	  <option value='AC'>AC</option>
	  <option value='RC'>RC</option>
	  <option value='CH'>CH</option>
	  <option value='AF'>AF</option> 
	  </select></p>
      <p><label>Session</label><select name='session'>
		  <option value='MON-01'>Mon. 1pm</option>
		  <option value='MON-06'>Mon. 6pm</option>
		  <option value='MON-09'>Mon. 9pm</option>
		  <option value='TUES-01'>Tues. 1pm</option>
		  <option value='TUES-06'>Tues. 6pm</option>
		  <option value='TUES-09'>Tues. 9pm</option>
		  <option value='WED-01'>Wed. 1pm</option>
		  <option value='WED-06'>Wed. 6pm</option>
		  <option value='WED-09'>Wed. 9pm</option>
		  <option value='THURS-01'>Thurs. 1pm</option>
		  <option value='THURS-06'>Thurs. 6pm</option>
		  <option value='THURS-09'>Thurs. 9pm</option>
		  <option value='FRI-01'>Fri. 1pm</option>
		  <option value='FRI-06'>Fri. 6pm</option>
		  <option value='FRI-09'>Fri. 9pm</option>
		  <option value='SAT-12'>Sat. 12pm</option>
		  <option value='SAT-03'>Sat. 3pm</option>
		  <option value='SAT-06'>Sat. 6pm</option>
		  <option value='SAT-09'>Sat. 9pm</option>
	      <option value='SUN-12'>Sun. 12pm</option>
	  	  <option value='SUN-3'>Sun. 3pm</option>
	      <option value='SUN-6'>Sun. 6pm</option>
	      <option value='SUN-9'>Sun. 9pm</option>
      </select></p>
      <fieldset><legend>Seats</legend>
        <fieldset><legend>Standard</legend>
          <p><label>Adult</label><select name='Seats[SF]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option>
		  </select></p>
          <p><label>Concession</label><select name='Seats[SP]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
          <p><label>Child</label><select name='Seats[SC]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
        </fieldset>
        <fieldset><legend>First Class</legend>
          <p><label>Adult</label><select name='Seats[FA]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
          <p><label>Child</label><select name='Seats[FC]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
        </fieldset>
        <fieldset><legend>Bean Bags</legend>
          <p><label>Adult</label><select name='Seats[BA]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
          <p><label>Family</label><select name='Seats[BF]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
          <p><label>Child</label><select name='Seats[BC]'>
		  <option value='0'>0</option>
		  <option value='1'>1</option>
		  <option value='2'>2</option>
		  <option value='3'>3</option>
		  <option value='4'>4</option>
		  <option value='5'>5</option>
		  <option value='6'>6</option>
		  <option value='7'>7</option>
		  <option value='8'>8</option>
		  <option value='9'>9</option>
		  <option value='10'>10</option></select></p>
        </select></fieldset>
      </fieldset></select>
      <p><button>Book</button></p>
    </fieldset>
	</form>
    <footer>
	<p>Name: Jia Yin  StudentID: s3628532
	    Name: Xiao Yu Lim  StudentID: s3622764      </p>
    </footer>

</body>

</html>