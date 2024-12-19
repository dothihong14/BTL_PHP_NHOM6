<div>
  <div class="modal-account modal" id="modalAccount" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="modal-account__tabs nav nav-tabs d-flex js-account-tabs" id="accountTabs" role="tablist">
              <li class="nav-item w-50"><a class="nav-link" data-toggle="tab" href="#accountLogin" role="tab" aria-controls="accountLogin" aria-selected="false">Đăng Nhập</a></li>
              <li class="nav-item w-50"><a class="nav-link" data-toggle="tab" href="#accountRegist" role="tab" aria-controls="accountRegist" aria-selected="false">Đăng Ký</a></li>
              <li><a class="nav-link p-0 border-0" data-toggle="tab" href="#accountForgot" role="tab" aria-controls="accountForgot" aria-selected="false"></a></li>
            </ul>
            <button class="btn btn-light close pointer" type="button" data-dismiss="modal" aria-label="close"><span class="icon text-dark" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510"><path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm127.5 346.8l-35.7 35.7-91.8-91.8-91.8 91.8-35.7-35.7 91.8-91.8-91.8-91.8 35.7-35.7 91.8 91.8 91.8-91.8 35.7 35.7-91.8 91.8 91.8 91.8z"/></svg></span></button>
          </div>
          <div class="modal-body">
            <div class="tab-content">
              <div class="tab-pane" id="accountLogin" role="tabpanel">
                <form class="modal-account__form "   action="{{ route('login') }}" method="POST" data-toggle="validator">
                  @csrf
                  <div class="form-group">
                      <input class="form-control form-control-sm" type="email" name="user_email" placeholder="Địa chỉ email" required="required"/>
                      <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                      <input class="form-control form-control-sm" type="password" name="user_pass" placeholder="Mật khẩu" data-minlength="6" required="required"/>
                      <div class="help-block">Mật khẩu của bạn phải ít nhất 6 ký tự</div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <button class="btn btn-secondary btn--round mr-2 mb-2" type="submit">Đăng Nhập</button>
                      <p class="mb-2"><a class=" " href="{{route('password.forgot')}}"  >Quên mật khẩu?</a></p>
                  </div>
              </form>
              
                <div class="modal-footer d-block">
                  <p class="fz-small mb-0"><em>Bằng cách truy cập tài khoản, bạn đồng ý với <a href="#">Điều khoản và Điều kiện</a> và <a href="#">Chính sách Bảo mật</a></em></p>
                </div>
              </div>
              <div class="tab-pane active show" id="accountRegist" role="tabpanel">
                <form class="modal-account__form" action="{{ route('register') }}" method="POST" data-toggle="validator">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" name="user_name" placeholder="Họ" value="{{ old('user_name') }}" required="required"/>
                        @error('user_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="help-block">Vui lòng nhập họ của bạn</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" name="user_last_name" placeholder="Tên" value="{{ old('user_last_name') }}" required="required"/>
                        @error('user_last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="help-block">Vui lòng nhập tên của bạn</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="email" name="email" placeholder="Địa chỉ email" value="{{ old('email') }}" required="required"/>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-sm" id="userPass" type="password" name="user_pass" placeholder="Mật khẩu" data-minlength="6" required="required"/>
                        <div class="help-block">Mật khẩu của bạn phải ít nhất 6 ký tự</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="password" name="user_pass_confirmation" placeholder="Xác nhận mật khẩu" data-match="#userPass" required="required"/>
                        <div class="help-block">Vui lòng nhập lại mật khẩu giống như trên</div>
                    </div>
                    <p class="mb-4 d-flex justify-content-center justify-content-sm-start">
                        <button class="btn btn-secondary btn--round" type="submit">Tạo Tài Khoản</button>
                    </p>
                </form>
            </div>
            
              <div class="tab-pane" id="accountForgot" role="tabpanel">
                <form class="modal-account__form" id="formForgot" action="#" method="POST" data-toggle="validator">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="Địa chỉ email" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <p class="text-center">Chúng tôi sẽ gửi email cho bạn hướng dẫn đặt lại mật khẩu.</p>
                  <p class="d-flex justify-content-center">
                    <button class="btn btn-secondary btn--round" type="submit">Lấy lại mật khẩu
                    </button>
                  </p>
                  <p class="d-flex justify-content-center"><a class="js-toggle-account mr-3" href="#" data-account="regist">Tạo tài khoản mới</a><a class="js-toggle-account" href="#" data-account="login">Quay lại Đăng Nhập</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>