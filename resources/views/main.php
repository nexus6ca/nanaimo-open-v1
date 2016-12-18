<?php
use Symfony\Component\HttpFoundation\RequestMatcherInterface;

$registrationDone = false;

include('header.php');
?>
<body>

<H1>Weather Warning</H1>
<p>
    Check here Friday morning to check on the status of the tournament. Based on the current weather reports we plan to
go ahead with the tournament. I will post it here if that changes.
</p>
<div class="info">
    <em>When:</em> Dec 17-18, 2016<br>
    <em>Where:</em> Vancouver Island University<br>
    <em>Rounds:</em> Sat 10AM, 2PM, 6PM, Sun 9:00AM, ASAP.<br>
    <em>Time Control:</em> Game/60 + 30 second increment<br>
    <p> <em>Ratings:</em> This even is CFC rated. Unrated players can only play in the open section.
        If you have another national rating that will be used if higher</p>
    <p> <em>Prizes and Sections:</em> All entry fees returned as prizes less expenses.  The tournament
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
            <td>1st</td><td>$280</td><td>1st <1800</td><td>$200</td>
        </tr>
        <tr><td>2nd</td><td>$180</td><td>2nd <1800</td><td>$140</td></tr>
        <tr><td>1st <2200 </td><td>$140</td><td>1st<1600</td><td>$140</td></tr>
        <tr><td>1st <2000</td><td>$140</td><td>1st <1400</td><td>$140</td></tr>
        <tr><td>1st Unrated</td><td>$100</td><td></td><td></td></tr>
    </table>
    <br>
    <em>(This prize structure is subject to change based on turn out and distribution of players).<em>
</div>
<div class="entryFees">
    <p>Entry Fees:  Early entry $40 by November 15th (payable via Cheque, Interact Money Transfer or Paypal), After
         November 15 and Onsite $50</p>
    <?php if($registrationDone){ ?>
    <a href="/Register/add">Advanced Registration</a>
    <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://paypal.me/nanaimoopen" title="How PayPal Works" onclick="javascript:window.open('https://paypal.me/nanaimoopen','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_74x46.jpg" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->
    <?php } else { ?>
    <p>Email for information on how to register early. Registration page coming shortly.</p>
    <?php } ?>
    <p>CFC Membership required. Tournament Memberships are $16 or $38 a year for BC Residents. For first time players or
        CFC members who haven’t played in 5 or more years we will offer free Tournament memberships.</p>
</div>
<div class="Accomandation">
<p>The Coast Bastion Hotel is offering us a group rate of $105 a night on a first come first serve basis. <br>
    Use code: <span>CBI-GFC16053</span></p>
</div>
<div class="conatct">
    Organizers: Nick Peters (250)607-7999 , Jason Williamson (250)797-0231
    Email: nanaimo.open@gmail.com
</div>
</body>
<?php include('footer.php');?>
