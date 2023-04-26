<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><div class="page-content">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"section_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "add",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "ntop",
		"USE_EXT" => "N"
	)
);?>
 <br>

<br>
               <div class="rates-and-atms-section-wrapper" id="rates">

				<div class="container">

						<div class="col-lg-12">
							<div class="atms-column creds-back1">
								<div class="credss-column-inner-pad">
									<div class="atms-header">
										<p class="news-slider-header font-24-bold">
										Тарифы на обслуживание </p>
									</div>
 <a class="button-highlight font-14-lh29 b24-web-form-popup-btn-38" href="https://www.united.ru/docs/for_private/collapse/#4292">Перейти в раздел</a>
								</div>
							</div>



					</div>

</div>
	<div class="container">

		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"credits-slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "credits-slider",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "35",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "offers_individuals",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"CRM_FORM_ID",1=>"CRM_FORM_CODE",2=>"GB_TITLE",3=>"GB_DETAIL",4=>"GB_ADVANTAGE1",5=>"GB_ADVANTAGE2",6=>"GB_BUTTON_TEXT1",7=>"GB_BUTTON_TEXT2",8=>"SECTION",9=>"GB_IMAGE",10=>"GB_BANNER",11=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br>
 <br>
		<div class="container">
			<p>
			</p>
			 <script data-b24-form="inline/118/x4a8os" data-skip-moving="true">
			(function(w, d, u) {
				var s = d.createElement('script');
				s.async = true;
				s.src = u + '?' + (Date.now() / 180000 | 0);
				var h = d.getElementsByTagName('script')[0];
				h.parentNode.insertBefore(s, h);
			})(window, document, 'https://bitrix.united.ru/upload/crm/form/loader_118_x4a8os.js');
		</script> <br>
			 <?
		$iblockId = 39;
		$sectionCode = basename(dirname($_SERVER['SCRIPT_FILENAME']));
		if (CModule::IncludeModule("iblock")) {
			$resSection = CIBlockSection::GetList([], ['IBLOCK_ID' => $iblockId, 'SECTION_CODE' => $sectionCode]);
			if ($section = $resSection->GetNext()) {
				echo $section['~DESCRIPTION'];
			}
		}
		?> <br>
			<div class="steps_number_root--7d89c nr-wrapper">
				<h2 class="steps_number_root__title--7d89c">Как получить кредит</h2>
				<div class="steps_number_root__list--7d89c">
					<div class="steps_number_root__step--7d89c">
						<div class="steps_number_root__content--7d89c">
							<div class="steps_number_root__icon--7d89c">
								 1
							</div>
							<div class="steps_number_root__name--7d89c">
								 Оформите заявку на кредит
							</div>
							<div class="steps_number_root__desc--7d89c">
								 В офисе, на сайте или моб. приложении. <a class="" >Hа сайте</a> до 7&nbsp;минут только по паспорту
							</div>
						</div>
					</div>
					<div class="steps_number_root__step--7d89c">
						<div class="steps_number_root__content--7d89c">
							<div class="steps_number_root__icon--7d89c">
								 2
							</div>
							<div class="steps_number_root__name--7d89c">
								 Дождитесь решения
							</div>
							<div class="steps_number_root__desc--7d89c">
								 Мы пришлем СМС с решением по вашей заявке за 5 минут
							</div>
						</div>
					</div>
					<div class="steps_number_root__step--7d89c">
						<div class="steps_number_root__content--7d89c">
							<div class="steps_number_root__icon--7d89c">
								 3
							</div>
							<div class="steps_number_root__name--7d89c">
								 Получите деньги
							</div>
							<div class="steps_number_root__desc--7d89c">
								 В нашем офисе или в мобильном приложении
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item font-14 w-75">
				<h2>Кредиты для физических лиц</h2>
 <img width="1110" alt="1 (1).png" src="/upload/medialibrary/a51/pqp0ret6otiiogfycx532wr7dr8cbs5s/1%20(1).png" height="436" title="1 (1).png"><br>
			</div>
			<div class="nr-faq nr-wrapper">
				<div class="nr-faq__wrapper">
					<div class="nr-faq__head--wrapper">
						<div class="nr-faq__head _full-page">
							<div class="nr-faq__head--icon">
							</div>
							<h2 class="nr-faq__head--title">Часто задаваемые <br>
							 вопросы</h2>
						</div>
					</div>
					<div class="nr-faq__expands--wrapper">
						<div class="accordion-item font-14 w-75">
 <br>
							<h2>Кредиты для физических лиц</h2>
 <br>
 <br>
							<div class="accordion" id="accordion1">
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
									Условия и требования </button> </h3>
									<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<ul>
												<li>Требования к заемщику</li>
												<li>Постоянная прописка по адресу - не менее 6 месяцев.</li>
												<li>Постоянное место работы не менее 12 месяцев.</li>
												<li>Возраст заемщика (на дачу выдачи кредита): от 21 до 65 лет.</li>
												<li>Необходимые документы</li>
												<li>Паспорт (копия).</li>
												<li>Страховое пенсионное свидетельство (СНИЛС, копия).</li>
												<li>Военный билет (для мужчин до 27 лет).</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
									Тарифы и документы банка </button> </h3>
									<div id="collapse2" class="collapse font-14" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<ul>
												<li><b>валюта </b>кредита&nbsp;рубли РФ</li>
												<li><b>лимит </b>определяется скорринг оценкой</li>
												<li><b>процентная ставка </b>по кредиту 23,49% годовых</li>
												<li><b>минимальный лимит </b>1 000 рублей</li>
												<li><b>максимальный лимит:</b>&nbsp;100 000&nbsp;рублей</li>
												<li><b>гашение</b>&nbsp;В конце срока единовременным платежом (основной долг, проценты)</li>
												<li><b>срок</b>&nbsp; 31 день</li>
												<li><b>срок рассмотрения заявки</b>&nbsp;Не более 3 часов</li>
											</ul>
											<p class="subtitle">
 <a href="https://www.united.ru/docs/for_private/#collapse4318"><b>Документы:</b></a>
											</p>
											<p>
											</p>
											<ul>
												<li><a href="/credits/Форма%20кредитного%20договора%20До%20зарплаты.pdf">Форма кредитного договора Кредит до зарплаты</a></li>
												<li>
												<p>
													 Информация о полной стоимости кредита
												</p>
 </li>
												<li>
												<p>
													 Заявление на смену даты платежа (Microsoft Word)
												</p>
 </li>
												<li>
												<p>
													 Заявление на досрочное погашение кредита (Microsoft Word)
												</p>
 </li>
												<li>
												<p>
													 Информация о кредитных каникулах
												</p>
 </li>
												<li>
												<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Каникулы для мобилизованных граждан</a><br>
												</p>
 </li>
											</ul>
											<p>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								<div class="card">
									<h3 class="mb-0"> <button class="btn btn-block text-left font-14 collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Порядок работы с просроченными кредитами </button> </h3>
									<div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
										<div>
											<p>
												 В случае образования просроченной задолженности по Вашему кредитному договору, заключенному АО АИКБ «Енисейский объединенный банк» (далее – Банк), Ваш договор передается в работу Подразделения по работе с проблемной задолженностью физических лиц Отделения, осуществившего выдачу кредита.
											</p>
											<p>
												 Если Вы не можете обслуживать кредит на первоначальных условиях, обратитесь в кредитный отдел по номеру телефона (391) 277-96-17 (доб.166) для подбора индивидуальной программы реструктуризации.&nbsp;&nbsp;
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Информация о задолженности</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318" class="creditReqLink">Заявление на реструктуризацию</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Памятка заемщика по реструктуризации</a>
											</p>
											<p>
 <a href="https://www.united.ru/docs/for_private/#collapse4318">Инструкция по досрочному погашению кредита</a>
											</p>
										</div>
									</div>
								</div>
								 <script id="bx24_form_button" data-skip-moving="true">
                    (function (w, d, u, b) {
                        w['Bitrix24FormObject'] = b;
                        w[b] = w[b] || function () {
                            arguments[0].ref = u;
                            (w[b].forms = w[b].forms || []).push(arguments[0])
                        };
                        if (w[b]['forms']) return;
                        var s = d.createElement('script');
                        s.async = 1;
                        s.src = u + '?' + (1 * new Date());
                        var h = d.getElementsByTagName('script')[0];
                        h.parentNode.insertBefore(s, h);
                    })(window, document, 'https://bitrix.united.ru/bitrix/js/crm/form_loader.js', 'b24form');

                    b24form({"id": "37", "lang": "ru", "sec": "kfmkwm", "type": "button", "click": ""});
                </script> <button class="btn font-14 button-padding b24-web-form-popup-btn-37">
								Оформить заявку на кредит </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 <br>
	</div>
 <br>
</div>
 <br>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>