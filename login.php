

	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Авторизация</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Главная</a></li>
							<li class="breadcrumb-item active" aria-current="page">Авторизация</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ end banner area ================= -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Впервые у нас?</h4>
							<p>Мы ждали именно вас</p>
							<a class="button button-account" href="register">Зарегистрироваться</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Введите для входа</h3>
						<form class="row login_form" onsubmit="addUser(this); return false;">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="pass" placeholder="Пароль"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Пароль'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Согласие на обработку персональных данных</label>
								</div>
							</div>
							<p id="info" style="color: red"></p>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-login w-100">Войти</button>
								<a href="#">Забыли пороль?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
    <script>
      async function authUser(form) {
        let formData = new FormData(form);

        let response = await fetch("authUser", {
          method: "POST",
          body: FormData,
        });

        let res = await response.json();

        if (res.result == "success") {
          location.href = "users"
          } else if (res.result == "exist") {
          info.innerText = ("Такого пользователя не существует");
        }
      }
    </script>


