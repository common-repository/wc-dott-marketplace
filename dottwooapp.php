<?php   

   /* 

    Plugin Name: Connector Dott Marketplace for WooCommerce 

    Plugin URI: https://teracondition.pt/dott-woocommerce.php

    Description: Plugin que permite a integração entre lojas online Woocommerce e o Dott Marketplace

    Author: WizTec & TERACONDITION 

    Version: 1.4 

    Author URI: https://teracondition.pt

    */   

class TeraWCDott{  

      private $tera_wc_dott_screen_name;  

      private static $instance;  

       /*......*/  

      static function GetInstance()  

      {  

          if (!isset(self::$instance))  

          {  

              self::$instance = new self();  

          }  

          return self::$instance;  

      }  

      public function PluginMenu()  

      {  

       $this->tera_wc_dott_screen_name = add_menu_page(  

                                        'Conector Dott',   

                                        'Conector Dott',   

                                        'manage_options',  

                                        __FILE__,   

                                        array($this, 'RenderPage'),   

                                        plugins_url('/img/icon.png',__DIR__)  

                                        );  

      }  

      public function RenderPage(){  

       ?>  

       <div class='wrap'>  

        <h2>Integração Dott Marketplace</h2>  

        <div class="main-content">  

        <!-- You only need this form and the form-basic.css -->  

        <div class="panel">

	<div class="row moduleconfig-header">

		<p class="text-center">

		  <!-- <img src="img/logo.jpg" /> -->					

<strong><div class="content"><?php the_content(); ?><a class="less-button" href="https://teracondition.pt/dott-woocommerce.php" target="_blank">Sobre o Plugin</a></div></strong><br>

<strong><div class="content"><?php the_content(); ?><a class="less-button" href="https://wiztec.pt/plugins/dott/dott_woocommerce" target="_blank">Backoffice da Integração</a></div></strong>

	<form action="https://teracondition.pt/assets/dott_woocommerce/dottregister.php" method="post" target="_blank">

	<div class="panel">

	<div class="row moduleconfig-header">

	  <h4><strong><a href="#register" data-toggle="collapse">Configurar plugin, caso seja a primeira vez que configura este módulo. Apenas necessita de ter este procedimento uma única vez</a></strong></h4><br>

	  <div id="register" class="collapse">

	  <h3><strong>Dados da sua Loja</strong></h3>

		Para faturação e identificação da sua Loja Online

	<ul class="ul-spaced">

	  <strong><label for="seller_url">URL da Loja:</label></strong>   

	  <p>

	  <input name="seller_url" type="text" required="required" placeholder="https://" size="100" />        

	  <p>

		  <strong><label for="seller_vat_number">Contribuinte:</label></strong>

	  <p>

	    <input name="seller_vat_number" type="text" required="required" size="100" />

      <p>

        <strong><label for="seller_email">Email:</label></strong>

      <p>

        <input name="seller_email" type="text" required="required" size="100" />

        <br>

      </ul>

	  <p>

	  <!-- <h3><strong>Configurar acesso Dott.pt</strong></h3>

	  Estes dados são-lhe cedidos pelo Dott Marketplace, quando se torna parceiro ou vendedor

		  <strong>Se não tiver os dados abaixo, deve solicita-os ao seu Gestor Dott</strong>

      <ul class="ul-spaced"><p>

		<strong><label for="dott_merchant_id">O seu Vendor ID da Dott:</label></strong>

        <p>

		<input name="dott_merchant_id" type="text" required="required" size="100" />

        <p>

		<strong><label for="dott_merchant_token">Token:</label></strong>

        <p>

		<input name="dott_merchant_token" type="text" required="required" size="100" />

			<br> -->

      </ul>

	  </p>

			  <h3><strong>Configurar acesso à sua Loja WooCommerce (Webservice)</strong></h3>

			  Na sua Loja, aceda a WooCommerce // Configurações // Avançado // API Rest // Adicionar Chave // Gerar Chave API. No caso de necessitar de ajuda contacte o nosso suporte.

		<ul class="ul-spaced">

			<strong><p><label for="seller_consumer_key">Consumer key (WooCommerce):</label>

		  </p></strong>

			<p>

			  <input name="seller_consumer_key" type="text" required="required" size="100" />

			  <br>

		  </p>

		<strong><p><label for="seller_consumer_secret">Consumer secret (WooCommerce):</label>

		  </p></strong>

			<p>

			  <input name="seller_consumer_secret" type="text" required="required" size="100" />

			  <br>

		  </p>

		</ul>

		<br />

		<h3><strong>Escolha o seu Plano</strong></h3>

		Utilize apenas o que necessita e de acordo com a dimensão do seu negócio. Os valores apresentados incluem IVA à taxa atual<br><br>

	  <table width="400" border="1">

  <tbody>

    <tr>

      <th scope="col"><p>Modalidade</p>

        <p></p></th>

      <th scope="col"><p>Mensal</p>

        <p></p></th>

      <th scope="col"><p>Anual</p>

        <p></p></th>

    </tr>

    <tr>

      <th scope="row">Até 1 000 produtos</th>

      <td><input name="max_products" type="radio" required="required" id="radio1" value="1000">

		<label for="radio1">6.90 €</label></td>

      <td><input name="max_products" type="radio" required="required" id="radio1" value="1001">

		<label for="radio1">39.90 €</label></td>

    </tr>

    <tr>

      <th scope="row">Até 5 000 produtos</th>

      <td><input name="max_products" type="radio" required="required" id="radio1" value="5000">

		<label for="radio1">9.90 €</label></td>

      <td><input name="max_products" type="radio" required="required" id="radio2" value="5001">

 		<label for="radio2">49.90 €</label></td>

    </tr>

    <tr>

      <th scope="row">Até 20 000 produtos</th>

      <td><input name="max_products" type="radio" required="required" id="radio1" value="20000">

		<label for="radio1">12.90 €</label></td>

      <td><input name="max_products" type="radio" required="required" id="radio3" value="20001">

		<label for="radio3">69.90 €</label></td>

    </tr>

  </tbody>

</table>

		<br>

		<input type="checkbox" required="required">Li e concordo com os <a href="https://teracondition.pt/terms_dott-wc-app.html" target="_blank" title="dott_documentation">Temos e Condições</a>, bem como <a href="https://teracondition.pt/terms_dott-wc-app.html" target="_blank" title="dott_documentation">Política de Privacidade</a>.

		<br><br>

	  <input type="submit" />

		<br><br><br><br>

</form>

</div>

<p class="text-center">

			Copyright &copy;<script>document.write(new Date().getFullYear());</script> Connector Dott for WooCommerce by <a href="https://www.teracondition.pt" target="_blank" title="teracondition.pt">WizTec // Teracondition.</a> Todos os direitos reservados | Made in Portugal</a>

			<br><a href="mailto:info@teracondition.pt?subject=Pedido de Suporte | Prestashop DottApp">Pedir Suporte | </a>

			<a href="https://teracondition.pt/assets/dott/documentation/dott_woocommerce/documentation.pdf" target="_blank" title="dott_documentation">Documentação</a>

			<br>versão 1.4<a href="https://teracondition.pt/assets/dott_woo_releases/release_list.php" target="_blank" title="teracondition.pt"> | Releases</a>

</p>

       <?php  

      }  

      public function InitPlugin()  

      {  

           add_action('admin_menu', array($this, 'PluginMenu'));  

      }  

 }  

$TeraWCDott = TeraWCDott::GetInstance();  

$TeraWCDott->InitPlugin();  