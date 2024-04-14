<?= $this->include('layout/header') ?>
<style>
/* Additional styling for animation */
.container {
    animation: fadeIn 0.5s ease-in-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* Center the form */
.row.justify-content-md-center {
    display: flex;
    justify-content: center;
}

/* Style the form */
.col-5 {
    background-color: #f8f9fa; /* Light gray background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    margin-top: 100px; /* Add margin to the top */
}


h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

/* Adjust button width */
.d-grid .btn {
    width: 100%; /* Button takes full width of its container */
}
</style>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                
            <h2>Login</h2>
                
                <?php if(session()->getFlashdata('login_msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('login_msg') ?>
                    </div>
                <?php endif;?>
                
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Signin</button>
                    </div>     
                </form>

                <!-- Create an account link -->
                <div class="mt-3">
                    <p>Don't have an account? <a href="<?php echo base_url('signup'); ?>">Create one</a></p>
                </div>
            </div>
              
        </div>
    </div>
  </body>
</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
