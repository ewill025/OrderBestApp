
<!DOCTYPE html>
<html>
    <head>
        <title>Invoice</title>
    </head>
    <body>
        <div>
            <div>
                <?php $image_path = '/img/tbi.jpg'; ?>
                <img src="{{ public_path() . $image_path }}" style="postion: relative;">
            </div>
            <div style="float: left;">

                <p>
                2633 Ponce Ave <br>
                Belmont, CA 94002<br/>
                Phone: (866) 810-1038 Fax: (209) 336-0003
                </p>
            </div>
            <div style="float: right">
                <h1>INVOICE</h1>
                <p>
                    Invoice #: <br>
                    Date:
                </p>
            </div>
        </div>

        <div style="padding-top: 130px; padding-bottom: 130px;">
            <div   style="float: left;" >
                <h5>To:</h5>
                
                <p>
                    [Recipient Name] <br>
                    [Street Address] <br>
                    [City, ST ZIP Code] <br>
                    Phone: [Phone] <br>
                </p>
            </div>
             <div style="float: left; padding-left: 150px;">
                <h5> Ship To:</h5>
                <p>
                    [Recipient Name] <br>
                    [Street Address] <br>
                    [City, ST ZIP Code] <br>
                    Phone: [Phone] <br>
                </p>
            </div>
        </div>
        <div style="padding-top: 300px; padding-bottom: 130px;">
            <div   style="float: left;" >
                <p>
                   <strong>You can now pay by phone!</strong> <br>
                    Call us toll-free on (866) 794-6603 or on <br>
                    (617) 404-4063 for non-US callers and have <br>
                     your invoice and credit card number ready.
                </p>
            </div>
             <div style="float: left; padding-left: 100px;">
                <h4> Your new phone number!</h4>
                <p >
                   ( __)___-____
                </p>
            </div>
        </div>


        <div style="padding-top: 500px">
            <table cellspacing="0">
                <thead style="background-color: #eeeeee; border: none;">
                    <tr>
                        <th width="100px" >Sales Person</th>
                        <th width="50px">P.O. Number</th>
                        <th width="100px">Requistioner</th>
                        <th width="100px">Shipped Via</th>
                        <th width="100px">F.O.B. Point</th>
                        <th width="100px">Terms</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td height="45px">{{}}</td>
                            <td>{}</td>
                            <td>{}</td>
                            <td>[]</td>
                            <td>[]</td>
                            <td>Net 30</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

             <table cellspacing="0">
                <thead style="background-color: #eeeeee; border: none;">
                    <tr>
                        <th width="100px" >Quantity</th>
                        <th width="300px">Description</th>
                        <th width="100px">Unit Price</th>
                        <th width="100px">Total</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)

                    @endforeach
                    <tr>
                        <td height="45px">1</td>
                        <td>{}</td>
                        <td>{}</td>
                        <td>[]</td>
                    </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td>SUBTOTAL:</td>
                        <td>[]</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>SALES TAX:</td>
                        <td>Incl.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>SHIPPING & HANDLING:</td>
                        <td>[]</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>TOTAL DUE:</td>
                        <td>[]</td>
                    </tr>
                </tbody>
            </table> <br>

            <P>
                Make all checks payable to TELECOM BROKERS, INC. <br>
If you have any questions concerning this invoice, contact (877) 304-1610 or billing@te-br.com
            </P>
            <strong style="text-align:center"><p>THANK YOU FOR YOUR BUSINESS!</p></strong>
        </div>

    </body>
</html>

