<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 0:52
 */
?>
<div class="breadscrumb">
    <div class="container">
        <h1 class="title-section service center-white ">Ходатайство о снижении неустойки по кредитному договору
            (договору займа)</h1>
    </div>
</div>
<div class="row row-doc-form">
    <div class="container">
        <p>
            ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
        </p>
        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <div class="clearfix page-form-8 ">
                <div class="form-group-one-walp one-section">
                    <div class="form-group-one clearfix">

                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_8_court_name" type="text" class="form-control "
                                       placeholder="Наименование суда, в котором разрешается спор">
                            </div>
                            <div class="form-group">
                                <input name="form_8_adress_court" type="text" class="form-control "
                                       placeholder="Адрес суда, в котором разрешается спор">
                            </div>
                        </div>
                        <h3>Истец:</h3>
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_8_name_i" type="text" class="form-control "
                                       placeholder="Наименование истца по делу">
                            </div>
                            <div class="form-group">
                                <input name="form_8_adress_i" type="text" class="form-control "
                                       placeholder="Адрес истца">
                            </div>
                            <div class="form-group">
                                <input name="form_8_inn_i" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"
                                       placeholder="ИНН истца">
                            </div>
                            <div class="form-group">
                                <input name="form_8_ogrn_i" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"
                                       placeholder="ОГРН истца">
                            </div>
                            <div class="form-group">
                                <input name="form_8_phone_exist" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"
                                       placeholder="Телефон истца, если известен">
                            </div>
                            <div class="form-group">
                                <input name="form_8_fax_exist" type="number" pattern="[0-9]+([\.,][0-9]+)?" class="form-control number-field"
                                       placeholder="Факс истца, если известен">
                            </div>
                            <div class="form-group">
                                <input name="form_8_email_exist" type="text" class="form-control "
                                       placeholder="E-mail истца, если известен">
                            </div>
                            <div class="form-group">
                                <input name="form_8_number_delo" type="text" class="form-control "
                                       placeholder="Указать номер дела в рамках которого подаётся ходатайство">
                            </div>
                            <div class="form-group">
                                <input name="form_8_subject_dispute" type="text" class="form-control "
                                       placeholder="Указать предмет спора (взыскание задолженности по кредитному договору №__ дата заключения, займу № __ дата заключения, иному обязательству">
                            </div>

                            <div class="form-group">
                                <input name="form_8_violation_plaintiff" type="text" class="form-control "
                                       placeholder="Указать нарушенное Истцом обязательство (своевременной оплате ежемесячных платежей по кредиту; оплате сложившейся задолженности по договору и т.п.)">
                            </div>
                            <div class="form-group">
                                <input name="form_8_percent_delo" type="text" class="form-control "
                                       placeholder="Указать процент по Договору без знака процента">
                            </div>
                            <div class="form-group">
                                <p>Указать обстоятельства, которые повлияли на нарушение исполнения обязательства, например, тяжёлое материальное положение (подтверждение – копия трудовой книжки + справка 2НДФЛ с места работы, либо документ удостоверяющий статус безработного; выписка из мед. карты, подтверждающая возникновение серьёзного заболевания); наличие иждивенцев (подтверждение – справка о составе семьи, свидетельство о рождении ребёнка, пенсионное удостоверение члена семьи и т.п.); наличие иных кредитных обязательств (подтверждение – копии кредитных договоров, соглашений)</p>
                                <textarea name="form_8_circumstances_obligation"   class="form-control "></textarea>

                            </div>


                        </div>

                        <p>Прошу суд снизить размер неустойки за неисполнение Ответчиком обязательств перед Истцом по</p>

                        <div class="form-group">
                            <input name="form_8_name_obligation" type="text" class="form-control "
                                   placeholder="Указать наименование, № __ и дату обязательств">
                        </div>

                        <p>Приложение:</p>
                        <div  >
                            <div class="form-group" style="margin-bottom: 20px;">
                                <input name="form_8_aplication_name[]" type="text" class="form-control "
                                       placeholder="Название приложения">
                            </div>
                            <a href="#" class="add-form form-8">Добавить еще приложение</a>
                        </div>

                    </div>
                </div>


            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_8_loan_agreement_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>
