<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>fitPal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/styles.css'>
</head>
<body>
    
    <header>
        <!-- logo section -->
        <h1><a href="#">fitPal<b>.</b></a></h1>
        <button onclick="showLoginForm()" href="">Login</button>
    </header>

    <main>
        <div class="content-side" id="signUp">
          <article>
            <p>
              <b>"</b>
              Fitness is not a destination, it is a journey. It's not a quick fix, it's a lifestyle.
              <b>"</b>
            </p>
            <!-- later will have this property => onclick="showRegForm()" -->
            <button href=""><span>Start Your Lifestyle </span></button>
          </article>
        </div>

        <nav>
          <ul>
            <li><a href="#signUp">signUp</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#aboutUs">aboutUs</a></li>
            <li><a href="#contactUs">contactUs</a></li>
          </ul>
        </nav>

        <section id="services">
          <h2>Services.</h2>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi assumenda cumque aliquid recusandae impedit vero asperiores iure, unde necessitatibus accusantium nemo possimus atque, facilis doloribus dolor odit, eos omnis est.
          </p>
          <p>Dolorem qui commodi porro facere odio quos cumque quidem error tenetur quam sed ea tempora aliquid asperiores culpa nesciunt excepturi, obcaecati dolorum molestias impedit vel necessitatibus in cum! Vitae, autem!</p>
          <p>Natus distinctio corrupti eius, corporis repellat labore doloremque ea hic pariatur, perspiciatis cumque voluptatem blanditiis consequuntur dolores suscipit? Sint laudantium architecto praesentium nobis. Distinctio enim voluptas minus delectus, repudiandae beatae.</p>
          <p>Et sit optio maxime omnis similique necessitatibus odit dolorum excepturi deleniti iste dolorem voluptas laudantium at alias minima explicabo, nam corrupti cupiditate. Deserunt tenetur deleniti vitae animi, maxime iste. Fuga?</p>
          <p>Omnis dolor velit, reprehenderit vero cumque maxime odio obcaecati assumenda. Omnis minus quibusdam quis id modi doloribus corrupti nesciunt laboriosam vero iusto, atque accusamus exercitationem, officiis, illo facere itaque dicta!</p>
          <p>Corrupti inventore provident ullam eveniet nulla ipsum laboriosam culpa, exercitationem perferendis. Facere hic incidunt magni itaque ipsam eveniet vel mollitia quam qui corporis laudantium natus blanditiis, dolorum dolorem, maxime molestiae?</p>
          <p>Cumque, eveniet. Temporibus provident mollitia, minus perspiciatis explicabo saepe sapiente repellat neque ullam, aliquid in, doloremque officia illum. At error, consequuntur modi recusandae nam excepturi magnam unde deleniti et qui.</p>
          <p>Dignissimos eligendi quisquam nemo inventore porro. Asperiores consectetur dolorum inventore necessitatibus ex obcaecati excepturi modi aperiam voluptatem autem, temporibus officia velit fuga, quod veritatis fugiat ut at? Architecto, minus laborum.</p>
          <p>Debitis deleniti, repellendus accusantium nisi repellat iure ad perferendis quae quam dolores delectus? Perferendis ipsum impedit sunt, dolores blanditiis iste nemo consequatur explicabo nobis temporibus quidem debitis recusandae velit molestiae.</p>
          <p>Sunt illum explicabo dicta aliquid! Eveniet error amet architecto autem cum, dicta hic dignissimos eius ipsa rerum, rem odio? Consequatur doloremque culpa natus iusto dicta ut deserunt ea quos quisquam?</p>
        </section>

        <section id="aboutUs">
          <h2>About Us.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error voluptates, adipisci atque quo aliquid quae a officiis magni maiores cumque quam molestiae doloribus assumenda nemo, ipsa natus facilis esse?</p>
          <p>Id commodi atque illo, corrupti voluptatum dolor aliquam ab deserunt dignissimos nihil quo veniam laudantium consectetur enim eaque ut tenetur animi facilis cumque harum doloribus aperiam maxime? Eveniet, consequatur facere?</p>
          <p>Fugiat dolorem quis itaque omnis reiciendis, exercitationem provident, rerum excepturi dicta eaque minus illum consequuntur tempore molestias aliquid voluptatibus, commodi enim sunt suscipit nihil delectus totam quisquam sint sequi! Illo.</p>
          <p>Dolor quae modi, nesciunt deserunt beatae ab ducimus eligendi incidunt excepturi. Modi reiciendis nesciunt a molestiae eum, fugiat nemo! Molestiae ea tenetur placeat. Molestiae eum minima, dolorem incidunt odio quod?</p>
          <p>Odit facilis alias placeat tempora possimus minima maxime laudantium aut officiis illo, quaerat cumque repellendus voluptate suscipit assumenda quo, quod eius vero at repellat! Ratione rerum expedita voluptatibus temporibus consequatur.</p>
        </section>

        <section id="contactUs">
          <h2>Contact Us.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam quibusdam enim, voluptatem molestias hic natus, aliquid, non beatae ullam unde aperiam architecto deserunt? Labore ut quisquam numquam temporibus quos?</p>
          <p>Aliquid velit sint sit, quidem provident enim rerum reiciendis corrupti praesentium saepe ipsum eaque quis quibusdam corporis unde maxime molestiae atque beatae fugiat minus expedita voluptas in. Nam, nostrum est.</p>
        </section>

    </main>
    <aside>
      <div class="login-form" id="login-form">
        <form>
          <label for="username">
            Username/email:
            <input type="text" id="username" name="username">
          </label>
          <label for="password">
            Password:
            <input type="password" id="password" name="password">
          </label>
          <input type="submit" value="Submit"><!-- Close button for the login form -->
          <span>Dont have an account <a href="#" onclick="displayRegForm()">signUp</a></span>
        </form> 
      </div>

      <div class="signUp-form" id="signUp-form">
          <form>
            <label for="username">
              Username:
              <input type="text" id="username" name="username">
            </label>
            <label for="username">
              Email:
              <input type="text" id="email" name="email">
            </label>
            <label for="username">
              Phone Number:
              <input type="number" id="phoneNumber" name="phoneNumber">
            </label>
            <label for="username">
              Password:
              <input type="password" id="password" name="password">
            </label>
            <label for="password">
              Confirm password:
              <input type="password" id="password" name="password">
            </label>
            <input type="submit" value="Submit"><!-- Close button for the login form -->
            <span>Have an account <a href="#" onclick="displayLoginForm()">Login</a></span>
          </form> 
      </div>
    </aside>
    <footer>
    </footer>

    <script src='./js/index.js'></script>

</body>
</html>
?>