@extends('layout')
@section('title','Contact')
@section('content')
    <main class="container">
        <script src="./js/contact.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">New Details</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Blog</span></p>
            </div>
        </section>
        <section class="information">
            <div class="information__data">
                <div class="data__container">
                    <img src="./assets/contact/contact_mail_icon.png" alt="mailIcon">
                    <div class="data__info">
                        <p class="data__title">
                            Email
                        </p>
                        <p class="data__data">
                            info@webmail.com 
                            jobs.webmail@mail.com
                        </p>                         
                    </div>          
                </div>
                <p class="data__number">
                    01
                </p>
            </div>
            <div class="information__data">
                <div class="data__container">
                    <img src="./assets/contact/contact_phone_icon.png" alt="mailIcon">
                    <div class="data__info">
                        <p class="data__title">
                            Phone Number
                        </p>
                        <p class="data__data">
                            + 97656 8675 7864 7 
                            + 876 766 8675 765 6
                        </p>                         
                    </div>          
                </div>
                <p class="data__number">
                    02
                </p>
            </div>
            <div class="information__data">
                <div class="data__container">
                    <img src="./assets/contact/contact_location_icon.png" alt="mailIcon">
                    <div class="data__info">
                        <p class="data__title">
                            Hotel Address
                        </p>
                        <p class="data__data">
                            19/A, Cirikon City hall Tower New York, NYC
                        </p>                         
                    </div>          
                </div>
                <p class="data__number">
                    03
                </p>
            </div>
        </section>
        <section class="map">
            <div class="map__img">
                <img src="./assets/contact/contact_location_img.jpg" alt="location">
            </div>
        </section>
        <section class="contact">
            <form id="contactForm" method="post">
                <div class="contact__container">
                    <input type="text" name="username" id="username" class="contact__username" placeholder="Your full name">
                    <input type="tel" name="usertel" id="usertel" class="contact__usertel" placeholder="Add phone number (9 digits)" pattern="[0-9]{9}">
                    <input type="email" name="useremail" id="useremail" class="contact__useremail" placeholder="Enter email addres">
                    <input type="text" name="usersubject" id="usersubject" class="contact__usersubject" placeholder="Enter subject">
                    <textarea name="usermessage" id="usermessage" cols="30" rows="10" class="contact__usermessage" placeholder="Enter message" ></textarea>                    
                </div>            
                <input type="submit" class="contact__btn" value="SEND" id="formBtn"/>
                <p id="formFields" class="formFields">Must fill all fields</p>
                <p id="formSuccess" class="formSuccess">Comment sent successfully</p>
                <p id="formError" class="formError">Comment sent successfully</p>              
            </form>
        </section>
    </main>
@endsection          