<?php
ob_start();
$invoice_number = (!empty($_POST['invoice_number'])) ? $_POST['invoice_number'] : '';
$sub_title = (!empty($_POST['sub_title'])) ? $_POST['sub_title'] : '';
$logo_url = (!empty($_POST['logo_url'])) ? $_POST['logo_url'] : '';
if (!empty($logo_url)) {
    $files = glob('assets/upload/{,.}*', GLOB_BRACE);
    foreach ($files as $file) { // iterate files
        if (is_file($file)) {
            unlink($file); // delete file
        }
    }
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension   
    $file_mine = finfo_file($finfo, $logo_url);
    finfo_close($finfo);
    if (isset($file_mine) && !empty($file_mine) && $file_mine == 'image/jpeg') {

        $img = str_replace('data:image/jpeg;base64,', '', $logo_url);
        $filename =  uniqid() . '.jpeg';
    } elseif ($file_mine == 'image/jpg') {
        $img = str_replace('data:image/jpg;base64,', '', $logo_url);
        $filename =  uniqid() . '.jpg';
    } else {
        $img = str_replace('data:image/png;base64,', '', $logo_url);
        $filename =  uniqid() . '.png';
    }

    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = "assets/upload/" . $filename;
    $success = file_put_contents($file, $data);
    $logo_url = '<img src="' . $file . '" height="80">';
} else {
    $logo_url = '<img src="assets/images/elsevier.png" height="80">';
}


$order_number = (!empty($_POST['order_number'])) ? $_POST['order_number'] : '';
$date1 = (!empty($_POST['date1'])) ? $_POST['date1'] : date('M d, Y');
$date1 = date_create($date1);
$date1 = date_format($date1, 'M d, Y');
// $currency = (!empty($_POST['currency'])) ? $currency_name[$_POST['currency']] : 'USD';

$bf_name = (!empty($_POST['bf_name'])) ? $_POST['bf_name'] : '';
$bf_address1 = (!empty($_POST['bf_address1'])) ? $_POST['bf_address1'] : '';
$bf_address2 = (!empty($_POST['bf_address2'])) ? $_POST['bf_address2'] : '';
$registration_no = (!empty($_POST['registration_no'])) ? $_POST['registration_no'] : '';
$head_vat = (!empty($_POST['head_vat'])) ? $_POST['head_vat'] : '';
if (isset($_POST['item_qty']) && !empty($_POST['item_qty']) && is_array($_POST['item_qty'])) {

    $items = '';
    foreach ($_POST['item_qty'] as $key => $value) {

        $item_name = (!empty($_POST['item_name'][$key])) ? $_POST['item_name'][$key] : '';
        $item_price = (!empty($_POST['item_price'][$key])) ? $_POST['item_price'][$key] : '';
        $item_total = (!empty($_POST['item_total'][$key])) ? $_POST['item_total'][$key] : '';

        $items .= '<tr>            
            <td class="tbl_td" style="text-align:left">' . $item_name . '</td>
            <td class="tbl_td">' . $value . '</td>
            <td class="tbl_td">' . $item_price . '</td>
            <td class="tbl_td">' . $item_total . '</td>
        </tr>';
    }
}
$item_grand_total = (!empty($_POST['item_grand_total'])) ? $_POST['item_grand_total'] : '00';

if (isset($_POST['mathod_name']) && !empty($_POST['mathod_name']) && is_array($_POST['mathod_name'])) {

    $listmethod = '';
    foreach ($_POST['mathod_name'] as $key => $value) {


        $mathod_date = (!empty($_POST['mathod_date'][$key])) ? $_POST['mathod_date'][$key] : '';
        $mathod_date = date_create($mathod_date);
        $mathod_date = date_format($mathod_date, 'M d, Y');
        $method_total = (!empty($_POST['method_total'][$key])) ? $_POST['method_total'][$key] : '';

        $listmethod .= '<tr>            
            <td class="tbl_td2" style="text-align:left">' . $value . '</td>
            <td class="tbl_td2">' . $mathod_date . '</td>
            <td class="tbl_td2" style="text-align: right;">' . $method_total . '</td>
        </tr>';
    }
}



