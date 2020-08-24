<?php

	include_once("model/config.php");
	$dataUser = dataUser();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nubank</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/images/nu-icon.png">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="splash">
				<div class="app-splash-inicial">
					<div class="brand-nu-splash">
						<svg width="86" height="68" class="iconNuSplash splash-passo-1" viewBox="0 0 66 48" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
							<path d="M63.9 33.9c0 2-2.5 4.4-4.5 4.4h-1.8V10.2c0-.3.3-.6.6-.6h5.1c.3 0 .6.3.6.6v23.7zm-8.4 8.7c0 1.2-.6 3.3-4.9 3.3-8.2 0-13.3-6.2-13.3-10.7v-25c0-.3.2-.6.5-.6H43c.3 0 .5.3.5.6v23.2a7 7 0 007 7h5v2.2zm8.2-35h-5.9c-1.3 0-2.3 1-2.3 2.2v28.5h-5c-2.6 0-4.8-2.2-4.8-4.9V9.8c0-1.2-1-2.2-2.3-2.2h-6c-1.2 0-2.2 1-2.2 2.2v25.4c0 8 9 12.8 15.4 12.8 4.3 0 7-2 7-5.5v-2.1h1.8c3.2 0 6.6-3.3 6.6-6.5v-24c0-1.3-1-2.3-2.3-2.3zm-35 30.2c0 .3-.2.6-.5.6H23a.6.6 0 01-.5-.6V14.6a7 7 0 00-7-7h-5V5.4c0-1.2.6-3.3 4.9-3.3 8.2 0 13.3 6.2 13.3 10.7v25zm-26 .6a.6.6 0 01-.6-.6V14.1c0-2 2.5-4.4 4.5-4.4h1.8v28.1c0 .3-.3.6-.6.6H2.7zm28.1-25.6c0-8-9-12.8-15.4-12.8-4.3 0-7 2-7 5.5v2.1H6.6C3.4 7.6 0 10.9 0 14.1v24c0 1.3 1 2.3 2.3 2.3h6c1.2 0 2.2-1 2.2-2.2V9.7h5c2.6 0 4.8 2.2 4.8 4.9v23.6c0 1.2 1 2.2 2.3 2.2h6c1.2 0 2.2-1 2.2-2.2V12.8z" class="Path-xrtkpd-0 exOVlP"></path>
						</svg>
						<user-name class="nameSplash none"><?= $dataUser->user_name; ?></user-name>
					</div>
				</div>
			</div>
			<div class="col-md-12 app-content none">
				<div class="brand-nu">
					<svg width="66" height="48" viewBox="0 0 66 48" class="splashHead" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
						<path d="M63.9 33.9c0 2-2.5 4.4-4.5 4.4h-1.8V10.2c0-.3.3-.6.6-.6h5.1c.3 0 .6.3.6.6v23.7zm-8.4 8.7c0 1.2-.6 3.3-4.9 3.3-8.2 0-13.3-6.2-13.3-10.7v-25c0-.3.2-.6.5-.6H43c.3 0 .5.3.5.6v23.2a7 7 0 007 7h5v2.2zm8.2-35h-5.9c-1.3 0-2.3 1-2.3 2.2v28.5h-5c-2.6 0-4.8-2.2-4.8-4.9V9.8c0-1.2-1-2.2-2.3-2.2h-6c-1.2 0-2.2 1-2.2 2.2v25.4c0 8 9 12.8 15.4 12.8 4.3 0 7-2 7-5.5v-2.1h1.8c3.2 0 6.6-3.3 6.6-6.5v-24c0-1.3-1-2.3-2.3-2.3zm-35 30.2c0 .3-.2.6-.5.6H23a.6.6 0 01-.5-.6V14.6a7 7 0 00-7-7h-5V5.4c0-1.2.6-3.3 4.9-3.3 8.2 0 13.3 6.2 13.3 10.7v25zm-26 .6a.6.6 0 01-.6-.6V14.1c0-2 2.5-4.4 4.5-4.4h1.8v28.1c0 .3-.3.6-.6.6H2.7zm28.1-25.6c0-8-9-12.8-15.4-12.8-4.3 0-7 2-7 5.5v2.1H6.6C3.4 7.6 0 10.9 0 14.1v24c0 1.3 1 2.3 2.3 2.3h6c1.2 0 2.2-1 2.2-2.2V9.7h5c2.6 0 4.8 2.2 4.8 4.9v23.6c0 1.2 1 2.2 2.3 2.2h6c1.2 0 2.2-1 2.2-2.2V12.8z" class="Path-xrtkpd-0 exOVlP"></path>
					</svg>
					<user-name class="splashHead"><?= $dataUser->user_name; ?></user-name>
				</div>
				<div class="chevron-dow">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down splashHead" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
					</svg>
				</div>

				<div class="card-detalhes-cartao splashBody">
					<div class="header-detalhes-cartao">
						<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="#565656" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
							<path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
						</svg>
						<type-card><?= $dataUser->type_card; ?></type-card>
					</div>
					<div class="body-detalhes-cartao">
						<status-fatura><?= $dataUser->status_fatura; ?></status-fatura><br>
						<valor-fatura><?= $dataUser->valor_fatura; ?></valor-fatura><br>
						<vencimento-fatura><?= $dataUser->vencimento_fatura; ?></vencimento-fatura>
						<div class="buttons-opcoes-fatura">
							<button class="btn-nu btn-nu-pagar">PAGAR</button>
							<button class="btn-nu btn-nu-parcelar">PARCELAR</button>
							<button class="btn-nu btn-nu-more">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots" fill="#FFFFF" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
								</svg>
							</button>
						</div>
					</div>
					<div class="footer-detalhes-cartao">
						<div class="grid-item icon-categoria-compra">
							<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-tools" fill="#898989" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
								<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
							</svg>
						</div>
						<div class="grid-item">
							<detalhes-ultima-venda><?= $dataUser->detalhes_ultima_venda; ?></detalhes-ultima-venda>
						</div>
						<div class="grid-item icon-more-compras">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="#898989" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="app-atalhos-configuracoes splashFooter">
					<div class="owl-carousel owl-theme app-atalhos">
						<?php

							for ($i = 0; $i <= 11; $i++) {
								$name_icon = "icon_atalho_".$i;
								$name_atalho = "atalho_".$i;

						?>
						<div class="item">
							<div class="card-atalho">
								<icon-atalho><?= $dataUser->$name_icon; ?></icon-atalho>
								<description-atalho><?= $dataUser->$name_atalho; ?></description-atalho>
							</div>
						</div>
						<?php }# Fecha o FOR ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>