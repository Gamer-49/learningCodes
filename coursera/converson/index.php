<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Document</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <section id="home">
        <header>
          Unit Conversions
        </header>
        <nav>
          <div class="topdiv">
            <a href="#temperature"><button  class="topmenu">Temperature</button></a>
            <a href="#weight"><button  class="topmenu">Weight</button></a>
            <a href="#distance"><button  class="topmenu">Distance</button></a>
          </div>
        </nav>
      </section>    
      <div style="clear:both;"></div>
     
      <div id="all-conversion-sections">

        <section id="temperature"  class="b temperature">
          <div id="tmp">
            <figure>
              <img src="https://cf-courses-data.s3.us.cloud-object-storage.appdomain.cloud/IBMDeveloperSkillsNetwork-CD0101EN-SkillsNetwork/labs/Theia%20Labs/02%20-%20HTML5%20Elements/images/thermo.png" width="150px"/>
              <figcaption>Celcius to Farenheit Conversion</figcaption>
            </figure>
            <article> 

              <fieldset>
                <legend>Temperature</legend>
                <label for="Temperature">Celsius</label> <br/>

 <input type="number" id="c"> <br/>

                <button id="temperature"> Convert </button> <br/>

                <input type="number" id="f"> <br/>

 <label for="Temperature">Fahrenheit</label>
              </fieldset>
              <aside>
                To convert celsuis to fahrenheit yourself, use this formula replacing the `C` with your temperature in celsuis: (C Ã— 9/5) + 32
              </aside>
            </article>
          </div>
        </section>

        <div style="clear:both;"></div>
      
        <section id="weight"  class="b weight">          
          <div id="wgt">
            <figure>
              <img src="https://cf-courses-data.s3.us.cloud-object-storage.appdomain.cloud/IBMDeveloperSkillsNetwork-CD0101EN-SkillsNetwork/labs/Theia%20Labs/02%20-%20HTML5%20Elements/images/weight.png"  width="150px"/>
              <figcaption>Kilograms to Pound Conversion</figcaption>
            </figure>
            <article>
              <fieldset>
                <legend>Weight</legend>
                <label for="Weight">KG</label> <br/>

 <input type="number"> <br/>

                <button id="weight"> Convert </button>  <br/>

 
                <input type="number">  <br/>

  <label for="Weight">Pounds</label>    
              </fieldset>
              <aside>
                To convert kilograms to pounds yourself, use this formula replacing the `kg` with your weight in kilograms: kg x 2.205
              </aside>      
            </article>
          </div>
        </section>

        <div style="clear:both;"></div>

        <section id="distance"  class="b distance">
          <div id="dst">
            <figure>
              <img src="https://cf-courses-data.s3.us.cloud-object-storage.appdomain.cloud/IBMDeveloperSkillsNetwork-CD0101EN-SkillsNetwork/labs/Theia%20Labs/02%20-%20HTML5%20Elements/images/speedo.png"  width="150px"/>
              <figcaption>Kilometers to Miles Conversion</figcaption>
            </figure>
            <article>
              <fieldset>
                <legend>Distance</legend>
                  <label for="Distance">KM</label> <br/>

 <input type="number">  <br/>

                  <button id="distance"> Convert </button> <br/>

                  <input type="number">  <br/>

  <label for="Distance">Miles</label>
              </fieldset>
              <aside>
                To convert kilometers to miles yourself, use this formula replacing the `km` with your distance in kilmeters: km &divide; 1.609
              </aside>
    
            </article>
          </div>
        </section>
        <div style="clear:both;"></div>

      </div>

    <div id="go-home" class="iconbutton">
      <a href="#home">
        <img src="https://cf-courses-data.s3.us.cloud-object-storage.appdomain.cloud/IBMDeveloperSkillsNetwork-CD0101EN-SkillsNetwork/labs/Theia%20Labs/02%20-%20HTML5%20Elements/images/home.svg"/>
      </a>
    </div>

    <footer>Learn more about HTML and CSS as a part of IBM Fullstack Cloud Developer Certification</footer>
  </body>
</html>