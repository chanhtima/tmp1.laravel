<div class="la-form-01-contact">
    <div class="la-form-01-contact-form">
       <div class="la-form-01-contact-form-wh">
           <label>Name *</label>
           <input type="text" placeholder="Insert you name" aria-label="First name">
        </div>
        <div class="la-form-01-contact-form-wh">
            <label>Email *</label>
            <input type="email" placeholder="abcde@mail.come" aria-label="abcde@mail.com">
        </div>
        <div class="la-form-01-contact-form-wh">
            <label>Phone *</label>
            <input type="tei" placeholder="+66 9429991" aria-label="Phone">
        </div>
        <div class="la-form-01-contact-form-wh">
            <label>Subject</label>
            <input type="text"  placeholder="Subject name" aria-label="Subject name">
        </div>
        <div class="la-form-01-contact-form-wh">
            <label>How can we help?</label>
            <textarea  id="exampleFormControlTextarea1" rows="3" placeholder="How can we help?"></textarea>
        </div>
    </div>
    <div class="la-form-01-contact-pdpa">
        <div class="la-form-01-contact-pdpa-check">
            <input type="checkbox" id="exampleCheck1">
            <label  for="exampleCheck1">ข้าพเจ้าได้อ่านข้อมูลและยอมรับเงื่อนไขใน <a href="{{url('/policy')}}" class=" border-bottom border-2">PDPA</a> เรียบร้อบแล้ว</label>
        </div>
        <div class="la-form-01-contact-pdpa-img">
            <img src="{{ Module::asset('frontend:img/papd.png') }}" alt="pdpa"  >
        </div>
    </div>
    <div class="la-form-01-contact-submit">
        <button type="button"  onclick="my_modal_4.showModal()" >
            <img src="{{ Module::asset("frontend:img/icon/iconcontact-1.png") }}" alt="icon">
            Send Message</button>
    </div>
     
</div>