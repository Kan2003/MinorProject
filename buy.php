<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Complete your purchase</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    transition: 0.5s;
}

body{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 0 20%;
}

header{
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    height: 80px;
    border-bottom: 1px solid #f2f2f2;
    background-color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 5%;
}

.logo{
    font-size: 26px;
    font-weight: 800;
}

.menu-container{
    display: flex;
    justify-content: center;
    align-items: center;
    list-style-type: none;
}

.menu-item{
    margin: 2rem;
    cursor: pointer;
    font-weight: 600;
}

.red{
    color: rgb(167, 33, 10);
}

.menu-icons-container{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.icon{
    filter: invert(1);
    height: 25px;
    margin: 1rem;
}

.progress-checkout-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 60%;
}

.progress-step-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.step-check{
    background-color: rgb(0, 132, 255);
    height: 30px;
    width: 30px;
    border-radius: 30px;
    margin-bottom: 1rem;
    position: relative;
    background-image: url(Resources/check.svg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 60%;
}

.progress-step-container:nth-of-type(3) .step-check::after{
    display: none;
}
.progress-step-container:nth-of-type(3) .step-check{
    background-image: none;
    background-color: white;
    border: 2px solid grey;
}

.progress-step-container:nth-of-type(2) .step-check::after{
    background-color: grey;
}

.progress-step-container:nth-of-type(2) .step-check{
    background-image: none;
    background-color: white;
    border: 2px solid rgb(0, 132, 255);
}

.step-check::after{
    content: "";
    width: 15vw;
    height: 2px;
    background-color: inherit;
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateX(100%) translateY(-50%);
}

.step-title{
    color: grey;
}

.form-container{
    width: 60%;
    margin-top: 6rem;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
}

.form-title{
    font-size: 36px;
    margin-bottom: 2.5rem;
    font-weight: 500;
    opacity: 0.8;
}

.checkout-form{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    width: 100%;
}

.input-line{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    margin-bottom: 2rem;
    width: 100%;
}

label{
    font-size: 16px;
    color: grey;
    margin-bottom: 0.5rem;
}

input[type="text"]{
    width: 100%;
    height: 40px;
    padding: 0 10px;
    background-color: #f2f2f2;
    border-radius: 5px;
    border: none;
    font-size: 18px;
}

input[type="text"]::placeholder{
    font-size: 14px;
    color: #b9b9b9;
}

.input-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.input-container .input-line{
    width: 48%;
}

input[type="button"]{
    background-color: rgb(0, 132, 255);
    color: white;
    font-weight: 500;
    font-size: 18px;
    height: 50px;
    padding: 0 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="button"]:hover{
    background-color: rgb(4, 88, 167);
}
    </style>
</head>
<body>

    <header>
        <h1 class="logo">Shopping</h1>
        <ul class="menu-container">
            <li class="menu-item">Home</li>
            <li class="menu-item">Collections</li>
            <li class="menu-item">Products</li>
            <li class="menu-item red">For Sale</li>
        </ul>
        <div class="menu-icons-container">
           <img src="Resources/Search.svg" alt="" class="icon"> 
           <img src="Resources/Profile.svg" alt="" class="icon"> 
           <img src="Resources/Cart.svg" alt="" class="icon"> 
        </div>
    </header>

    <div class="progress-checkout-container">
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Shipping</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Payment</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Review</span>
        </div>
    </div>
    
    <div class="form-container">
        <h2 class="form-title">Payment Details</h2>
        <form action="pay.php" method="post" class="checkout-form">
            <div class="input-line">
                <label for="name">Name on card</label>
                <input type="text" name="name" id="name" placeholder="Your name and surname">
            </div>
            <div class="input-line">
                <label for="name">Card number</label>
                <input type="text" name="name" id="name" placeholder="1111-2222-3333-4444">
            </div>
            <div class="input-container">
                <div class="input-line">
                    <label for="name">Expiring Date</label>
                    <input type="text" name="name" id="name" placeholder="09-21">
                </div>
                <div class="input-line">
                    <label for="name">CVC</label>
                    <input type="text" name="name" id="name" placeholder="***">
                </div>
            </div>
            <input type="button" value="Complete purchase">
        </form>
    </div>

</body>
</html>