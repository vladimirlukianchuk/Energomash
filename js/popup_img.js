﻿$(document).ready(function () { // Ждём загрузки страницы

	$(".image").click(function () {	// Событие клика на маленькое изображение
		var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>" + //Добавляем в тело документа разметку всплывающего окна
			"<div class='popup_bg'></div>" + // Блок, который будет служить фоном затемненным
			"<img src=" + src + " class='popup_img' />" + // Само увеличенное фото
			"</div>");
		$(".popup").fadeIn(800); // Медленно выводим изображение
		$(".popup_bg").click(function () {	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(800);	// Медленно убираем всплывающее окно
			setTimeout(function () {	// Выставляем таймер
				$(".popup").remove(); // Удаляем разметку высплывающего окна
			}, 800);
		});
	});
	$(".framebtn").click(function () {	// Событие клика на маленькое изображение
		var btn = $(this);	// Получаем изображение, на которое кликнули
		var frameSrc = btn.data('framesrc'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>" + //Добавляем в тело документа разметку всплывающего окна
			"<div class='popup_bg'></div>" + // Блок, который будет служить фоном затемненным
			"<div style='width: 450px; height:600px; margin-top:-325px; margin-left: -300px; position:absolute; top:53%; left: 55%; z-index: 10; border: 1px solid lightgray; -webkit-box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.54); 		-moz-box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.54);			box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.54);'><iframe name='abd' src='" + frameSrc + "' allowfullscreen style='height: 100%; width: 100%;' frameborder='0' scrolling='no'></iframe></div>" + // Само увеличенное фото !!!! 
			"</div>");
		$(".popup").fadeIn(800); // Медленно выводим изображение
		$(".popup").click(function () {	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(800);	// Медленно убираем всплывающее окно
			setTimeout(function () {	// Выставляем таймер
				$(".popup").remove(); // Удаляем разметку высплывающего окна
			}, 800);
		});
	});


});