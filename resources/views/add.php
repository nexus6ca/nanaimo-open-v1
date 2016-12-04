<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php include('header.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>

    <div class="form">
        <form method="post" action="/tournament/save" name="registration_form">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" />
            <fieldset>
                <p>
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" required>
                </p>
                <p>
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" required>
                </p>
                <p>
                    <label for="playerRating">Rating (0 if unrated)</label>
                    <input type="number" name="playerRating" min="0" max="2900" id="playerRatingating" required>
                </p>
                <p>
                    <label for="playerEmail">Player's Email</label>
                    <input type="email" name="playerEmail" id="playerEmail" required>
                </p><p><label for "province">Player's Province:</label>
                <select name ="province" id ="province">
                    <?php foreach($prov as $p) { ?>
                        <option><?=$p?></option>
                    <?php } ?>
                </select>

            </p>

                <p>
                    <label for="billingEmail">Billing Email (if differnt from Player Email)</label>
                    <input type="email" name="billingEmail" id="billingEmail">
                </p>
                <p>
                    <label for="address">Player's Home City</label>
                    <input type="text" name="address" id="address" required>
                </p>

                <p>
                    <em>Player's Age</em><br>
                    <input type="radio" name="age" id="adult" value="adult" required>
                    <label for="adult">Adult</label><br>
                    <input type="radio" name="age" id="junior" value="junior">
                    <label for="junior">Junior (U20 as of Jan 1, 2016)</label>
                </p>
                <p>
                    <h5>Byes: 1/2 point in early round; 0 points in final round.</h5>
                    <input type="checkbox" name="bye[]" value="1">Round 1 Sat. 10:00am<br>
                    <input type="checkbox" name="bye[]" value="2">Round 2 Sat. 2:00pm<br/>
                    <input type="checkbox" name="bye[]" value="3">Round 3 Sat. 6:00pm<br/>
                    <input type="checkbox" name="bye[]" value="4">Round 4 Sun. 9:00am><br/>
                    <input type="checkbox" name="bye[]" value="5">Round 5 Sun. ASAP<br/>
                </p>
                <p>
                    CFC Membership:<br>
                    <input type="radio" name="CFC" id="Annual" value="Annual" required>
                    <label for="Annual">Need to purchase Annual Membership (Cost varies by province) </label><br>
                    <input type="radio" name="CFC" id="TM" value="TM">
                    <label for="TM">Need a Tournament Membership ($16 adult, $8 junior)</label><br>
                    <input type="radio" name="CFC" id="FirstTime" value="FirstTime">
                    <label for="FirstTime">No CFC Membership in last 5 years: Free</label><br>
                    <input type="radio" name="CFC" id="GM" value="(W)(G)IM">
                    <label for="GM">GM, IM, or WGM</label><br>
                    <input type="radio" name="CFC" id="CFCmember" value="CFCmember">
                    <label for="CFCmember">Will have a valid CFC membership for the tournament</label><br>
                    <div class="CFCNumber" style="display: none;">
                        <label for="CFCNumber">CFC Number</label><br>
                        <input type="number" name="CFCNumber" id="CFCNumber">
                    </div>
                </p>

                <p><input type="submit" value="Register" class="button"></p>


            </fieldset></form>

        </fieldset>
        </form>
    </div>
</body>
</html>

<script>
    $("#CFCmember").on("click", function(){
        $(".CFCNumber").toggle("slow", function(){
        });
    });
</script>
