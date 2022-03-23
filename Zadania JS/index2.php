<!DOCTYPE html>
<html lang="pl">
     <head>
         <meta charset="UTF-8"  />
         <link rel="stylesheet" href="style.css"></link>
         <style>
            .Div1 {
              float:left;
              width: 200px;
              height: 900px;
              border: 5px outset rgba(255, 40, 40, 0.719);
              background-color: rgb(231, 110, 12);
              text-align: center;
            }
            .Div2 {
              width: 200px;
              float:right;
              height: 900px;
              border: 5px outset rgba(255, 40, 40, 0.719);
              background-color:rgb(231, 110, 12);
              text-align: center;
            }
            
            .Div3 {
                
             
                height: 900px;
                border: 5px outset rgba(255, 40, 40, 0.719);
                background-color: rgb(231, 110, 12);
                text-align: center;
            }
            .Div4 {
                
                margin: 0;
                position: absolute;
                top: 25%;
                left: 50%;
                bottom: 90%;
                margin-right: 50%;
                transform: translate(-50%, -50%)
            }
            .button {
                top: 20%;
                background-color: red;
                border: 3px outset rgba(255, 40, 40, 0.719);
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            


           



            .button2 {
              background-color: initial;
              background-image: linear-gradient(-180deg, #FF7E31, #E62C03);
              border-radius: 6px;
              box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
              color: #FFFFFF;
              cursor: pointer;
              display: inline-block;
              font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
              height: 40px;
              line-height: 40px;
              outline: 0;
              overflow: hidden;
              padding: 0 20px;
              pointer-events: auto;
              position: relative;
              text-align: center;
              touch-action: manipulation;
              user-select: none;
              -webkit-user-select: none;
              vertical-align: top;
              white-space: nowrap;
              width: 100%;
              z-index: 9;
              border: 0;
              transition: box-shadow .2s;
}

.button2:hover {
  box-shadow: rgba(253, 76, 0, 0.5) 0 3px 8px;
}

</style>
            
     </head>
     <body background="tlo.jpg">
        <div class="Div1">
            <h2>Flat Modern UI</h2> 
        </div>
     <div class="Div2">
              <h2>Flat Modern UI</h2>
    </div>
    <div class="Div3">
    <div class="Div4">
    
    <form action="form.php" method="post" >
    Imie: <input type="text" name="imie" /> <br>
    Nazwisko: <input type="text" name="Nazwisko" /> <br />
    <button class="button2" type="submit" value="przycik">Potwierdz</button>
        
    </form>
    </div>
    </div>

 
