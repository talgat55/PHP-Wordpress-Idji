<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 04.03.2018
 * Time: 23:52
 */
if (isset($_POST['form_9_short_info_submit'])) {
    $form_9_name_credit_bank_mfo[] = $_POST['form_9_name_credit_bank_mfo'];
    $form_9_balance_owed[] = $_POST['form_9_balance_owed'];
    $form_9_amount_overdue_debt[] = $_POST['form_9_amount_overdue_debt'];
    $form_9_default_period[] = $_POST['form_9_default_period'];
    $form_9_bank_try_collect[] = $_POST['form_9_bank_try_collect'];

    //		$cur_user_id = get_current_user_id();
    $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    if ($form_9_name_credit_bank_mfo[0]) {

        $html = '
            <h1 style="text-align: center;">Краткая информация о задолженности перед банками для анкетирования</h1>
        
        <p>ФИО анкетируемого:  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '</p>
             <table border="1" cellspacing="0" cellpadding="5" align="left" width="100%">
                <tbody>
                <tr>
                    <td style="text-align: center;"  width="20%">
                    <div>
                        Наименование<br>
                        кредитора:<br>
                        банка, МФО,<br>
                        физического<br>
                        лица и т.д. 
                    </div>
                    </td>
                    <td  width="20%" style="text-align: center;">
                    <div>
                        Остаток долга,<br> руб.
                    </div>
                    </td  >
                    <td width="20%" style="text-align: center;">
                    <div>
                        Размер<br>
                        просроченной<br>задолженности,<br>руб.<br>
                    </div>    
                    </td>    
                    <td  width="20%" style="text-align: center;">
                    <div>
                        Срок<br>
                        просрочки,<br>
                        мес.
                    </div>
                    </td>
                     <td  width="20%" style="text-align: center;">
                        <div>
                        Каким образом<br>
                        банк пытается<br>
                        взыскать<br>
                        задолженность:<br>
                        сам, коллекторы,<br>
                        суд, приставы
                        </div>
                     </td>
                    
                </tr>';
        $balance_total = 0;
        $amount_overdue_total = 0;
        for ($i = 0; $i < count($form_9_name_credit_bank_mfo[0]); $i++) {
            $html .= '
                <tr>
                    <td>
                        ' . $form_9_name_credit_bank_mfo[0][$i] . '
                    </td>
                    <td>
                    
                        ' . $form_9_balance_owed[0][$i] . '

                    </td>
                    <td>
                       ' . $form_9_amount_overdue_debt[0][$i] . '
                    </td>
                    <td>
                    
                         ' . $form_9_default_period[0][$i] . '

                    </td>
                     <td>
                        ' . $form_9_bank_try_collect[0][$i] . '
                     </td>
                    
                </tr>
            ';
            $balance_total  = $balance_total +$form_9_balance_owed[0][$i];
            $amount_overdue_total  = $amount_overdue_total+$form_9_amount_overdue_debt[0][$i];

        }
        $html .= '
                <tr>
                    <td>
                        Итого:
                    </td>
                    <td>
                    
                        ' . $balance_total . '

                    </td>
                    <td>
                       ' . $amount_overdue_total . '
                    </td>
                    <td> </td>
                    <td> </td>
                    
                </tr>
            ';

        $html .= '
        


                </tbody>
            </table>
        
        
        ';


    }

    generateform($html, 'form9');
}