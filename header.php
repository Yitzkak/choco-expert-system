<nav class="navbar bg-primary navbar-expand-lg navbar-light ">
<!-- Links -->
    <a href="#" class="navbar-brand">
        Welcome   <span class="username">user@<?php echo $_SESSION["uname"]; ?></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAitMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end"  id ="navbarNav">
        <div class="navbar-nav ">
            <a href="diagnosis.php" class="nav-link " id="nav-link-1"> Start Diagnosis</a>
            <a href="" class="nav-link"> View Result</a>
            <a href="" class="nav-link"> Edit Profile</a>
            <a href="" class="nav-link"> Logout</a>
        </div>
    </div>
    
</nav>