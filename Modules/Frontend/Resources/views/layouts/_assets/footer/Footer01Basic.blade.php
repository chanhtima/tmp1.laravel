@include('frontend::layouts._assets.footer.cookies.Cookie01Basic')
<footer class="la-footer-01-basic">
  <div class="container">
    <div class="la-footer-01-basic-footertop">
        <div class="la-footer-01-basic-footertop-logo">
           
                <a href="{{url('/')}}">
                    <img src="{{ Module::asset('frontend:img/onedisser.png') }}" alt="logo"  >
                </a>
        </div>
        <div class="la-footer-01-basic-footertop-widths">
            <h2>ONEDISSER</h2>
            <p>Onedisser Fortune Town Branch 1, Ratchadaphisek Road, Din Daeng, Din Daeng, Bangkok 10400</p>
        
        </div>
        <div class="la-footer-01-basic-footertop-contact ">
            <h2>CONTACT US</h2>
            <div class="la-footer-01-basic-footertop-widths-icon ">
                <a href="{{ url('mailto:Onedisser@gmail.com') }}">
                    <img src="{{ Module::asset('frontend:img/icon/mailb.png') }}" class="  mr-4" >
                </a>
                <a href="{{ url('mailto:Onedisser@gmail.com') }}"  >
                  <p>Onedisser@gmail.com</p> 
                </a>
            </div>
            <div class="la-footer-01-basic-footertop-widths-icon " >
                <a href="{{ url('tel:+668 888 888') }}">
                    <img src="{{ Module::asset('frontend:img/icon/call2.png') }}"  class="  mr-4">
                </a>
                <a href="{{ url('tel:+668 888 888') }}" >
                     <p> +668 888 888 (Auto)</p>
                </a>
            </div>
            <div class="la-footer-01-basic-footertop-widths-icon ">
                <a href="{{ url('') }}"  >
                    <img src="{{ Module::asset('frontend:img/icon/Vector1.png') }}" class="  mr-4" >
                </a>
                <a href="{{ url('') }}"  >
                    <img src="{{ Module::asset('frontend:img/icon/Vector2.png') }}" class=" mr-4">
                </a>
                <a href="{{ url('') }}"  >
                    <img src="{{ Module::asset('frontend:img/icon/Vector3.png') }}" class=" mr-4">
                </a>
                <a href="{{ url('') }}"  >
                    <img src="{{ Module::asset('frontend:img/icon/Vector4.png') }}" class=" mr-4">
                </a>
              
            </div>
        </div>
    </div>
  </div>
</footer>
@include('frontend::layouts._assets.footer.Footer01Copyright')