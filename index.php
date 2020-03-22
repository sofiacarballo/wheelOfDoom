<!DOCTYPE html>
<html lang="en"></html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wheel of doom</title>
    <link rel="stylesheet" type="text/css" href="WheelOfDoom.css" />
  </head>

  <body>
       <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    
    <header>
      <img src="images/skull.png" alt="Skull">
      <h1>Wheel of Doom</h1>
    </header>
    
    <nav>
      <img class="logo" src="Images/logo.png" alt="InterCodersIcon" />
    </nav>
  
    <div>
      <hr id="line-1">
        <h3>Who is gonna be the next one?</h3> 
      <hr id="line-2">
    </div>

   <section>
      <form action="connections\mysqlRandom.php">
        <label for="dieNameButton">
          <input class="button kill" type="submit" name="dieNameButton" value="KILL A CODER">
        </label>
        <label for="dieName">
          <table class="text-box die-name" type="text" id=dieName required name="Name">
          <tr>
             <td>
             <?php include('connections\mysqlRandom.php')?>
              </td>
              </tr>
          </table>
        </label>
      </form>
    </section>
    
    <section>
       <form action="connections/save_coder.php"  method="post"> 
        <label for="addNameButton"> 
          <input class="button add" type="submit" name="addNameButton" value="ADD A CODER">
        </label>
        <label for="addName">
          <input class="text-box add-name" type="text" id=addName required name="Name" placeholder="Name">
          <select class="text-box status-name" id=addName required name="Status">
            <option value="Alive" selected>Alive</option>
            <option value="Dead">Dead</option>
          </select>
        </label>
      </form>
    </section>
 
    <!--
    <section class="deadAliveNumber">
      <label for="deadNumber">Dead</label>
      <input class="number" type="text" id=deadNumber required name="" value="">
      <label for="aliveNumber">Alive</label>
      <input class="number" type="text" id=aliveNumber required name="" value="">
    </section>
    -->
    <section class="list alive">
      <table>
        <tr>
          <th><u>Still alive</u></th>
          <td>
            <?php include('connections\listAlive.php')?>
          </td>
        </tr>
     </table>
    </section>

    <section class="list dead">
      <table>
        <tr>
          <th><u>Dead</u></th>
          <td>
            <?php include('connections\listDead.php')?>
          </td>
        </tr>
     </table>
    </section>
  <!--
    <footer>
      <a class="repository" href="https://github.com/InterCoders2020"> Our repository </a>
    </footer>
-->
  </body>
</html>