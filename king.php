<!DOCTYPE php>
<html lang="en">
<head>
    
    <title>REGISTER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <section class="flex">
        <h2><img src="4logo.jpg" alt="logo"></h2>
        <nav class="navbar">
            <a href="login.html">Login</a>
            <a href="signup.html" >Registration</a>
            <a href="reset.html">Contact</a>
        </nav>
        <div id="menu-btn" style="@media(max-width)" class="fas fa-bars"></div>
        
    </section>
</header>
    <header class="hed" >
      <h1>SIGN UP</h1>
    </header>

    <main class="mainn">
        <form>
            
        <p><label for="name">Name <em>Have an accout already?<a href="login.html">login</a></em></label></p>
              <input type="text" name="First-name" class="matt" required placeholder="First name"><br>
              <label for="email">Email</label><br>
              <input type="email" class="matt" required placeholder="Email address"><br>
            <label for="Country">Country</label><br>
             <input type="text" name="First-name" class="matt" id=""required  placeholder="Your country"><br>
              <label for="password">password</label><br>
              <input type="password" name="password" id="" class="matt"  required placeholder="Password"><br>
              <label for="password">Confirm password</label><br>
              <input type="co-password" name="First-name" id="" class="matt"  required placeholder="Confirm password"><br>
              <button type="submit">signup</button>
            </form>
    </main>
</body>
</php>