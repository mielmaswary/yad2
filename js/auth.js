const production=false;

const backBtns=document.getElementsByClassName('back-btn-icon');
for(let btn of backBtns)
{
    btn.addEventListener('click',()=>{
        history.back()
    })
}

const forgotPasswordBtns=document.getElementsByClassName('forgot-password-btn')
const prodResetPasswordUrl=0;
const devResetPasswordUrl='http://localhost/firstphp/yad2/user/reset-password.php'
for(let btn of forgotPasswordBtns)
{
    btn.addEventListener('click',()=>{
        location.href=production?prodResetPasswordUrl:devResetPasswordUrl
    })
}

const registerBtns=document.getElementsByClassName('register-btn')
const prodRegisterUrl=0;
const devRegisterUrl='http://localhost/firstphp/yad2/user/register.php'
for(let btn of registerBtns)
{
    btn.addEventListener('click',()=>{
        location.href=production?prodRegisterUrl:devRegisterUrl
    })
}

const loginBtns=document.getElementsByClassName('login-btn')
const prodLoginUrl=0;
const devLoginUrl='http://localhost/firstphp/yad2/user/login.php'
for(let btn of loginBtns)
{
    btn.addEventListener('click',()=>{
        location.href=production?prodLoginUrl:devLoginUrl
    })
}