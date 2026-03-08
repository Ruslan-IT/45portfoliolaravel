<div class="modalMy" id="modal_box" aria-hidden="true">
    <div class="modal-overlay"></div>

    <div class="modal-dialog">
        <div class="modal-content">

            <button type="button" class="modal-close">&times;</button>

            <div class="modal_body">
                <div class="modal_title mb-10">
                    <h2>Have a question?</h2>
                </div>

                <div class="modal_content mb-15">
                    <p>
                        Leave your contact details and our manager will contact you shortly.
                    </p>
                </div>

                <div class="modal_add_to_cart mb-15">
                    <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                        @csrf

                        <input type="hidden" name="subject" >
                        <input type="hidden" name="page" id="page">

                        <div class="modal_form_group mb-10">
                            <label>Your Name</label>
                            <input type="text" name="name" required>
                        </div>

                        <div class="modal_form_group mb-10">
                            <label>Phone Number</label>
                            <input type="text" name="phone">
                        </div>

                        <div class="modal_form_group mb-15">
                            <label>Email Address</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="modal_form_group mb-15">
                            <label>Your Message</label>
                            <textarea name="message" rows="3"></textarea>
                        </div>


                        <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none">


                        <button type="submit">Request a Call</button>
                    </form>
                </div>

                <div class="modal_description mt-15">
                    <p>
                        By submitting this form, you agree to be contacted by our team.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modalMy" id="success_modal">
    <div class="modal-overlay"></div>

    <div class="modal-dialog">
        <div class="modal-content">

            <button type="button" class="modal-close">&times;</button>

            <div class="modal_body text-center">
                <h2>Message sent</h2>
                <p>Thank you! We will contact you soon.</p>
            </div>

        </div>
    </div>
</div>
