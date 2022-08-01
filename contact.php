<?php include'header.php';?>

<main class="container">
    <section class="reservation">
        <h2>Contact us</h2>

        <p>
        If your want to make a reservation, please complete this form.
        </p>
        <p>
        Fields with <span>*</span> are required.
        </p>

        <div class="form">
        <form action="">
            <div class="infos">
               <div class="reservations">
                    <h4>Reservation</h4>
                    <label for="date">Date :</label>
                    <input type="date" name="" id="">
                    <label for="time">Time :</label>
                    <input type="time" name="" id="">
                    <label for="guest">Number of guests:</label>
                    <input type="number" name="" id="">
                   
                </div>
                <div class="details">
                    <h4>Details</h4>
                    <label for="name">Name : </label>
                    <input type="text" name="" id="">
                    <label for="name">Email : </label>
                    <input type="email" name="" id="">
                    <label for="telephone">Telephone : </label>
                    <input type="tel" name="" id="">
                </div>
           
            </div>   
            <div class="request">
                <h4>Further request</h4>
                <textarea name="" id="" cols="76" rows="10"></textarea>
            </div>   
            <button type="submit">Reserve</button>   
        </form>
        </div>
    </section>

    <div class="location">
        <h2>Our location</h2>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.2716245825973!2d-74.00047210000002!3d40.734048300000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25996a02e5209%3A0xae7c604488b12607!2s13%20Christopher%20St%2C%20New%20York%2C%20NY%2010014%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1657062941847!5m2!1sfr!2sfr" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
</main>
<?php include'footer.php';?>