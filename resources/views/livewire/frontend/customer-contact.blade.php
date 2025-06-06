<div>
    <style type="text/css">
        #contactus textarea {
            border-radius: 0 !important;
        }

        #contactus input {
            border-radius: 0 !important;
            height: 49px;
        }

        .rosegold-btn:disabled {
            cursor: not-allowed;
            background-color: #b8896870;
        }
    </style>

    <section>
        <div class="container-fluid pb-5 bg-opacity-container" style="background-color: #000000">
            <div class="title-top-margin position-relative text-center" style="z-index: 500;">
                <h2 class="h2 GothamLight text-gold">CONTACT US</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid" align="center" style="background-color: #000000">
            <div class="col-lg-7 float-none mx-auto px-4 text-white" align="center">
                <p class="p-small mb-3">Phone: +41 79 332 74 41</p>
                <p class="p-small mb-3 text-white">
                    Email: <a class="text-white text-decoration-none"
                        href="mailto:info@swisscaviarlieri.com">info@swisscaviarlieri.com</a></p>
                <form wire:submit.prevent="sendMail" method="post" name="myemailform" style="padding: 50px 0;">
                    <div class="row" id="contactus">
                        <div class="col-lg-6 col-md-6 px-md-4">
                            <input wire:model="first_name" type="text" name="name" class="form-control mb-4" placeholder="Name" required />
                            <input wire:model="last_name" type="text" name="surname" class="form-control mb-4" placeholder="Surname" required />
                            <input wire:model="email" type="text" name="email" class="form-control mb-4" placeholder="Email" required />
                            <input wire:model="phone" type="text" name="phone" class="form-control mb-4" placeholder="Phone" required />
                        </div>
                        <div class="col-lg-6 col-md-6 px-md-4 pb-4">
                            <textarea wire:model="userMessage" name="message" class="form-control" placeholder="Message" style="height: 100%;" required></textarea>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-lg-4 float-none mx-auto py-3">
                            <button type="submit" class="rosegold-btn w-100" name="submit" {{$disableBtn}}>
                                <span class="btn-content-wrapper"><span
                                        class="btn-content-text navbar-gold-btn">Send</span></span></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script>
        var oldScrollY = window.scrollY;
        window.onscroll = function(e) {
            if (oldScrollY < window.scrollY) {
                $(".animate-img").addClass("animate-up");
                $(".animate-img").removeClass("animate-down");
            } else {
                $(".animate-img").removeClass("animate-up");
                $(".animate-img").addClass("animate-down");
            }
            oldScrollY = window.scrollY;
        }
    </script>
</div>

