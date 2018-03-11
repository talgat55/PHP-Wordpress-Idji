<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 10:39
 */
?>
<div class="breadscrumb">
    <div class="container">
        <h1 class="title-section service center-white ">Заявление о предоставлении сведений о задолженности</h1>
    </div>
</div>
<div class="row row-doc-form">
    <div class="container">
        <p>
            ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
        </p>
        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <div class="clearfix page-form-11 no-left-border">
                <div class="form-group-one-walp one-section">
                    <div class="form-group-one clearfix">

                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_11_name_bank" type="text" class="form-control "
                                       placeholder="Наименование банка (филиала или отделения)">
                            </div>
                            <div class="form-group">
                                <input name="form_11_adress_bank" type="text" class="form-control "
                                       placeholder="Адрес банка (филиала или отделения)">
                            </div>
                        </div>
                        <h3>Договор:</h3>
                        <p>Подсказка: Введите сюда ваш номер договора (пример: № 3566/7376-736) или обстоятельство
                            возникновения обязательства (примеры:
                            <br/>
                            путём акцептования мной публичной аферты Банка;<br/>
                            путём акцептования Банком моего заявления № (номер заявления) на выдачу кредита</p>
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_11_order" type="text" class="form-control "
                                       placeholder="Договор">
                            </div>
                        </div>
                        <h3>Дата:</h3>
                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_11_date" type="date" class="form-control "  >
                            </div>
                            <div class="form-group">
                                <input name="form_11_number_cart" type="text" class="form-control "
                                       placeholder="Номер кредитной карты">
                            </div>
                        </div>
                    </div>


                </div>


            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_11_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>
