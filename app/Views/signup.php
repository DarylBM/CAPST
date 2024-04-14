<?= $this->include('layout/header') ?>
<title>Hello</title>

<script>
    function validateForm() {
        var name = document.forms["signupForm"]["name"].value;
        var email = document.forms["signupForm"]["email"].value;
        var password = document.forms["signupForm"]["password"].value;
        var confirmPassword = document.forms["signupForm"]["confirmpassword"].value;

        if (name == "" || email == "" || password == "" || confirmPassword == "") {
            alert("All fields must be filled out");
            return false;
        }
    }
</script>
</head>
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
    padding: 40px; /* Increased padding */
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    margin-top: 100px; /* Add margin to the top */
    max-width: 500px; /* Increased maximum width */
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

/* Style the input fields */
.form-control {
    border: 2px solid #ced4da; /* Add an outline */
    border-radius: 5px; /* Rounded corners */
    padding: 15px; /* Adjust padding */
    width: 100%; /* Take full width */
}

/* Hover effect for input fields */
.form-control:hover {
    border-color: #707070; /* Darken the border color on hover */
}

</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SignupController/store" method="post" name="signupForm" onsubmit="return validateForm()">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" pattern="[A-Za-z0-9]+" title="Only alphanumeric characters are allowed" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                </form>
                <div class="back-to-login">
                    Have an account? <a href="/signin">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="<?= base_url('js/script.js') ?>"></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
