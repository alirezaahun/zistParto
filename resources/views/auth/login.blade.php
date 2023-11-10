<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/util.css') }}">
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						خوش آمدید
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="phone" placeholder="شماره تلفن">
						<span class="focus-input100"></span>
					</div>

					{{-- <div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div> --}}

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							تایید شماره
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
                        <img style="max-height: 50rem;max-width: 19rem" src="{{asset('logo.png')}}" alt="">
					</div>
				</form>
			</div>
		</div>
	</div>
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
