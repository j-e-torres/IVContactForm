<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

        <title>IV Contact Form</title>
    </head>
    <body>

        <section class="section-form">
            <div class="contact">

                <header class="contact__header">
                    <h1 class="contact__title">Contact Form Demo Project</h1>

                    <div class="contact__images">

                    </div>

                </header>

                <div class="contact__form">
                    <form class='form'>
                        <div class="form__group">
                            <label for="name" class="form__label">Name</label>

                            <input
                                type="text"
                                placeholder="Enter your name"
                                required
                                id="name"
                                class="form__input"
                            />
                        </div>

                        <div class="form__group">
                            <label for="email" class="form__label">Email</label>

                            <input
                                type="text"
                                placeholder="Enter your email"
                                required
                                id="email"
                                class="form__input"
                            />
                        </div>

                        <div class="form__group">
                            <label for="phone" class="form__label">Phone</label>

                            <input
                                type="text"
                                placeholder="Enter your phone number"
                                required
                                id="phone"
                                class="form__input"
                            />
                        </div>

                        <div class="form__group">
                            <label for="name" class="form__label">Subject of Inquiry</label>

                            <input
                                type="text"
                                placeholder="Enter your name"
                                required
                                id="name"
                                class="form__input"
                            />
                        </div>

                        <div class="form__group--textArea">
                            <label for="name" class="form__label">Your message</label>

                            <textarea name="message"></textarea>

                        </div>
                    </form>

                </div>

                <div class="contact__footer">
                    <div class="contact__footerText">
                        <p class="contact__footerText--1">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>

                        <br />

                        <p class="contact__footerText--2">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    </div>

                    <div class="contact__footerImg">
                        <img src="{{ asset('assets/img/thankyou.png') }}" />
                    </div>


                </div>

            </div>
        </section>

    </body>
</html>
