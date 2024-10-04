<section
  id="contact"
  class="subscribe-section pt-120 wow fadeInUp"
  data-wow-delay=".4s"
>
  <div class="container">
    <div class="subscribe-wrapper img-bg">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-7">
          <div class="section-title mb-15">
            <h2 class="text-white mb-25">Contact Us</h2>
            <p class="text-white pr-5">
              Drop your email id, and our team will be in touch with you
              shortly. We're excited to connect and assist you on your
              journey!
            </p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5">
          <form id="subscribe-form" class="subscribe-form" onsubmit="openModal(event)">
            <input
              type="email"
              name="subs-email"
              id="subs-email"
              placeholder="Your Email"
              required
            />
            <button type="submit" class="main-btn btn-hover">
              <span id="button-text">Submit</span>
              <span id="spinner" class="spinner" style="display: none"></span>
            </button>
          </form>
          <div id="message"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="contactModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <form id="contact-form" class="contact-form" onsubmit="submitForm(event)">
      <div class="form-group">
        <label for="name">Name <span style="color: red;">*</span></label>
        <input type="text" id="name" name="name" required />
      </div>
      <div class="form-group">
        <label for="modal-email">Email <span style="color: red;">*</span></label>
        <input type="email" id="modal-email" name="modal-email" required />
      </div>
        <div class="form-group">
            <label for="mobile-number">Phone Number <span style="color: red;">*</span></label>
            <input type="tel" id="mobile-number" name="mobile-number" required
                   pattern="[0-9]{10}"
                   inputmode="numeric"/>
        </div>
      <div class="form-group">
        <label for="comments">Comments <span style="color: red;">*</span></label>
        <textarea id="comments" name="comments" required></textarea>
      </div>
      <div class="form-actions">
        <button type="submit" class="main-btn btn-hover">
          <span>Submit</span>
          <span class="spinner" style="display: none; margin-left: 10px;"></span>
        </button>
      </div>
    </form>
  </div>
</div>

<style>
  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }
  .modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    position: relative;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  }
  .close {
    color: #aaa;
    position: absolute;
    right: 20px;
    top: 10px;
    font-size: 28px;
    font-weight: bold;
  }
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .form-actions {
    text-align: right;
  }
  .spinner {
    margin-left: 10px;
  }
  /* Responsive adjustments */
  @media (max-width: 600px) {
    .modal-content {
      width: 90%;
      /* margin: 20% auto; */
      margin-top: 40%;
    }
    .close {
      right: 10px;
    }
  }
</style>
