<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/login/view/css/login.css">
    <link rel="stylesheet" href="/login/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/login/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="/login/SWAL/sweetalert2.min.css">
    <script src="/login/jquery/jquery-3.7.1.min.js"></script>
    <script src="/login/SWAL/sweetalert2.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <form id="loginApp">
                <h2 id="loginHeader" class="d-flex text-align-center justify-content-center mb-4">Login</h2>

                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" class="form-control">

                <label for="loginPassword">Password</label>
                <div class="input-box">
                    <input class="form-control" 
                        :type="showPassword ? 'text' : 'password'" 
                        name="loginPassword" 
                        id="loginPassword">

                    <!-- Show eye / hide eye based on state -->
                    <i v-if="!showPassword" @click="togglePassword" class="fa-solid fa-eye"></i>
                    <i v-else @click="togglePassword" class="fa-solid fa-eye-slash"></i>
                </div>

                <input type="submit" value="Login" class="btn btn-primary form-control mb-3">
                <a class="d-flex text-align-center justify-content-center mb-3" href="">Forget Password</a>
                <a class="d-flex text-align-center justify-content-center mb-3" href="">Create Account</a>

            </form>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"> </script>
    <script>
        const loginApp = Vue.createApp({
            data(){
                return {
                    showPassword : false
                }
            },
            methods:{
                togglePassword(){
                    this.showPassword = !this.showPassword;
                }

            }
        });
        loginApp.mount('#loginApp');
    </script>
    <script src="/login/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <script src="/login/view/js/login.js"></script>
</body>
</html>