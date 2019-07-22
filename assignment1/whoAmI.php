<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>who am I</title>
       <style> 
    body {  background-color: #004C4C;
            color: white;
            font-family: Tahoma, Geneva, sans-serif;
    }
    h1 {    text-align: center;
            font-family: Tahoma, Geneva, sans-serif;
    }

    h2 {    text-align: center;
            font-family: Tahoma, Geneva, sans-serif;
    }

    h3 {    text-align: center;
            font-family: Tahoma, Geneva, sans-serif;
    }

    table { display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: gray;
    }

    td, th, tr {
            padding: 5;
            width: 75%;
            text-align: center;
    }

    a:link {
            color: #66CCFF;
    }

    a:visited {
            color: #3D991F;
    }

    a:hover {
            color: #B87070;
    }

    a:active {
            color: #D699FF;
    }
        </style> 
    </head>
    <body>
        <h1>WHO AM I?</h1>
		<hr size="6" noshade width="75%"/>
		<h2>Enter Your Information To Find Out Who You Are.</h2>
		
                <form method="post" action="whoYouAre.php">
		
                <p>Name: <input name="Name" size="13"/></p>
                <p>Born year:  <select name="Age"><option value="Age">--</option>
		<option>2017</option><option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option><option>1950</option></p>
		</select>
		<p>Address: <input type="text" name="Address" size="20"/></p>
		<p>State: <input type="text" name="State" size="13"/></p>
		<p>Sex: <select name="Gender"><option>--</option>
		<option value ='M'>M</option><option value ='F'>F</option>			</select>
		<center><p><input type="submit" name="submitbutton"  value="SUBMIT"></p></center>
		<center><p><input type="reset" name="resetbutton"  value="RESET"></p></center>
		</form>
    </body>
</html>
