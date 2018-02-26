<?php
/*
* Form 1
**/
 ?>
    <h1 class="title-section">СПИСОК КРЕДИТОРОВ ГРАЖДАНИНА</h1>
		<p>
			ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
		</p>
    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <div class=" ">

            <div class="form-group-one-walp one-section" data-section="1">
							<p>
								Сведения о кредиторах гражданина (по денежным обязательствам и (или) обязанности по уплате обязательных платежей, за исключением возникших в результате осуществления гражданином предпринимательской деятельности)
							</br>
							</br>
							<div class="accordion">
								<a class="link-to-ul" href="#">Иноформация о правилах заполнения (кликните для показа/скрытия)</a>
								<div>
										 (1) - Указывается существо обязательства (например, заем, кредит).
										</br>
										 (2) - Указывается другая сторона обязательства: кредитор, фамилия, имя и отчество (последнее - при наличии) для физического лица или наименование юридического лица.
									 	</br>
										 (3) - Указывается основание возникновения обязательства, а также реквизиты (дата, номер) соответствующего договора или акта.
									 	</br>
										 (4) - Указывается сумма основного обязательства, в том числе подлежащие уплате проценты. Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату составления списка кредиторов и должников гражданина.

										 </br>
										 (5) - Указывается размер просроченной задолженности по сумме основного обязательства (с процентами) по состоянию на дату составления списка кредиторов и должников гражданина (за исключением неустойки (штрафа, пени), процентов за просрочку платежа, убытков в виде упущенной выгоды и иных финансовых санкций, начисленных на сумму основного обязательства). Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату  составления списка кредиторов и должников гражданина.
								</div>

							</div>


							</p>
						<h3>Денежные обязательства:</h3>

            <div class="form-group-one">
	            <div class="form-group">
	                <input name="form_1_entity[]" type="text" class="form-control " placeholder="Содержание обязательства (1)" >
						  </div>
	            <div class="form-group">
	                <input name="form_1_creditor[]" type="text" class="form-control " placeholder="Кредитор (2)" >
							</div>
	            <div class="form-group">
	                <input name="form_1_place_life[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_main_emite[]" type="text" class="form-control " placeholder="Основание возникновения (3)" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_total_all[]" type="number" class="form-control "  placeholder="Сумма обязательства (всего) (4)" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_total_all_indebtedness[]" type="number" class="form-control "  placeholder="Сумма обязательства (в том числе задолженность) (5)" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_penaltie_fines[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" >
	            </div>

            </div>

            <a href="#" class="add-first-form">Добавить обязательство</a>
            </div>


            <div class="form-group-one-walp  two-section" data-section="1">

						<h3>Обязательные платежи:</h3>
            <div class="form-group-one">

	            <div class="form-group">
	                <input name="form_1_row2_name_tax[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" >
						  </div>
	            <div class="form-group">
	                <input name="form_1_row2_arrears[]" type="number" class="form-control " placeholder="Недоимка" >
							</div>
	            <div class="form-group">
	                <input name="form_1_row2_penaltie_fines[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" >
	            </div>

            </div>

            <a href="#" class="add-second-form">Добавить платеж</a>
            </div>

						<!--// end first  -->



						<div class="form-group-one-walp  one-section" data-section="2">

						<h3>
								Сведения о должниках гражданина (по денежным обязательствам и (или) обязанности по уплате обязательных платежей, за исключением возникших в результате осуществления гражданином предпринимательской деятельности)
						</h3>
						<div class="accordion">
							<a class="link-to-ul" href="#">Иноформация о правилах заполнения (кликните для показа/скрытия)</a>
							<div>
								(11) - Указывается существо обязательства (например, заем, кредит).
							</br>
								(12) - Указывается другая сторона обязательства: кредитор, фамилия, имя и отчество (последнее - при наличии) для физического лица или наименование юридического лица.
							</br>
								(13) - Указывается основание возникновения обязательства, а также реквизиты (дата, номер) соответствующего договора или акта.
							</br>
								(14) - Указывается сумма основного обязательства, в том числе подлежащие уплате проценты. Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату составления списка кредиторов и должников гражданина.
							</br>
								(15) - Указывается размер просроченной задолженности по сумме основного обязательства (с процентами) по состоянию на дату составления списка кредиторов и должников гражданина (за исключением неустойки (штрафа, пени), процентов за просрочку платежа, убытков в виде упущенной выгоды и иных финансовых санкций, начисленных на сумму основного обязательства). Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату составления списка кредиторов и должников гражданина.
							</div>

						</div>

						<h3>Денежные обязательства:</h3>
            <div class="form-group-one">
	            <div class="form-group">
	                <input name="form_1_entity_2[]" type="text" class="form-control " placeholder="Содержание обязательства (6)" >
						  </div>
	            <div class="form-group">
	                <input name="form_1_creditor_2[]" type="text" class="form-control " placeholder="Кредитор (7)" >
							</div>
	            <div class="form-group">
	                <input name="form_1_place_life_2[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_main_emite_2[]" type="text" class="form-control " placeholder="Основание возникновения (8)" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_total_all_2[]" type="number" class="form-control "  placeholder="Сумма обязательства (всего) (9)" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_total_all_indebtedness_2[]" type="number" class="form-control "  placeholder="Сумма обязательства (в том числе задолженность) (10)" >
	            </div>
	            <div class="form-group">
	                <input name="form_1_penaltie_fines_2[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" >
	            </div>

            </div>
            <a href="#" class="add-first-form">Добавить обязательство</a>
            </div>





            <input class="btn btn-primary btn-lg btn-block" type="submit" name="reg_submit" value="Регистрация"/>
    </form>
