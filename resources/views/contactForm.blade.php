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


                <h1 class="contact__title">Contact Form Demo Project</h1>

                <div class="contact__images">

                    <div class="contact__imageGroup">

                        <div class="contact__imageText">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo et necessitatibus vero eveniet perspiciatis perferendis laboriosam.</p>

                            <br />

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet fugit quae non inventore odio dolor qui.</p>
                        </div>


                        <div class="contact__image">
                            <img
                                srcset="{{ asset('assets/img/godzilla-1x.jpg') }} 1x, {{ asset('assets/img/godzilla-2x.jpeg') }} 2x"
                                alt="Godzilla"
                            />
                        </div>
                    </div>



                    <div class="contact__imageGroup">

                        <div class="contact__imageText">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos deserunt nesciunt laudantium quidem sequi nisi adipisci maiores.</p>
                        </div>

                        <div class="contact__image">
                            <img
                                srcset="{{ asset('assets/img/godzilla-shake-1x.jpg') }} 1x, {{ asset('assets/img/godzilla-shake-2x.jpeg') }} 2x"
                                alt="Godzilla shaking Kong's hand"
                            />
                        </div>
                    </div>

                </div>


                <div class="contact__form">
                    <form name="contactForm" class='form' action="" method="post">

                        <div class="form__row">
                            <div class="form__group">
                                <label for="name" class="form__label">Name<span> *<span></label>

                                <input
                                    type="text"
                                    placeholder="Enter your name"
                                    required
                                    id="name"
                                    class="form__input"
                                />
                            </div>

                            <div class="form__group">
                                <label for="email" class="form__label">Email<span> *<span></label>

                                <input
                                    type="text"
                                    placeholder="Enter your email"
                                    required
                                    id="email"
                                    class="form__input"
                                />
                            </div>
                        </div>

                        <div class="form__row">

                            <div class="form__group">
                                <label for="phone" class="form__label">Phone<span> *<span></label>

                                <input
                                    type="text"
                                    placeholder="Enter your phone number"
                                    required
                                    id="phone"
                                    class="form__input"
                                />
                            </div>

                            <div class="form__group">

                                <!-- <select -->
                                <label for="subject" class="form__label">Subject of Inquiry</label>

                                <input
                                    type="text"
                                    placeholder="— Please select one —"
                                    required
                                    id="subject"
                                    class="form__input"
                                />
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__group--textArea">
                                <label for="message" class="form__label">Your message</label>

                                <textarea id="message" name="message"></textarea>

                            </div>
                        </div>

                        <div class="form__row--submitArea">
                            <div class="form__button">
                                <button class="button">Submit</button>
                            </div>


                            <p class="form__disclaimer">
                                <span>* Required Fields. </span>Please be aware that we cannot ensure that communications sent over the Internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.
                            </p>
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
                        <img src="{{ asset('assets/img/thankyou.png') }}" alt="thank you" />
                    </div>


                </div>

            </div>
        </section>

    </body>
</html>
