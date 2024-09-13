<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
body {
  width: 100%;
  height: 100vh;
}
.container {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}
.contact-box {
  max-width: 860px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(2, 1fr);
  justify-content: center;
  align-items: center;
  text-align: center;

  background-color: #fff;
  box-shadow: 0px 0px 18px 5px rgb(174, 168, 168);
}
.left iframe {
  padding: 10px 10px;
  width: 100%;
  height: 470px;
}
.right {
  padding: 25px 40px;
}
h2 {
  position: relative;
  padding: 0 0 10px;
  margin-bottom: 10px;
}
h2:after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  height: 4px;
  width: 50px;
  border-radius: 2px;
  /* background-color: orange; */
}
.field {
  width: 100%;
  border: 2px solid rgba(0, 0, 0, 0);
  outline: none;
  background-color: rgba(230, 230, 230, 0.6);
  padding: 0.5rem 1rem;
  margin-bottom: 22px;
  transition: 0.3s;
}
.field:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
textarea {
  min-height: 150px;
}
.btn {
  width: 100%;
  padding: 0.5rem 1rem;

  background: orange;
  color: #fff;
  font-size: 1.1rem;
  border: none;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
}
.btn:hover {
  background: #1ead27;
}
.field:focus {
  border: 2px solid rgba(30, 85, 250, 0.7);
  background: #fff;
}
@media screen and (max-width: 769px) {
  .contact-box {
    grid-template-columns: 1fr;
  }
  .left iframe {
    padding: 0;
  }
}
</style>
<div class="container">
    <div class="contact-box">
      <div class="left">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7896.252976445803!2d116.39351205390626!3d-8.290208799999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdd4dbffe3fcd5%3A0xda8231ef1197ce8a!2sSujar%20Rinjani!5e0!3m2!1sid!2sid!4v1724854595750!5m2!1sid!2sid"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
      </div>
      <div class="right">
        <h2>Contact Us</h2>
        <input type="text" class="field" placeholder="Your Name" />
        <input type="text" class="field" placeholder="Email" />
        <input type="text" class="field" placeholder="Phone Number" />
        <textarea placeholder="Message" class="field"></textarea>
        <button class="btn">Send</button>
      </div>
    </div>
  </div>
