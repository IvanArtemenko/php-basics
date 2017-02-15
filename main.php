
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css" type="text/css">
  <title>OMG PHP please...</title>
</head>
<body>

<div class="container">
    <h1 style="text-align: center"><a href="list.php">Check list</a></h1>
    <form method="post" action="submit.php">
        <fieldset>
            <legend>Shortly about yourself</legend>
            <dl>
                <dt><label for="name">Name:</label></dt>
                <dd><input type="text" name="firstname" id="firstname" required></dd>
            </dl>
            <dl>
                <dt><label for="surname">Surname:<label></dt>
                <dd><input type="text" name="secondname" id="secondname" required ></dd>
            </dl>
            <dl>
                <dt>Пол:</dt>
                <dd>
                    <input type="radio" name="gender" id="gender-m" value="m" checked>
                    <label for="gender-m">Male</label>
                    <input type="radio" name="gender" id="gender-f" value="f">
                    <label for="gender-f">Female</label>
                </dd>
            </dl>
            <dl>
                <dt><label for="age">Age:<label></dt>
                <dd><input type="number" name="age" id="age" min= "1" max="55"> years</dd>
            </dl>
        </fieldset>
        <fieldset>
            <legend>About yourself</legend>
            <ul>
                <li>
                    <input type="radio" name="gender2" id="gender2-m" value="m">
                    <label for="gender2-m">Male</label>
                </li>
                <li>
                    <input type="radio" name="gender2" id="gender2-f" value="f">
                    <label for="gender2-f">Female</label>
                </li>
                <li>
                    <input type="text" name="birthday" id="birthday" placeholder="xxxx-xx-xx">
                    <label for="birthday">Birthday</label>
                </li>
                <li>
                    <input type="text" name="status" id="status">
                    <label for="status">Family status</label>
                </li>
                <li>
                    <input type="text" name="status-soc" id="status-soc">
                    <label for="status-soc">Social status</label>
                </li>
                <li>
                    <input type="text" name="address" id="address">
                    <label for="address">Location</label>
                </li>
            </ul>
            <p>What you do on weekends:</p>
            <ul>
                <li>
                    <input type="checkbox" name="activities[]" id="sleeping" value="Sleeping">
                    <label for="sleeping">Sleeping</label>
                </li>
                <li>
                    <input type="checkbox" name="activities[]" id="friends" value="Hanging out with friends">
                    <label for="friends">Hanging out with friends</label>
                </li>
                <li>
                    <input type="checkbox" name="activities[]" id="fishing" value="Fishing">
                    <label for="fishing">Fishing</label>
                </li>
                <li>
                    <input type="checkbox" name="activities[]" id="games" value="Playing games">
                    <label for="games">Playing games</label>
                </li>
            </ul>
            <p>Languages that you like:</p>
            <ul>
                <li>
                    <select name="whatyoulike">
                        <option selected value="0">Site frequency</option>
                        <option value="PHP">PHP</option>
                        <option value="JS">JS</option>
                        <option value="Ruby">RUBY</option>
                    </select>
                </li>
            </ul>
            <p>How many books have you read in your lifetime:</p>
            <ul>
                <li>
                    <input type="radio" name="books" id="books10" value="10">
                    <label for="books10">0-10</label>
                </li>
                <li>
                    <input type="radio" name="books" id="books20" value="20">
                    <label for="books20">11-20</label>
                </li>
                <li>
                    <input type="radio" name="books" id="books50" value="50">
                    <label for="books50">21-50</label>
                </li>
                <li>
                    <input type="radio" name="books" id="books50p" value="9999">
                    <label for="books50p">50+</label>
                </li>
            </ul>
            <p><label for="comment">Your comment:</label></p>
            <textarea cols="100" id="comment" rows="5" name="comment">
    </textarea>
            <p></p>
            <select name="multiselect" multiple="multiple" cols="3">
                <option value="1">Frontend & CMS</option>
                <option value="2">Advanced PHP</option>
                <option value="3">JavaScript</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>And finally</legend>
            <input type="text" name="samplefield" value="This field was already filled" disabled="true">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <p>Want to subscribe for best spam sending?</p>
            <i>Choose category</i>
            <ul>
                <li>
                    <input type="checkbox" name="spam[]" id="equipment" value="Equipment">
                    <label for="equipment">Equipment</label>
                </li>
                <li>
                    <input type="checkbox" name="spam[]" id="cooking" value="How to cook">
                    <label for="cooking">How to cook</label>
                </li>
                <li>
                    <input type="checkbox" name="spam[]" id="earn" value="Earn 1 million for two days!">
                    <label for="earn">Earn 1 million for two days!</label>
                </li>
            </ul>
            <p>How difficult was the task?</p>
            <ul>
                <li>
                    <input type="radio" name="complexity" id="easiest" value="Easy peasy lemon squeezy">
                    <label for="easiest">Easy peasy lemon squeezy</label>
                </li>
                <li>
                    <input type="radio" name="complexity" id="easy" value="So-so">
                    <label for="easy">So-so</label>
                </li>
                <li>
                    <input type="radio" name="complexity" id="hard" value="Extremely hard">
                    <label for="hard">Extremely hard</label>
                </li>
            </ul>
        </fieldset>
        <input type="submit" name="submit" value="Send">
    </form>
</div>

</body>
</html>