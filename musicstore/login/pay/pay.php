<?php
session_start();
include_once '../dbconnect.php';

if(isset($_SESSION['user']))
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>




<!DOCTYPE html>
<html lang="en">


<head>
    <title>Place Your Order - Payment Form</title>
    <meta charset="UTF-8">
    <meta name="description" content="HTML5 form for placing an order">
    <meta name="keywords" content="HTML5, CSS3, form, place order">
    <meta name="author" content="Marko Dimitrijevic">


    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>


<body>
    
    <form id="payment" action="../afterpay.php" method="post">
    
        <h1 class="title">Payment form</h1>
    
        <fieldset>
            <legend>Your details</legend>
            <ol>
                <li>
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="First and last name" required autofocus>
                </li>
                
                <li>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="yourmail@domain.com" required>
                </li>
                
                <li>
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="tel" placeholder="+381 11 1234567" required>
                </li>
            </ol>
        </fieldset>
        
        <fieldset>
            <legend>Delivery address</legend>
            <ol>
                <li>
                    <label for="adress">Adress</label>
                    <textarea id="adress" name="adress" rows="5" required></textarea>
                </li>
                
                <li>
                    <label for="postalcode">Postal code</label>
                    <input id="postalcode" name="postalcode" type="text" placeholder="e.g. 11000" pattern="\d{5}" required>
                </li>
                
                <li>
                    <label for="country">Country</label>
                    <input id="country" name="country" type="text" list="country-list" required>
                        <datalist id="country-list">
                        <option value="Afghanistan">
                        <option value="Albania">
                        <option value="Algeria">
                        <option value="Andorra">
                        <option value="Angola">
                        <option value="Antigua & Deps">
                        <option value="Argentina">
                        <option value="Armenia">
                        <option value="Australia">
                        <option value="Austria">
                        <option value="Azerbaijan">
                        <option value="Bahamas">
                        <option value="Bahrain">
                        <option value="Bangladesh">
                        <option value="Barbados">
                        <option value="Belarus">
                        <option value="Belgium">
                        <option value="Belize">
                        <option value="Benin">
                        <option value="Bhutan">
                        <option value="Bolivia">
                        <option value="Bosnia Herzegovina">
                        <option value="Botswana">
                        <option value="Brazil">
                        <option value="Brunei">
                        <option value="Bulgaria">
                        <option value="Burkina">
                        <option value="Burundi">
                        <option value="Cambodia">
                        <option value="Cameroon">
                        <option value="Canada">
                        <option value="Cape Verde">
                        <option value="Central African Rep">
                        <option value="Chad">
                        <option value="Chile">
                        <option value="China">
                        <option value="Colombia">
                        <option value="Comoros">
                        <option value="Congo">
                        <option value="Congo {Democratic Rep}">
                        <option value="Costa Rica">
                        <option value="Croatia">
                        <option value="Cuba">
                        <option value="Cyprus">
                        <option value="Czech Republic">
                        <option value="Denmark">
                        <option value="Djibouti">
                        <option value="Dominica">
                        <option value="Dominican Republic">
                        <option value="Timor Leste">
                        <option value="Ecuador">
                        <option value="Egypt">
                        <option value="El Salvador">
                        <option value="Equatorial Guinea">
                        <option value="Eritrea">
                        <option value="Estonia">
                        <option value="Ethiopia">
                        <option value="Fiji">
                        <option value="Finland">
                        <option value="France">
                        <option value="Gabon">
                        <option value="Gambia">
                        <option value="Georgia">
                        <option value="Germany">
                        <option value="Ghana">
                        <option value="Greece">
                        <option value="Grenada">
                        <option value="Guatemala">
                        <option value="Guinea">
                        <option value="Guinea-Bissau">
                        <option value="Guyana">
                        <option value="Haiti">
                        <option value="Honduras">
                        <option value="Hungary">
                        <option value="Iceland">
                        <option value="India">
                        <option value="Indonesia">
                        <option value="Iran">
                        <option value="Iraq">
                        <option value="Ireland {Republic}">
                        <option value="Israel">
                        <option value="Italy">
                        <option value="Ivory Coast">
                        <option value="Jamaica">
                        <option value="Japan">
                        <option value="Jordan">
                        <option value="Kazakhstan">
                        <option value="Kenya">
                        <option value="Kiribati">
                        <option value="Korea North">
                        <option value="Korea South">
                        <option value="Kuwait">
                        <option value="Kyrgyzstan">
                        <option value="Laos">
                        <option value="Latvia">
                        <option value="Lebanon">
                        <option value="Lesotho">
                        <option value="Liberia">
                        <option value="Libya">
                        <option value="Liechtenstein">
                        <option value="Lithuania">
                        <option value="Luxembourg">
                        <option value="Macedonia">
                        <option value="Madagascar">
                        <option value="Malawi">
                        <option value="Malaysia">
                        <option value="Maldives">
                        <option value="Mali">
                        <option value="Malta">
                        <option value="Marshall Islands">
                        <option value="Mauritania">
                        <option value="Mauritius">
                        <option value="Mexico">
                        <option value="Micronesia">
                        <option value="Moldova">
                        <option value="Monaco">
                        <option value="Mongolia">
                        <option value="Montenegro">
                        <option value="Morocco">
                        <option value="Mozambique">
                        <option value="Myanmar, {Burma}">
                        <option value="Namibia">
                        <option value="Nauru">
                        <option value="Nepal">
                        <option value="Netherlands">
                        <option value="New Zealand">
                        <option value="Nicaragua">
                        <option value="Niger">
                        <option value="Nigeria">
                        <option value="Norway">
                        <option value="Oman">
                        <option value="Pakistan">
                        <option value="Palau">
                        <option value="Panama">
                        <option value="Papua New Guinea">
                        <option value="Paraguay">
                        <option value="Peru">
                        <option value="Philippines">
                        <option value="Poland">
                        <option value="Portugal">
                        <option value="Qatar">
                        <option value="Romania">
                        <option value="Russian Federation">
                        <option value="Rwanda">
                        <option value="St Kitts & Nevis">
                        <option value="St Lucia">
                        <option value="Saint Vincent & the Grenadines">
                        <option value="Samoa">
                        <option value="San Marino">
                        <option value="Sao Tome & Principe">
                        <option value="Saudi Arabia">
                        <option value="Senegal">
                        <option value="Serbia">
                        <option value="Seychelles">
                        <option value="Sierra Leone">
                        <option value="Singapore">
                        <option value="Slovakia">
                        <option value="Slovenia">
                        <option value="Solomon Islands">
                        <option value="Somalia">
                        <option value="South Africa">
                        <option value="Spain">
                        <option value="Sri Lanka">
                        <option value="Sudan">
                        <option value="Suriname">
                        <option value="Swaziland">
                        <option value="Sweden">
                        <option value="Switzerland">
                        <option value="Syria">
                        <option value="Taiwan">
                        <option value="Tajikistan">
                        <option value="Tanzania">
                        <option value="Thailand">
                        <option value="Togo">
                        <option value="Tonga">
                        <option value="Trinidad & Tobago">
                        <option value="Tunisia">
                        <option value="Turkey">
                        <option value="Turkmenistan">
                        <option value="Tuvalu">
                        <option value="Uganda">
                        <option value="Ukraine">
                        <option value="United Arab Emirates">
                        <option value="United Kingdom">
                        <option value="United States of America">
                        <option value="Uruguay">
                        <option value="Uzbekistan">
                        <option value="Vanuatu">
                        <option value="Vatican City">
                        <option value="Venezuela">
                        <option value="Vietnam">
                        <option value="Yemen">
                        <option value="Zambia">
                        <option value="Zimbabwe">
                        </datalist>
                </li>
            </ol>
        </fieldset>
        
        <fieldset class="cards">
            <legend>Card details</legend>
                <ol>

                    <li>
                        <label for="visa">VISA</label>
                        <input id="visa" name="cardtype" type="radio" checked="checked">
                    </li>
                                
                    <li>
                        <label for="mastercard">Mastercard</label>
                        <input id="mastercard" name="cardtype" type="radio">
                    </li>
                                
                    <li>
                        <label for="amex">AmEx</label>
                        <input id="amex" name="cardtype" type="radio">
                    </li>

                  
                    <li>
                        <label for="cardnumber">Card number</label>
                        <input id="cardnumber" name="cardnumber" type="text" required>
                    </li>
                    
                    <li>
                        <label for="secure">Security code</label>
                        <input id="secure" name="secure" type="number" required>
                    </li>
                    
                    <li>
                        <label for="exdate">Expiration date</label>
                        <input id="exdate" name="exdate" type="date" required>
                    </li>
                    
                    <li>
                        <label for="namecard">Name on card</label>
                        <input id="namecard" name="namecard" type="text" placeholder="Exact name as on the card" required>
                    </li>
                </ol>
        </fieldset>
        
        <fieldset>
            <button type="submit">Place Order!</button>
        </fieldset>
    </form>
    
    <footer>
        <p>
            <a href="http://validator.w3.org/check" title="Revalidate HTML" target="_blank"><img src="images/html5_valid.png" alt="W3C Valid HTML5"></a>
            <a href="http://jigsaw.w3.org/css-validator/" title="Revalidate CSS" target="_blank"><img src="images/valid-css.gif" alt="W3C Valid CSS"></a>
        </p>
    </footer>
    
</body>

</html>

<?php
}
?>
