<?php
require_once(dirname(__FILE__).'../../../onpay.php');//Подключение файла модуля
class onpayredirectModuleFrontController extends ModuleFrontController
{
	public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		parent::initContent();

		

		$id_cart = Tools::GetValue('id_cart');// получаем get id_cart
		$cart = New Cart((int)$id_cart);// Объект корзины
		$onpay = new onpay();//Объект onpay
		$total = $cart->getOrderTotal(true, 3);//Цена заказа расчёт
		$onpay->validateOrder(intval($cart->id), _PS_OS_BANKWIRE_, $total, $onpay->displayName);//Создание заказа с статусом ожидаем оплату
		$currency = new Currency((int)($cart->id_currency));//получение данные о валюте

		$this->context->smarty->assign(array(
			'login' => Configuration::get('ONPAY_LOGIN'),//отдаём логин
			'f' => Configuration::get('ONPAY_FORM'),////отдаём номер формы
			'id' => (int)$id_cart,//отдаём id корзины
			'price' => number_format($cart->getOrderTotal(true, Cart::BOTH), 1, '.', ''),//отдаём цену
			'currency' => $currency->iso_code == 'RUB' ? 'RUR' : $currency->iso_code,//отдаём валюту
			'md5' => md5('fix;'.number_format($cart->getOrderTotal(true, Cart::BOTH), 1, '.', '').';'.($currency->iso_code == 'RUB' ? 'RUR' : $currency->iso_code).';'.(int)$id_cart.';yes;'.Configuration::get('ONPAY_API_IN_KEY')),//отдаём md5
			'url_success' => 'https://fordfocusshop.ru/content/19-oplata-poluchena',//отдаём ссылку куда идти после удачной оплаты
			'this_path' => $this->_path//отдаём адрес папки ис модулем
		));

		$this->setTemplate('redirect.tpl');// Подключение шаблона смарти
	}
}