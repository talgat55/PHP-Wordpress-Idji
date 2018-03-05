<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 04.03.2018
 * Time: 19:35
 */
?>
<div class="breadscrumb">
    <div class="container">
        <h1 class="title-section service center-white ">Заявление об отмеене судебного приказа</h1>
    </div>
</div>
<div class="row row-doc-form">
    <div class="container">
        <p>
            ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
        </p>
        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <div class="clearfix">
                <div class="form-group-one-walp one-section">
                    <div class="form-group-one clearfix">

                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_10_whom" type="text" class="form-control "
                                       placeholder="Кому">
                            </div>
                            <div class="form-group">
                                <input name="form_10_adress_court" type="text" class="form-control "
                                       placeholder="Адрес Суда">
                            </div>
                            <div class="form-group">
                                <input name="form_10_by_whom" type="text" class="form-control "
                                       placeholder="Кем вынесен">
                            </div>
                        </div>
                        <h3>Отменить судебный приказ:</h3>
                        <div class="col-md-12-form no-padding-right">
                            <div class="form-group">
                                <input name="form_10_who_whom" type="text" class="form-control "
                                       placeholder="Кого">
                            </div>

                        </div>
                        <h3>Взыскатель:</h3>
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_10_name_creditor" type="text" class="form-control "
                                       placeholder="Наименование взыскателя">
                            </div>
                            <div class="form-group">
                                <input name="form_10_location" type="text" class="form-control "
                                       placeholder="Место нахождения">
                            </div>
                            <div class="form-group">
                                <input name="form_10_inn" type="text" class="form-control "
                                       placeholder="ИНН">
                            </div>
                            <div class="form-group">
                                <input name="form_10_ogrn" type="text" class="form-control "
                                       placeholder="ОГРН">
                            </div>
                            <div class="form-group">
                                <input name="form_10_phone" type="text" class="form-control "
                                       placeholder="Телефон">
                            </div>
                            <div class="form-group">
                                <input name="form_10_fax" type="text" class="form-control "
                                       placeholder="Факс">
                            </div>
                            <div class="form-group">
                                <input name="form_10_email" type="text" class="form-control "
                                       placeholder="E-mail">
                            </div>
                        </div>
                        <h3>Дата вынесения судебного приказа:</h3>
                        <div class="col-md-12-form no-padding-right">
                            <div class="form-group">
                                <input name="form_10_date" type="date" class="form-control ">
                            </div>
                            <div class="form-group">
                                <input name="form_10_case_number" type="text" class="form-control "
                                       placeholder="Номер дела">
                            </div>                            
                            <div class="form-group">
                                <input name="form_10_credit_number" type="text" class="form-control "
                                       placeholder="Номер кредитного договора (прим.: №123 от 01 февраля 2015 г.)">
                            </div>
                            <div class="form-group">
                                <input name="form_10_total" type="number" class="form-control "
                                       placeholder="Сумма">
                            </div>

                        </div>

                    </div>
                </div>


            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_10_cancel_court_order_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>