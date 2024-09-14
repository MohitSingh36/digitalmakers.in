<style>
    .newsletter input {
        background-color: var(--bs-white);
        padding: 1rem 1.5rem;
    }
    .newsletter input:focus {
        background-color: var(--bs-white);
    }
    .newsletter .form-control.is-invalid, .was-validated .form-control:invalid {
        background-position: right calc(.375em + 1rem) center;
    }
    .newsletter.done .before-sub, 
    .newsletter .after-sub {
        display: none;
    }
    .newsletter.done .after-sub {
        display: block;
    }
    .newsletter.done input {
        padding: 0 !important;
        width: 0px !important;
    }
    .newsletter.done button {
        pointer-events: none;
        transition-delay: 200ms;
        width: 100% !important;
    }
</style>
<div class="bg-fourthly overflow-hidden py-5 border-top" style="border-color: var(--color-fourthly)">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-md-between row-gap-4">
            <div class="col-md-6">
                <h2  data-aos="fade-right" class="mb-0 fw-800 text-center text-md-start h3 mb-0 text-thirdly"><?=$newsletter["title"] ?></h2>
            </div>
            <div class="col-md-6">
                <form  data-aos="fade-up" action="<?= base_url("submit-newsletter") ?>" id="newsletter" class="newsletter flex-middle" onsubmit="submitForm(this)">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" oninput="validate(this)" style="flex: 1;" required>
                    <button type="submit" class="btn-theme hover-thirdly h-100" style="padding: 1rem 2.5rem;">
                        <div class="before-sub">Subscribe</div>
                        <div class="after-sub">Thanks for subscribing!</div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    async function submitForm(form) {
        event.preventDefault();
        const invalid = form.querySelector(".is-invalid");
        if(invalid) {
            invalid.focus();
        } else {
            form.querySelector(".before-sub").innerHTML = "Submitting...";
            try {
                const formData = new FormData(form);
                formData.append("sheetName", "Newsletter");
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.text(); // Get the response from the server
                // console.log(result); // Debugging output

                if (response.ok) {
                    form.classList.add("done");
                } else {
                    alert("Error submitting form, Please try after some time");
                    console.error('Failed to submit form: ', response);
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }
    }
</script>