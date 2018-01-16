<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <style type="text/css">
            body{
                padding-bottom: 120px;
            }
        </style>


        
    </head>
    <body>
        <div class="jumbotron"></div>
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

      <form id="formCreditCard" method="post" accept-charset="UTF-8" action="{{ route('money') }}">
                {{ csrf_field() }}

                MerchantID 商店代號: 
                <input class="form-control" type="text" name="MerchantID" value="2000132" /><br />

                MerchantTradeNo 商店交易編號: 
                <input class="form-control" type="text" name="MerchantTradeNo" value="DX20180116214638eb4f" /><br />

                MerchantTradeDate 商店交易時間: 
                <input class="form-control" type="text" name="MerchantTradeDate" value="2018/01/16 21:46:38" /><br />

                PaymentType 交易類型: 
                <input class="form-control" type="text" name="PaymentType" value="aio" /><br />

                TotalAmount 交易金額: 
                <input class="form-control" type="text" name="TotalAmount" value="5" /><br />

                TradeDesc 交易描述: 
                <input class="form-control" type="text" name="TradeDesc" value="建立信用卡測試訂單" /><br />

                ItemName 商品名稱: 
                <input class="form-control" type="text" name="ItemName" value="MacBook 30元X2#iPhone6s 40元X1" /><br />

                ReturnURL 付款完成通知回傳網址: 
                <input class="form-control" type="text" name="ReturnURL" value="https://developers.opay.tw/AioMock/MerchantReturnUrl" /><br />

                ChoosePayment 預設付款方式: 
                <input class="form-control" type="text" name="ChoosePayment" value="Credit" /><br />

                會員商店代碼: 
                <input class="form-control" type="text" name="StoreID" value="" /><br />

                ClientBackURL Client端返回廠商網址: 
                <input class="form-control" type="text" name="ClientBackURL" value="https://developers.opay.tw/AioMock/MerchantClientBackUrl" /><br />

                CreditInstallment 刷卡分期期數: 
                <input class="form-control" type="text" name="CreditInstallment" value="" /><br />

                InstallmentAmount 使用刷卡分期的付款金額: 
                <input class="form-control" type="text" name="InstallmentAmount" value="" /><br />

                Redeem 信用卡是否使用紅利折抵: 
                <input class="form-control" type="text" name="Redeem" value="" /><br />

                CheckMacValue 簽章類型: 
                <input class="form-control" type="text" name="EncryptType" value="1" /><br />

                CheckMacValue 檢查碼: 
                <input class="form-control" type="text" name="CheckMacValue" value="859F9C00FB156E57097D215215E21367D1C9234F10716B21204A23E95AE33AE8" /><br />

                <input class="form-control" type="submit" value="送出訂單" /> 

            </form>

    </div>
  </div>
</div>


            <script src="{{ asset('js/app.js') }}"></script>
        </div>
    </body>
</html>
