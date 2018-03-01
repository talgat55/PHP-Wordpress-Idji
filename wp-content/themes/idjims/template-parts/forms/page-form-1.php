<?php
/*
* Form 1
**/
 ?>
 <div class="breadscrumb" >
   <div class="container">
     <h1 class="title-section service center-white ">Список кредитов гражданина</h1>
   </div>
 </div>
<div class="row row-doc-form">
<div class="container">
		<p>
			ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
		</p>
    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <div class="clearfix">

            <div class="form-group-one-walp one-section" data-section="1">
							<h3>
								Сведения о кредиторах гражданина (по денежным обязательствам и (или) обязанности по уплате обязательных платежей, за исключением возникших в результате осуществления гражданином предпринимательской деятельности)
              </h3>
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



						<h3>Денежные обязательства:</h3>

            <div class="form-group-one clearfix">

	            <div class="col-md-6-form">
  	            <div class="form-group">
  	                <input name="form_1_entity[]" type="text" class="form-control " placeholder="Содержание обязательства (1)" required>
  						  </div>
  	            <div class="form-group">
  	                <input name="form_1_creditor[]" type="text" class="form-control " placeholder="Кредитор (2)" required>
  							</div>
  	            <div class="form-group">
  	                <input name="form_1_place_life[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" required>
  	            </div>
  	            <div class="form-group no-padding">
  	                <input name="form_1_main_emite[]" type="text" class="form-control " placeholder="Основание возникновения (3)" required>
  	            </div>
              </div>
              <div class="col-md-6-form no-padding-right">
  	            <div class="form-group">
  	                <input name="form_1_total_all[]" type="number" class="form-control "  placeholder="Сумма обязательства (всего) (4)" required>
  	            </div>
  	            <div class="form-group">
  	                <input name="form_1_total_all_indebtedness[]" type="number" class="form-control "  placeholder="Сумма обязательства (в том числе задолженность) (5)" required>
  	            </div>
  	            <div class="form-group ">
  	                <input name="form_1_penaltie_fines[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" required>
  	            </div>
              </div>

            </div>

            <a href="#" class="add-form first">Добавить обязательство</a>
            </div>


            <div class="form-group-one-walp  two-section" data-section="1">

  						<h3>Обязательные платежи:</h3>
              <div class="form-group-one">
              <div class="col-md-12-form">
  	            <div class="form-group">
  	                <input name="form_1_row2_name_tax[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" required >
  						  </div>
  	            <div class="form-group">
  	                <input name="form_1_row2_arrears[]" type="number" class="form-control " placeholder="Недоимка" required >
  							</div>
  	            <div class="form-group">
  	                <input name="form_1_row2_penaltie_fines[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" required>
  	            </div>

              </div>
              </div>

              <a href="#" class="add-form  second">Добавить платеж</a>
            </div>

						<!--// end first  -->


            <!-- Start Two -->
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
            <div class="form-group-one clearfix">
              <div class="col-md-6-form">
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
	            </div>
              <div class="col-md-6-form no-padding-right">
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

            </div>
            <a href="#" class="add-form first">Добавить обязательство</a>
            </div>

            <div class="form-group-one-walp  two-section" data-section="2">

  						<h3>Обязательные платежи:</h3>
              <div class="form-group-one">
              <div class="col-md-12-form">
  	            <div class="form-group">
  	                <input name="form_1_row2_name_tax_2[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" required >
  						  </div>
  	            <div class="form-group">
  	                <input name="form_1_row2_arrears_2[]" type="number" class="form-control " placeholder="Недоимка" required >
  							</div>
  	            <div class="form-group">
  	                <input name="form_1_row2_penaltie_fines_2[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" required>
  	            </div>

              </div>
              </div>

              <a href="#" class="add-form  second">Добавить платеж</a>
            </div>


            <!-- Start Tree -->

            <div class="form-group-one-walp one-section" data-section="3">
              <h3>
                Сведения о должниках гражданина (по денежным обязательствам и (или) обязанности по уплате обязательных платежей, за исключением возникших в результате осуществления гражданином предпринимательской деятельности)
                </h3>
              </br>
              </br>
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
                     (15) - Указывается размер просроченной задолженности по сумме основного обязательства (с процентами) по состоянию на дату составления списка кредиторов и должников гражданина (за исключением неустойки (штрафа, пени), процентов за просрочку платежа, убытков в виде упущенной выгоды и иных финансовых санкций, начисленных на сумму основного обязательства). Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату  составления списка кредиторов и должников гражданина.
                </div>

              </div>



            <h3>Денежные обязательства:</h3>

            <div class="form-group-one clearfix">

              <div class="col-md-6-form">
                <div class="form-group">
                    <input name="form_1_entity_3[]" type="text" class="form-control " placeholder="Содержание обязательства (11)" required>
                </div>
                <div class="form-group">
                    <input name="form_1_creditor_3[]" type="text" class="form-control " placeholder="Кредитор (12)" required>
                </div>
                <div class="form-group">
                    <input name="form_1_place_life_3[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" required>
                </div>
                <div class="form-group no-padding">
                    <input name="form_1_main_emite_3[]" type="text" class="form-control " placeholder="Основание возникновения (13)" required>
                </div>
              </div>
              <div class="col-md-6-form no-padding-right">
                <div class="form-group">
                    <input name="form_1_total_all_3[]" type="number" class="form-control "  placeholder="Сумма обязательства (всего) (14)" required>
                </div>
                <div class="form-group">
                    <input name="form_1_total_all_indebtedness_3[]" type="number" class="form-control "  placeholder="Сумма обязательства (в том числе задолженность) (15)" required>
                </div>
                <div class="form-group ">
                    <input name="form_1_penaltie_fines_3[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" required>
                </div>
              </div>

            </div>

            <a href="#" class="add-form first">Добавить обязательство</a>
            </div>

            <div class="form-group-one-walp  two-section" data-section="3">

  						<h3>Обязательные платежи:</h3>
              <div class="form-group-one">
              <div class="col-md-12-form">
  	            <div class="form-group">
  	                <input name="form_1_row2_name_tax_3[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" required >
  						  </div>
  	            <div class="form-group">
  	                <input name="form_1_row2_arrears_3[]" type="number" class="form-control " placeholder="Недоимка" required >
  							</div>
  	            <div class="form-group">
  	                <input name="form_1_row2_penaltie_fines_3[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" required>
  	            </div>

              </div>
              </div>

              <a href="#" class="add-form  second">Добавить платеж</a>
            </div>

            <!--  Start Four-->

            <div class="form-group-one-walp one-section" data-section="4">
              <h3>
              Сведения о должниках гражданина (по денежным обязательствам и (или) обязанности по уплате обязательных платежей, которые возникли в результате осуществления гражданином предпринимательской деятельности)
            </h3>
              </br>
              </br>
              <div class="accordion">
                <a class="link-to-ul" href="#">Иноформация о правилах заполнения (кликните для показа/скрытия)</a>
                <div>
                     (16) - Указывается существо обязательства (например, заем, кредит).
                    </br>
                     (17) - Указывается другая сторона обязательства: кредитор, фамилия, имя и отчество (последнее - при наличии) для физического лица или наименование юридического лица.
                    </br>
                     (18) - Указывается основание возникновения обязательства, а также реквизиты (дата, номер) соответствующего договора или акта.
                    </br>
                     (19) - Указывается сумма основного обязательства, в том числе подлежащие уплате проценты. Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату составления списка кредиторов и должников гражданина.

                     </br>
                     (20) - Указывается размер просроченной задолженности по сумме основного обязательства (с процентами) по состоянию на дату составления списка кредиторов и должников гражданина (за исключением неустойки (штрафа, пени), процентов за просрочку платежа, убытков в виде упущенной выгоды и иных финансовых санкций, начисленных на сумму основного обязательства). Для обязательств, выраженных в иностранной валюте, сумма указывается в рублях по курсу Банка России на дату  составления списка кредиторов и должников гражданина.
                     </br>
                     (21) - Заполняется в случае, если возврат суммы излишне уплаченного налога осуществляется с нарушением сроков, установленных Налоговым кодексом Российской Федерации (Собрание законодательства Российской Федерации, 1998, N 31, ст.3824; 2006, N 31, ст.3436; 2010, N 31, ст.4198; 2011, N 47, ст.6611; 2012, N 27, ст.3588; 2013, N 30, ст.4081; 2014, N 45, ст.6157; N 26, ст.3372; 2015, N 24, ст.3377).
                </div>

              </div>



            <h3>Денежные обязательства:</h3>

            <div class="form-group-one clearfix">

              <div class="col-md-6-form">
                <div class="form-group">
                    <input name="form_1_entity_4[]" type="text" class="form-control " placeholder="Содержание обязательства (16)" required>
                </div>
                <div class="form-group">
                    <input name="form_1_creditor_4[]" type="text" class="form-control " placeholder="Кредитор (17)" required>
                </div>
                <div class="form-group">
                    <input name="form_1_place_life_4[]" type="text" class="form-control "  placeholder="Место нахождения (место жительства) кредитора" required>
                </div>
                <div class="form-group no-padding">
                    <input name="form_1_main_emite_4[]" type="text" class="form-control " placeholder="Основание возникновения (18)" required>
                </div>
              </div>
              <div class="col-md-6-form no-padding-right">
                <div class="form-group">
                    <input name="form_1_total_all_4[]" type="number" class="form-control "  placeholder="Сумма обязательства (всего) (19)" required>
                </div>
                <div class="form-group">
                    <input name="form_1_total_all_indebtedness_4[]" type="number" class="form-control "  placeholder="Сумма обязательства (в том числе задолженность) (20)" required>
                </div>
                <div class="form-group ">
                    <input name="form_1_penaltie_fines_4[]" type="number" class="form-control "  placeholder="Штрафы, пени и иные санкции" required>
                </div>
              </div>

            </div>

            <a href="#" class="add-form first">Добавить обязательство</a>
            </div>

            <div class="form-group-one-walp clearfix two-section" data-section="4">

  						<h3>Обязательные платежи:</h3>
              <div class="form-group-one">
                <div class="col-md-12-form">
    	            <div class="form-group">
    	                <input name="form_1_row2_name_tax_4[]" type="text" class="form-control " placeholder="Наименование налога, сбора или иного обязательного платежа" required >
    						  </div>
    	            <div class="form-group">
    	                <input name="form_1_row2_arrears_4[]" type="number" class="form-control " placeholder="Недоимка" required >
    							</div>
    	            <div class="form-group">
    	                <input name="form_1_row2_penaltie_fines_4[]" type="number" class="form-control "  placeholder="Сумма к зачету или возврату (проценты) (21)" required>
    	            </div>

                </div>
              </div>

              <a href="#" class="add-form  second">Добавить платеж</a>
            </div>
            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit" name="reg_submit" value="Сформировать документ"/>
    </form>
</div>
</div>
