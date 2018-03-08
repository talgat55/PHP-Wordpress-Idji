<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 3:01
 */
?>
<div class="breadscrumb">
    <div class="container">
        <h1 class="title-section service center-white ">Заявление об отказе взаимодействия с кредитором, взыскателем</h1>
    </div>
</div>
<div class="row row-doc-form">
    <div class="container">
        <p>
            ЗАПОЛНИТЕ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ
        </p>
        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <div class="clearfix page-form-7">
                <div class="less-margin form-group-one-walp one-section">
                    <div class="form-group-one clearfix">

                        <div class="col-md-12-form">
                            <div class="form-group">
                                <input name="form_7_recipient" type="text" class="form-control "
                                       placeholder="Получатель">
                            </div>
                            <div class="form-group">
                                <input name="form_7_number_doc" type="number" class="form-control "
                                       placeholder="Номер документа">
                            </div>
                            <div class="form-group">
                                <p>Дата документа</p>
                                <input name="form_7_date_doc" type="date" class="form-control " >
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_7_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>
