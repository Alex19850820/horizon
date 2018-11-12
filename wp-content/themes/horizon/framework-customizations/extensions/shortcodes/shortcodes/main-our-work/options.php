<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
//    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
	'h2'     => [
		'type'  => 'text',
		'value' => 'наши работы',
		'label' => __('Заголовок', '{domain}'),
	],
	'slider' => [
		'type' => 'addable-popup',
		'label' => __('Добавить слайды', '{domain}'),
		'template' => '{{- p_work }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'p_work'     => [
				'type'  => 'text',
				'value' => '#landingepage_horizon',
				'label' => __('Заголовок работы', '{domain}'),
			],
			'img_work'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку работы', '{domain}'),
				'images_only' => true,
			],
			'p_banner'     => [
				'type'  => 'text',
				'value' => '#landingepage_horizon',
				'label' => __('Заголовок банера', '{domain}'),
			],
			'img_banner'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку банера', '{domain}'),
				'images_only' => true,
			],
			'p_logo'     => [
				'type'  => 'text',
				'value' => '#Logo_horizon',
				'label' => __('Заголовок логотипа', '{domain}'),
			],
			'img_logo'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку логотипа', '{domain}'),
				'images_only' => true,
			],
		],
	],
	'img_director'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку директора', '{domain}'),
		'images_only' => true,
	],
	'name_director'     => [
		'type'  => 'text',
		'value' => 'Григорий Дегтярёв',
		'label' => __('Имя и фамилия директора', '{domain}'),
	],
	'place_director'     => [
		'type'  => 'text',
		'value' => 'ген. директор “Алекс Моторс”',
		'label' => __('Должность', '{domain}'),
	],
	'description_director'     => [
		'type'  => 'textarea',
		'value' => 'Компании потребовалось полностью изменить фирменный стиль: логотип, сайт и прочие атребуты. Пососветовали партнеры компанию Horizont.  Долго не думал, так как не хотелось оттягивать. Отправил заявку, ответили опперативно. Проконсультировали по всем интеерсующим меня вопросам грамотно, четко, а главное понятно. После оформления заявки, быстро выполнили свою работу. В общем советую, проверенно на личном опыте.',
		'label' => __('Должность', '{domain}'),
	],
	
	/*'title'     => [
		'type'  => 'text',
		'value' => 'наши результаты',
		'label' => __('Заголовок', '{domain}'),
	],
	'img'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку', '{domain}'),
		'images_only' => true,
	],
	'title2'     => [
		'type'  => 'text',
		'value' => 'Наша миссия - Ваша красота',
		'label' => __('Заголовок поста', '{domain}'),
	],*/
//	'house' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить информацию', '{domain}'),
//		'template' => '{{- h2 }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
////			'img'     => [
////				'type'  => 'upload',
////				'value' => '',
////				'label' => __('Добавить картинку здания', '{domain}'),
////				'images_only' => true,
////			],
////			'h2'     => [
////				'type'  => 'text',
////				'value' => '',
////				'label' => __('Заголовок', '{domain}'),
////			],
//			'price'     => [
//				'type'  => 'text',
//				'value' => 'от <span>2</span> млн. руб.',
//				'label' => __('Цена', '{domain}'),
//			],
//			'area'     => [
//				'type'  => 'text',
//				'value' => 'от 184 500 р./м<sup>2</sup>',
//				'label' => __('Цена за кв метр', '{domain}'),
//			],
//			'city'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Город', '{domain}'),
//			],
//			'md'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Микрорайон', '{domain}'),
//			],
//			'info'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Текст ссылки', '{domain}'),
//				'desc'  => __('Подробнее или еще или узнать больше...', '{domain}'),
//				'help'  => __('Введите текст', '{domain}'),
//			],
//			'href'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Ссылка', '{domain}'),
//				'desc'  => __('Введите адрес на который будет ссылаться страница', '{domain}'),
//				'help'  => __('Введите страницу', '{domain}'),
//			],
//		],
//	],
//
];