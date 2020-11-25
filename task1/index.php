


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Backend Task 1</title>
</head>
<body>
<form    action ='action.php'method="post">
    <label htmlfor="text">UserName</label>
    <input type="text" name="username">
    <br><br>
    <label htmlfor="password">Password</label>
    <input type="password" name="password">
    <br><br>
  
    <input type="checkbox" name="checkBox"> checkBox </input>
    <br><br>
    <label>color</label>
    <input type="color" name="color">
    <br><br>
    <label>date</label>
    <input type="date" name="date">
    <br><br>
    <label>dateTime</label>
    <input type="datetime" name="dateTime">
    <br><br>
    <label>DETERMINE LOCAL</label>
    <input type="datetime-local" name="determineLocal">
    <br><br>
    <label>Email</label>
    <input type="email" name="email">
    <br><br>
    <label>file</label>
    <input type="file" name="file" >
    <br><br>
    
    <label>month</label>
    <input type="month" name="month">
    <br><br>
    <label>number</label>
    <input type="number" name="number">
    <br><br>
    <input type="radio" name="radio" value='radio1'> Radio </input>
    <br><br>
    <label>range</label>
    <input type="range" name="range">
    <br><br>
    <label>search</label>
    <input type="search" name="search">
    <br><br>
    <label>telephone</label>
    <input type="tel" name="tel">
    <br><br>
    <label>time</label>
    <input type="time" name="time">
    <br><br>
    <label>url</label>
    <input type="url" name="url">
    <br><br>
    <label>week</label>
    <input type="week" name="week"> 
    <br><br>
    <label for="ice-cream-choice">Choose a flavor:</label>
<input list="ice-cream-flavors" id="ice-cream-choice" name="data-list" />

<datalist id="ice-cream-flavors">
    <option value="Chocolate">
    <option value="Coconut">
    <option value="Mint">
    <option value="Strawberry">
    <option value="Vanilla">
</datalist>
<br><br>

<label for="pet-select">Choose a pet:</label>

<select name="select" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>
<br><br>

<label for="story">Tell us your story:</label>

<textarea id="story" name="textArea"
          rows="5" cols="33">
It was a dark and stormy night...
</textarea>
<br><br>

    <button type="submit">Submit</button>
</form>
</body>


