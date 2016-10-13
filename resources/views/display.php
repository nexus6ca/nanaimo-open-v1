<?php
$registrationDone = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nanaimo Winter Open</title>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<header>
    <div class="title">
        <H1> Vancouver Island University Chess Club </H1>
        <h2> Presents </h2>
        <h1> The 2016 Nanaimo Winter Open Chess Tournament</h1>
        <h5>A 5 round CFC rated Swiss December 17-18, 2016</h5>
    </div>
</header>
<div class="info">
    <em>When:</em> Dec 17-18, 2016<br>
    <em>Where:</em> Vancouver Island University<br>
    <em>Rounds:</em> Sat 10AM, 2PM, 6PM, Sun 9:00AM, ASAP.<br>
    <em>Time Control:</em> Game/60 + 30 second increment<br>
    <p><em>Ratings:</em> This even is CFC rated. Unrated players can only play in the open section.
        If you have another national rating that will be used if higher</p>
    <p><em>Prizes and Sections:</em> All entry fees returned as prizes less expenses. The tournament
        format will be one or two sections based on the turnout and distribution of players.</p>
    <p><em>Equipment:</em>Please bring your own sets and clocks.</p>
</div>
<div class="prizeInfo">
    An example breakdown - based on 40 entries:<br>
    <br>
    <table class="prizeFund">
        <tr>
            <th>Open</th>
            <th></th>
            <th>Under 1800</th>
            <th></th>
        </tr>
        <tr>
            <td>1st</td>
            <td>$280</td>
            <td>1st <1800</td>
            <td>$200</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>$180</td>
            <td>2nd <1800</td>
            <td>$140</td>
        </tr>
        <tr>
            <td>1st <2200</td>
            <td>$140</td>
            <td>1st<1600</td>
            <td>$140</td>
        </tr>
        <tr>
            <td>1st <2000</td>
            <td>$140</td>
            <td>1st <1400</td>
            <td>$140</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>1st Unrated</td>
            <td>$100</td>
        </tr>
    </table>
    <br>
    <em>(This prize structure is subject to change based on turn out and distribution of players).</em>
</div>
<div class="entryFees">
    <p>
        <em>Entry Fees:</em> Early entry $40 by November 15th (payable via Cheque, Interact Money Transfer or Paypal), After
        November 15 and Onsite $50
        Free entry for players rated over 2400 and entry fee as minimum prize for players from 2200-2400. Unrated players
        may play for the unrated prize or the top place prizes.
    </p>
    <?php if ($registrationDone) { ?>
        <a href="/tournament/add">Advanced Registration</a>

    <?php } else { ?>
        <p>Email for information on how to register early. Registration page coming shortly.</p>
    <?php } ?>
    <p>
        <em>CFC Membership required.</em> Tournament Memberships are $16 or $38 a year for BC Residents. For first time
        players or CFC members who haven’t played in 5 or more year: free Tournament memberships.
    </p>
    <p>
        <a href="/tournament/registered">Who is registered</a>
    </p>
</div>
<div class="Accomandation">
    <p>The Coast Bastion Hotel is offering us a group rate of $105 a night on a first come first serve basis. <br>
        Use code: <span>CBI-GFC16053</span></p>
</div>
<div class="conatct">
    <em>Organizers:</em> Nick Peters (250)607-7999 , Jason Williamson (250)797-0231
    <em>Email:</em> nanaimo.open@gmail.com
</div>

</body>
<footer>
    <div class="copy">&copy 2016 Jason Willimason</div>
</footer>
</html>
