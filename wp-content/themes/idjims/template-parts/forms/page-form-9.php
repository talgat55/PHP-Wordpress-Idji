<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 04.03.2018
 * Time: 23:06
 */
?>
<div class="breadscrumb">
    <div class="container">
        <h1 class="title-section service center-white ">Краткая информация о задолжности перед банком</h1>
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
                                <input name="form_9_name_credit_bank_mfo[]" type="text" class="form-control "
                                       placeholder="Наименование кредитора: банка, МФО, физического лица и т.д.">
                            </div>
                            <div class="form-group">
                                <input name="form_9_balance_owed[]" type="number" class="form-control "
                                       placeholder="Остаток долга, руб.">
                            </div>
                            <div class="form-group">
                                <input name="form_9_amount_overdue_debt[]" type="number" class="form-control "
                                       placeholder="Размер просроченной задолженности, руб.">
                            </div>
                            <div class="form-group">
                                <input name="form_9_default_period[]" type="text" class="form-control "
                                       placeholder="Срок просрочки, мес">
                            </div>
                            <div class="form-group">
                                <input name="form_9_bank_try_collect[]" type="text" class="form-control "
                                       placeholder="Каким образом банк пытается взыскать задолженность: сам, коллекторы, суд, приставы">
                            </div>
                        </div>


                        <a href="#" class="add-form first-form-9">Добавить еще кредитора</a>
                    </div>
                </div>


            </div>

            <input class="btn btn-primary btn-lg btn-block btn-form-page-gen-doc" type="submit"
                   name="form_9_short_info_submit" value="Сформировать документ"/>
        </form>
    </div>
</div>
