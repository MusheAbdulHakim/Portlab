<section class="section footer-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-logo">
            <a href="#"><img src="{{asset('img/logo.png')}}" alt="footer-logo" /></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="footer-icon">
            @foreach (backpack_user()->getSocialAccounts(backpack_user()->social_account) as $account)
            <li>
              <a class="icon icon-inline" target="_blank" href="{{$account->url}}"
                ><i class="{{$account->icon}}"></i
              ></a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="footer-text">
            <li>
              <h6>&copy; Copyright - <span>{{Date('Y')}}</span></h6>
            </li>
            <li>
              <h6>
                All rights reserved by -
                <a
                  target="_blank"
                  href="https://github.com/MusheAbdulHakim/Portlab"
                  >Portlab</a
                >
              </h6>
            </li>
            <li>
              <h6>
                Developed by -
                <a
                  target="_blank"
                  href="https://github.com/MusheAbdulHakim"
                  >Mushe Abdul-Hakim</a
                >
              </h6>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>