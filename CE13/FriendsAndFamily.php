<!DOCTYPE html>
<html>
    <head>


        <title>FRIENDS AND FAMILY</title>

        <link href="style1.css" rel="stylesheet" type="text/css">


        <script type="text/javascript">
            // Form validation code will come here.

            function validate() {

                if (document.myForm.Firstname.value == "")
                {
                    alert("Please provide your first name!");
                    document.myForm.Firstname.focus();


                    return false;
                }
                if (document.myForm.Lastname.value == "")
                {
                    alert("Please provide your last name!");
                    document.myForm.Lastname.focus();
                    return false;

                }

                if (document.myForm.Phonenumber.value == "" ||
                        isNaN(document.myForm.Phonenumber.value) ||
                        document.myForm.Phonenumber.value.length != 9)
                {
                    alert("Please provide a correct phone number for the format #####.");
                    document.myForm.Phonenumber.focus();
                    return false;

                }

                if (document.myForm.Address.value == "")
                {
                    alert("Please provide your address!");
                    document.myForm.Address.focus();
                    return false;

                }
                if (document.myForm.City.value == "")
                {
                    alert("Please provide your city!");
                    document.myForm.City.focus();
                    return false;

                }

                if (document.myForm.State.value == "")
                {
                    alert("Please provide your state!");
                    document.myForm.State.focus();
                    return false;

                }

                if (document.myForm.Zip.value == "" ||
                        isNaN(document.myForm.Zip.value) ||
                        document.myForm.Zip.value.length != 5)
                {
                    alert("Please provide a zip in the format #####.");
                    document.myForm.Zip.focus();
                    return false;

                }

//                if (document.myForm.Birthdate.value == "")
//                {
//                    alert("Please provide your date of birth!");
//                    document.myForm.Birthdate.focus();
//                    return false;
//
//                }

                if (document.myForm.Username.value == "")
                {
                    alert("Please provide a username!");
                    document.myForm.Username.focus();
                    return false;

                }

                if (document.myForm.Password.value == "")
                {
                    alert("Please provide a password!");
                    document.myForm.Password.focus();
                    return false;

                }

                if (document.myForm.Sex.value == "")
                {
                    alert("Please provide a gender!");
                    document.myForm.Sex.focus();
                    return false;

                }

                if (document.myForm.Relationship.value == "")
                {
                    alert("Please specify a relationship!");
                    document.myForm.Relationship.focus();
                    return false;
                }

                expression = /^[a-zA-Z]+$/;
                console.log(expression.test(document.myForm.Firstname.value));
                if (!expression.test(document.myForm.Firstname.value)) {
                    alert("You need to enter a valid first name with all capital or small letter");
                    document.myForm.Firstname.focus();
                    return false;
                }
                if (!document.myForm.Firstname.value.match(expression)) {
                    alert("You need to enter a valid first name with all capital or small letter");
                    document.myForm.Firstname.focus();
                    return false;
                }
                return(true);





                expression = /^[a-zA-Z]+$/;
                console.log(expression.test(document.myForm.Lastname.value));
                if (!expression.test(document.myForm.Lastname.value)) {
                    alert("You need to enter a valid first name with all capital or small letter");
                    document.myForm.Lastname.focus();
                    return false;
                }
                if (!document.myForm.Lastname.value.match(expression)) {
                    alert("You need to enter a valid first name with all capital or small letter");
                    document.myForm.Lastname.focus();
                    return false;
                }
                return(true);


                expression = /^[0-9]+$/;
                console.log(expression.test(document.myForm.Phonenumber.value));
                if (!expression.test(document.myForm.Phonenumber.value)) {
                    alert("You need to enter a valid phone number");
                    document.myForm.Phonenumber.focus();
                    return false;
                }
                if (!document.myForm.Phonenumber.value.match(expression)) {
                    alert("You need to enter a valid phonenumber");
                    document.myForm.Phonenumber.focus();
                    return false;
                }


                return(true);
            }
            //-->

        </script>
        <style>

        </style>
    </head>
    <body>
        <!--onsubmit="validate()"-->


        <form action="FandFResult.php" name="myForm" method="post" onsubmit="return(validate());">
            <table cellpadding="0" cellspacing="1">

                <tr>
                    <td colspan="3"><h1>Please Fill Out The Form To Access More Info About Your Friends And Family!</h1></td>
                </tr>



                <tr>
                    <td align="right">
                        FirstName</td>
                    <td align="left">
                        <input type="text" name="Firstname" /> </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        LastName</td>
                    <td align="left">
                        <input name="Lastname" type="text" /></td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td align="right">
                        PhoneNumber</td>
                    <td align="left">
                        <input name="Phonenumber" type="text" size="35" /></td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Address</td>
                    <td>
                        <input type="text" name="Address" size="35" /></td>
                    <td>&nbsp;
                    </td>
                </tr>



                <tr>
                    <td align="right">
                        City</td>
                    <td>
                        <input type="text" name="City" size="35" /></td>
                    <td>&nbsp;
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        State</td>
                    <td>
                        <select name="State">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </td>
                    <td>
                    </td>
                </tr>



                <tr>
                    <td align="right">
                        Zip</td>
                    <td>

                        <input type="number" name="Zip"/></td>
                    <td>
                    </td>
                </tr>



                <tr>
                    <td align="right">
                        Birthdate:</td>
                    <td><select name="month">

                            <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                    </select>
                        <select name="day">
                            <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option>                                    </select>



                        <select name="year">
                            <option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option>                                    </select>
                    </td>
                    <td>&nbsp;
                    </td>
                </tr>



                <tr>
                    <td align="right">Username: </td>
                    <td><input name="Username" type="text"  maxlength="55">
                    </td>
                </tr>

                <tr>
                    <td align="right">Password: </td>
                    <td><input name="Password" type="password"></td>
                </tr>

                <tr>
                    <td align="right">Sex: </td>
                    <td><input name="Sex" type="radio" checked="checked" value="Male">Male <input name="Sex" type="radio" value="Female">Female</td>
                </tr>
                <tr>
                    <td align="right" >
                        Relationship</td>
                    <td>
                        <select name="Relationship">
                            <option value="Spouse">Spouse</option>
                            <option value="friend">Friend</option>
                            <option value="grand">GrandParent</option>                                        
                            <option value="child">Child</option>
                            <option value="sibling">Sibling</option>
                            <option value="parentSib">Aunt/Uncle</option>
                            <option value="cousin">Cousin</option>
                            <option value="coworker">Co-worker</option>
                            <option value="enemy">Enemy</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td>
                        <table>
                            <tr>
                                <td><input type="submit"  value="insert" onclick="return(validate())" name='action'></td>
                                <td><input type="submit"  value="update" onclick="return(validate())" name='action'></td>
                                <td><input type="submit" value="search" name='action'></td>
                            </tr>
                        </table>
                    </td>
                    <td></td>
                </tr>
            </table>
        </form>




        <footer>
            <a href="https://twitter.com"><img class="social-icon" src="twitter-wrap.png"></a>
            <a href="https://www.facebook.com"><img class="social-icon" src="facebook-wrap.png"></a>
            <p>&copy; 2018 KARANPREET SINGH</p>
        </footer>
    </body>
</html>

