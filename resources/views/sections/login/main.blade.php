@extends('mainView')


@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Sans");

        .form-structor {
        background-color: #222;
        border-radius: 15px;
        height: 550px;
        width: 70%;
        max-width: 350px;
        position: absolute;
        left: 50%;
        top: 65%;
        transform: translate(-50%, -65%);
        overflow: hidden;
        transition: .5s ease;
        }
        .form-structor::after {
        content: "";
        opacity: 0.8;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: left bottom;
        background-size: 500px;
        background-image: url("https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bf884ad570b50659c5fa2dc2cfb20ecf&auto=format&fit=crop&w=1000&q=100");
        }
        .form-structor .signup {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        width: 65%;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .signup.slide-up {
        top: 5%;
        -webkit-transform: translate(-50%, 0%);
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
        opacity: 0;
        visibility: hidden;
        }
        .form-structor .signup.slide-up .form-title {
        font-size: 1em;
        cursor: pointer;
        }
        .form-structor .signup.slide-up .form-title span {
        margin-right: 5px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .signup .form-title {
        color: #fff;
        font-size: 1.7em;
        text-align: center;
        }
        .form-structor .signup .form-title span {
        color: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .signup .form-holder {
        border-radius: 15px;
        background-color: #fff;
        overflow: hidden;
        margin-top: 50px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .signup .form-holder .input {
        border: 0;
        outline: none;
        box-shadow: none;
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 8px 15px;
        border-bottom: 1px solid #eee;
        width: 100%;
        font-size: 12px;
        }
        .form-structor .signup .form-holder .input:last-child {
        border-bottom: 0;
        }
        .form-structor .signup .form-holder .input::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
        }
        .form-structor .signup .submit-btn {
        background-color: rgba(0, 0, 0, 0.4);
        color: rgba(255, 255, 255, 0.7);
        border: 0;
        border-radius: 15px;
        display: block;
        margin: 15px auto;
        padding: 15px 45px;
        width: 100%;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .signup .submit-btn:hover {
        transition: all 0.3s ease;
        background-color: rgba(0, 0, 0, 0.8);
        }
        .form-structor .login {
        position: absolute;
        top: 20%;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login::before {
        content: "";
        position: absolute;
        left: 50%;
        top: -20px;
        -webkit-transform: translate(-50%, 0);
        background-color: #fff;
        width: 200%;
        height: 250px;
        border-radius: 50%;
        z-index: 4;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login .center {
        position: absolute;
        top: calc(50% - 10%);
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        width: 65%;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login .center .form-title {
        color: #000;
        font-size: 1.7em;
        text-align: center;
        }
        .form-structor .login .center .form-title span {
        color: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login .center .form-holder {
        border-radius: 15px;
        background-color: #fff;
        border: 1px solid #eee;
        overflow: hidden;
        margin-top: 50px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login .center .form-holder .input {
        border: 0;
        outline: none;
        box-shadow: none;
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 8px 15px;
        border-bottom: 1px solid #eee;
        width: 100%;
        font-size: 12px;
        }
        .form-structor .login .center .form-holder .input:last-child {
        border-bottom: 0;
        }
        .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.4);
        }
        .form-structor .login .center .submit-btn {
        background-color: #6b92a4;
        color: rgba(255, 255, 255, 0.7);
        border: 0;
        border-radius: 15px;
        display: block;
        margin: 15px auto;
        padding: 15px 45px;
        width: 100%;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login .center .submit-btn:hover {
        transition: all 0.3s ease;
        background-color: rgba(0, 0, 0, 0.8);
        }
        .form-structor .login.slide-up {
        top: 90%;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login.slide-up .center {
        top: 10%;
        -webkit-transform: translate(-50%, 0%);
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login.slide-up .form-title {
        font-size: 1em;
        margin: 0;
        padding: 0;
        cursor: pointer;
        -webkit-transition: all 0.3s ease;
        }
        .form-structor .login.slide-up .form-title span {
        margin-right: 5px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
        }
        .or {
            display: none;
        }
        .oractive {
            display: inline;
        }
        
        @media screen and (max-height: 700px) {
            .form-structor {
                height: 70%;
                min-height: 390px;
                left: 50%;
                top: 70%;
                transform: translate(-50%, -70%);
            }
        }
    </style>
    <div class="form-structor">
        <div class="signup slide-up">
            <h2 class="form-title" id="signup"><span class="or oractive">or</span>Sign up</h2>
            <div class="form-holder">
                <input type="text" class="input reg-input" placeholder="Name" />
                <input type="email" class="input reg-input" placeholder="Email" />
                <input type="password" class="input reg-input" placeholder="Password" />
                <select class="input reg-input" style="color: rgba(0, 0, 0, 0.6)">
                    <option value="no-role" style="color: rgba(0, 0, 0, 1)">Select role</option>
                    <option value="admin" style="color: rgba(0, 0, 0, 1)">Admin</option>
                    <option value="operator" style="color: rgba(0, 0, 0, 1)">Operator</option>
                    <option value="gudang" style="color: rgba(0, 0, 0, 1)">Gudang</option>
                </select>
            </div>
            <button class="submit-signup-btn submit-btn">Sign up</button>
        </div>
        <div class="login">
            <div class="center">
                <h2 class="form-title" id="login"><span class="or">or</span>Log in</h2>
                <div class="form-holder">
                    <input type="email" class="input in-input" placeholder="Email" />
                    <input type="password" class="input in-input" placeholder="Password" />
                </div>
                <button class="submit-signin-btn submit-btn">Log in</button>
            </div>
        </div>
    </div>
    <script>
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');
        const or = document.querySelectorAll('.or')

        function toggleOr() {
            or.forEach(elem => {
                if(elem.classList.contains('oractive')) {
                    elem.classList.remove('oractive')
                } else {
                    elem.classList.add('oractive')
                }
                
            })
        }

        loginBtn.addEventListener('click', (e) => {
            toggleOr()
            
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if(element !== "slide-up") {
                    parent.classList.add('slide-up')
                }else{
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            toggleOr()

            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if(element !== "slide-up") {
                    parent.classList.add('slide-up')
                }else{
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
        
        const submitSignUp = document.querySelector('.submit-signup-btn')
        const submitSignIn = document.querySelector('.submit-signin-btn')

        submitSignUp.addEventListener('click', (e) => {
            const data = document.querySelectorAll('.reg-input')
            const name = data[0].value
            const email = data[1].value
            const password = data[2].value
            const role = data[3].value

            if(role === 'no-role') {
                toast({
                        title: "Account",
                        message: "Role is not yet filled!",
                        type: "warning",
                        duration: 4000
                    })
                return ''
            }
            
            $.ajax({
                url:'http://localhost/PWL_UAS_TESTING/register/'+name+'/'+email+'/'+password+'/'+role,
                type: 'get',
                dataType: 'json',
                async: false,
                success: (obj) => {
                    // const obj = JSON.parse(data)
                    console.log(obj)
                    toast({
                        title: "Account",
                        message: "Account succesfully registered!",
                        type: "success",
                        duration: 4000
                    })
                },
                error: (err)=> {
                    console.log(err)
                    toast({
                        title: "Account",
                        message: "Registration account error!",
                        type: "error",
                        duration: 4000
                    })
                }
            })

            data.forEach(elem => {
                elem.value = ''
            });
            data[3].selectedIndex = 0
        })

        submitSignIn.addEventListener('click', (e) => {
            const data = document.querySelectorAll('.in-input')
            const email = data[0].value
            const password = data[1].value

            $.ajax({
                url:'http://localhost/PWL_UAS_TESTING/login/auth',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {email: email, password: password },
                async: false,
                success: (obj) => {
                    // const obj = JSON.parse(data)
                    if(obj[0] === 'failed') {
                        toast({
                            title: "Login",
                            message: "Failed, account not found nor email doesn't match password",
                            type: "error",
                            duration: 3000
                        })
                        return ''
                    }
                    if(obj[0] === 'success') {
                        toast({
                            title: "Login",
                            message: "Succesfully logged in. Redirecting you now! please wait..",
                            type: "success",
                            duration: 2000
                        })
                        const dest = obj[1]
                        setTimeout(() => {
                            window.location.href = '/PWL_UAS_TESTING/'+dest
                        }, 1500);
                    }
                    
                },
                error: (err)=> {
                    console.log(err)
                }
            })
        })
    </script>
@endsection