$pageborder  = '1';
$bordercolor = '';
$bordercolor = str_replace("rgb(", "", $bordercolor);
$bordercolor = str_replace(")", "", $bordercolor);
$bordercolor = explode(",", $bordercolor);
// Include the main TCPDF library (search for installation path).
require('../../../assets/tcpdf/tcpdf.php');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF
{

    // Page footer
    public function Footer()
    {

        $company_name = (!empty($_POST['company_name'])) ? $_POST['company_name'] : '';
        $company_sub_heading = (!empty($_POST['company_sub_heading'])) ? $_POST['company_sub_heading'] : '';
        $company_address1 = (!empty($_POST['company_address1'])) ? $_POST['company_address1'] : '';
        // $company_address2 = (!empty($_POST['company_address2'])) ? $_POST['company_address2'] : '';
        $company_number = (!empty($_POST['company_number'])) ? $_POST['company_number'] : '';
        $company_withheldtex = (!empty($_POST['company_withheldtex'])) ? $_POST['company_withheldtex'] : '';
        $company_business_number = (!empty($_POST['company_business_number'])) ? $_POST['company_business_number'] : '';
        $document_type = (!empty($_POST['document_type'])) ? $_POST['document_type'] : '';

        // Position at 15 mm from bottom
        $this->SetY(-40);
        // Set font
        $this->SetFont('helvetica', '', 8);
        // Page number

        // $this->Cell(0, 56, 'Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
        $footer_content = '';
        $y = $this->getY();
        $this->SetFillColor(255, 255, 255);
        $this->writeHTMLCell(150, '', '', $y, $footer_content, 0, 0, 1, true, 'J', false);
        // $this->writeHTML($footer_content, true, false, true, false, ""); 
    }
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setHeaderTemplateAutoreset(true);
// set margins
$pdf->SetMargins(15, 15, 15);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}


// set some text to print
$content = '
<style>
/* comman */
.p-20 {
    padding: 20px !important;
}

.pb-0 {
    padding-bottom: 0px !important;
}

.pt-0 {
    padding-top: 0px !important;
}

.flex_row {
    display: flex;
    flex-direction: row;
}

/* Heading */
.heading b {
    font-size: 20px;
    letter-spacing: 1px;
    font-family: "nunito-bold", sans-serif;
    color: #6c757d !important;
}

.heading small {
    font-size: 20px;
    color: #6c757d !important;
}

/* Bill */
.bill {
    background-color: #9e9e9e !important;
    color: white;
    width: 50%;
    border-bottom: 0px !important;
}

.bill b {
    font-size: 20px;
    letter-spacing: 1px;
    font-weight: bolder;
}

/* Bill2 */
.bill2 {
    width: 50%;
    font-size: 18px;
    letter-spacing: 1px;
}
</style>
<table cellpadding="0" border="0" cellspacing="0" style="width: 100%;margin: 0 auto;">
<tbody>
<!-- heading -->
<tr>
    <td class="p-20 heading">
        <b>Tax Invoice</b> <br>
        <small>INV-001</small>
    </td>
</tr>
<!-- Bill -->
<tr class="flex_row p-20 pb-0">
    <td class="p-20 bill">
        <b>Bill From</b>
    </td>
    <td class="p-20 bill">
        <b>Bill to</b>
    </td>
</tr>
<!-- Bill -->
<tr class="flex_row p-20 pt-0">
    <td class="p-20 bill2">Person 1 <br>Amazon<br>India</td>
    <td class="p-20 bill2">Person 2 <br> Mr. Akash Sharma <br> India</td>
</tr>
<!-- item -->
<tr>
    <td class="p-20 item">
        <table cellpadding="0" border="0" cellspacing="0" style="width: 100%;margin: 0 auto;">
            <tbody>
                <tr>
                    <td><strong>Description</strong></td>
                    <td><strong>Qty</strong></td>
                    <td><strong>Price</strong></td>
                    <td><strong>Total</strong></td>
                </tr>
                <tr>
                    <td> Bags</td>
                    <td>10</td>
                    <td>$1,500</td>
                    <td>$22,500</td>
                </tr>
                <tr>
                    <td>Toys</td>
                    <td>6</td>
                    <td>$1,500</td>
                    <td>$15,000</td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>
    ';

/* echo "<pre>";
print_r($_POST);
echo "</pre>";
die; */
$pdf->SetTitle($invoice_number . '-' . date('Y-m-d H:i:s'));
$pdf->AddPage('P', "A4");
$pdf->SetLineStyle(array('width' => $pageborder, 'color' => $bordercolor));
$pdf->Line(0, 0, $pdf->getPageWidth(), 0);
$pdf->Line($pdf->getPageWidth(), 0, $pdf->getPageWidth(), $pdf->getPageHeight());
$pdf->Line(0, $pdf->getPageHeight(), $pdf->getPageWidth(), $pdf->getPageHeight());
$pdf->Line(0, 0, 0, $pdf->getPageHeight());

// $pdf->writeHTMLCell(0, 0, '', '', $content, 0, 1, 0, true, '', true);
// $pdf->writeHTML($content, true, 0, false, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->writeHTMLCell('', '', '', '', $content, 0, 0, 1, true, 'J', false);
if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'download') {
    $outputs = "d";
} else {
    $outputs = "I";
}

$pdf->Output($order_number . '-' . date('Y-m-d H:i:s') . '.pdf', $outputs);
ob_end_flush();
