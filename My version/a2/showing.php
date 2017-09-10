<!DOCTYPE html> 
<html lang="en">
    <head>
        <title>Now Showing -- Silverado</title>
        
        <!-- Original image below sourced for educational purposes: https://image.freepik.com/free-icon/cinema-video-player_318-41322.jpg/ -->
        <link rel="icon" type="image/jpg" href="../img/logo.jpg" />
        
        <link href="https://fonts.google.com/specimen/Pacifico?selection.family=Pacifico" rel="stylesheet">
        <link href="https://fonts.google.com/specimen/Bellefair?selection.family=Bellefair" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <header>
            <h1>Silverado</h1>
        </header>
    
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="showing.php">Showing</a></li>
            </ul>
        </nav>

        <main>
            <div style="padding: 10px 0 0 0;">
                <h2>Now Showing</h2>
            </div>

            <div class="table">
                <div class="row">
                    <div class="cell">
                        <!-- Original image below sourced for educational purposes: https://images-na.ssl-images-amazon.com/images/M/MV5BMjI4MDM0OTQ4MF5BMl5BanBnXkFtZTgwMTkyNzQ3MDI@._V1_.jpg  -->
                        <img class="now" src="../img/mickey.jpg" alt="Poster of Mickey and The Roadster Racers" >

                        <div class="desc1">Mickey &<br/>The Roadster Racers</div>
                    </div>

                    <div class="cell">
                        <!-- Original image below sourced for educational purposes: https://fanart.tv/fanart/movies/37797/movieposter/whisper-of-the-heart-550bef217d146.jpg  -->
                        <img class="now" src="../img/whisper_of_the_heart.jpg" alt="Poster of Whisper of The Heart" >	
                        
                        <div class="desc1">Whisper of<br/>The Heart</div>
                    </div>

                    <div class="cell">
                        <!-- Original image below sourced for educational purposes: http://www.joblo.com/posters/images/full/atomic-blonde-t-poster-gallery.jpg   -->
                        <img class="now" src="../img/atomic_blonde.jpg" alt="Poster of Atomic Blonde" >	
                        
                        <div class="desc1">Atomic Blonde</div>
                    </div>

                    <div class="cell">
                        <!-- Original image below sourced for educational purposes: https://pbs.twimg.com/media/DCNa3CHXcAEaP4I.jpg:large   -->
                        <img class="now" src="../img/big_sick.jpg" alt="Poster of The Big Sick" >	
                      
                        <div class="desc1">The Big Sick</div>
                    </div>
                </div>
            </div>
        </main>

        <div class="container">
            <h2>Seating & Prices</h2>

            <div class="table">
                <div class="row">
                    <div class="cell">
                        <b><em>Seat Option</em></b>
                    </div>

                    <div class="cell">
                       <b><em> Seat Code</em></b>
                    </div>

                    <div class="cell">
                        <b><em>Mon - Tue (All Day)<br/>Mon - Fri (1pm only)</em></b>
                    </div>

                    <div class="cell">
                       <b><em> Wed - Fri (After 1pm)<br/>Sat - Sun (All Day)</em></b>
                    </div>
                </div>
            </div>

            <h3>Standard Seat</h3>

            <div class="table">
                <div class="row">
                    <div class="cell">
                        Full
                    </div>

                    <div class="cell">
                        SF
                    </div>

                    <div class="cell">
                        $12.50
                    </div>

                    <div class="cell">
                        $18.50
                    </div>
                </div>

                <div class="row">
                    <div class="cell">
                        Concession
                    </div>

                    <div class="cell">
                        SP
                    </div>

                    <div class="cell">
                        $10.50
                    </div>

                    <div class="cell">
                        $15.50
                    </div>
                </div>

                <div class="row">
                    <div class="cell">
                        Child
                    </div>

                    <div class="cell">
                        SC
                    </div>

                    <div class="cell">
                        $8.50
                    </div>

                    <div class="cell">
                        $12.50
                    </div>
                </div>
            </div>

            <h3>First Class Seat</h3>

            <div class="table">
                <div class="row">
                    <div class="cell">
                        Adult
                    </div>

                    <div class="cell">
                        FA
                    </div>

                    <div class="cell">
                        $25.00
                    </div>

                    <div class="cell">
                        $30.00
                    </div>
                </div>

                <div class="row">
                    <div class="cell">
                        Child
                    </div>

                    <div class="cell">
                        FC
                    </div>

                    <div class="cell">
                        $20.00
                    </div>

                    <div class="cell">
                        $25.00
                    </div>
                </div>
            </div>


            <h3>Bean Bags Seat</h3>

                <div class="table">
                    <div class="row">
                        <div class="cell">
                            Adult
                        </div>

                        <div class="cell">
                            BA
                        </div>

                        <div class="cell">
                            $22.00
                        </div>

                        <div class="cell">
                            $33.00
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell">
                            Family
                        </div>

                        <div class="cell">
                            BF
                        </div>

                        <div class="cell">
                            $20.00
                        </div>

                        <div class="cell">
                            $30.00
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell">
                            Child
                        </div>

                        <div class="cell">
                            BC
                        </div>

                        <div class="cell">
                            $20.00
                        </div>

                        <div class="cell">
                            $30.00
                        </div>
                    </div>
                </div>
        </div>

        <!-- Original CSS code sourced and adapted for educational purposes: 
        https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php -->
        <form action="/~e54061/wp/silverado-test.php" method="post">
            <fieldset class="booking">
                <legend><h2>Booking Form</h2></legend>
                <p>
                    <label>Movie</label>

                    <select name="movie">
                        <option value="AC">Atomic Blonde</option>
                        <option value="RC">The Big Sick</option>
                        <option value="CH">Mickey & The Roadster Racers</option>
                        <option value="AF">Whisper of The Heart</option> 
                    </select>
                </p>

                <p>
                    <label>Session</label>

                    <select name="session">
                        <option value="MON-01">Mon, 1pm</option>
                        <option value="MON-06">Mon, 6pm</option>
                        <option value="MON-09">Mon, 9pm</option>
                        <option value="TUES-01">Tues, 1pm</option>
                        <option value="TUES-06">Tues, 6pm</option>
                        <option value="TUES-09">Tues, 9pm</option>
                        <option value="WED-01">Wed, 1pm</option>
                        <option value="WED-06">Wed, 6pm</option>
                        <option value="WED-09">Wed, 9pm</option>
                        <option value="THURS-01">Thurs, 1pm</option>
                        <option value="THURS-06">Thurs, 6pm</option>
                        <option value="THURS-09">Thurs, 9pm</option>
                        <option value="FRI-01">Fri, 1pm</option>
                        <option value="FRI-06">Fri, 6pm</option>
                        <option value="FRI-09">Fri, 9pm</option>
                        <option value="SAT-12">Sat, 12pm</option>
                        <option value="SAT-03">Sat, 3pm</option>
                        <option value="SAT-06">Sat, 6pm</option>
                        <option value="SAT-09">Sat, 9pm</option>
                        <option value="SUN-12">Sun, 12pm</option>
                        <option value="SUN-3">Sun, 3pm</option>
                        <option value="SUN-6">Sun, 6pm</option>
                        <option value="SUN-9">Sun, 9pm</option>
                    </select>
                </p>

                <fieldset>
                    <legend><em>Seats</em></legend>

                    <fieldset>
                        <legend><b>Standard Seat</b></legend>

                        <p>
                            <label>Adult</label>

                            <select name="Seats[SF]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>

                        <p>
                            <label>Concession</label>

                            <select name="Seats[SP]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>

                        <p>
                            <label>Child</label>

                            <select name="Seats[SC]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>
                    </fieldset>

                    <fieldset>
                        <legend><b>First Class Seat</b></legend>

                        <p>
                            <label>Adult</label>

                            <select name="Seats[FA]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>

                        <p>
                            <label>Child</label>

                            <select name="Seats[FC]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>
                    </fieldset>

                    <fieldset>
                        <legend><b>Bean Bags Seat</b></legend>

                        <p>
                            <label>Adult</label>

                            <select name="Seats[BA]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>

                        <p>
                            <label>Family</label>

                            <select name="Seats[BF]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>

                        <p>
                            <label>Child</label>

                            <select name="Seats[BC]">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </p>
                    </fieldset>
                </fieldset>

                <div>
                    <p><button>Book</button></p>
                </div>
            </fieldset>
        </form>
    
        <footer>
            <div>
                <div>
                    Group Leader: Jia Yin, S3628532
                </div>
                
                <div>
                    Partner: Xiao Yu Lim, S3622764
                </div>
            </div>
        </footer>
    </body>
</html>
