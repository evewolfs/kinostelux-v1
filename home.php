<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./scss/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/eci5czw.css">
    <title><?php echo $lang['title']; ?></title>
  </head>
  <body>
  
  <div class="fade-in-text">
    <div class="home-layout">
  <a href="home.php"><div class="logo-home"><img src="kinostelux-logo2407.svg"></div></a>
  

<br/>
  <div class="home-container">
    <div class="home-text" >Prendre rendez-vous avec</div>
    <form name="form" >
    <select size="1" id="select" onChange="location = this.options[this.selectedIndex].value;">
  
    <option selected="true" disabled="disabled">prendre rendez-vous avec</option> 
      <option value="gregory.php" >Grégory Berghman</option>
      <option value="virginie.php" >Virginie Ledouppe</option>
      <option value="malika.php" >Malika Harboun</option>
      <option value="marie.php" >Marie-Catherine Lelling</option>
    </select>

  </form>
  <br/>
  <div class="home-text">Pas encore de praticien?</div>
  <a href="cabinet.php"><button>voir toutes les disponibilités</button></a>

 

  </div>
  </div>
  </div>
  </div>

 
     <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
  </body>
</html>

