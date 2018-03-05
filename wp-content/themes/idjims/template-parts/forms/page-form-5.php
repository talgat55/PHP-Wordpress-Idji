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
        <h1 class="title-section service center-white ">Запрос в банк о представлении сведений необходимых для банкротства</h1>
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
                                <input name="form_5_name_bank" type="text" class="form-control "
                                       placeholder="Наименование банка (филиала или отделения)">
                            </div>
                            <div class="form-group">
                                <input name="form_5_adress_bank" type="text" class="form-control "
                                       placeholder="Адрес банка (филиала или отделения)">
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_5_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>
