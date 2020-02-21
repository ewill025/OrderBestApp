/*jshint esversion: 6 */

$(document).ready(function () {
     var path = "{{ route('autocomplete') }}";
     $('input.typeahead').typeahead({
         source: function (query, process) {
             return $.get(path, {
                 query: query
             }, function (data) {
                 return process(data);
             });
         }
     });


    //Email
    $('#customer').on('change', function () {
        var customer_id = $(this).val();
        var a = $(this).parent();
         var email = $(this).children('option:selected').data('email');
         $('#email').val(email);
        $.ajax({
            type: 'GET',
            url: 'getEmail/' + customer_id,
            data: { 'id': customer_id },
            dataType: 'json', //return data will be json
            success: function (data) {
                console.log("email");
                console.log(data.email);
                a.find('#email').val(data.email);
            },
            error: function () {
            }
        });
    });

    //Phone
     $('#customer').on('change', function () {
         var customer_id = $(this).val();
         var b = $(this).parent();
         var phone = $(this).children('option:selected').data('phone');
         $('#phone').val(phone);
         $.ajax({
             type: 'GET',
             url: 'getPhone/' + customer_id,
             data: {
                 'id': customer_id
             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log("phone");
                 console.log(data.phone);
                 b.find('#phone').val(data.phone);
             },
             error: function () {
             }
         });
     });

     //Address
     $('#customer').on('change', function () {
         var customer_id = $(this).val();
         var a = $(this).parent();
         var address = $(this).children('option:selected').data('address');
         $('#address').val(address);
         $.ajax({
             type: 'GET',
             url: 'getAddress/' + customer_id,
             data: {
                 'id': customer_id
             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log("address");
                 console.log(data.address);
                 a.find('#address').val(address);
             },
             error: function () {}
         });
     });


     //City
     $('#customer').on('change', function () {
         var customer_id = $(this).val();
         var a = $(this).parent();
         var city = $(this).children('option:selected').data('city');
         $('#city').val(city);
         $.ajax({
             type: 'GET',
             url: 'getCity/' + customer_id,
             data: {
                 'id': customer_id
             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log("city");
                 console.log(data.city);
                 a.find('#city').val(data.city);
             },
             error: function () {}
         });
     });

     //State
     $('#customer').on('change', function () {
         var customer_id = $(this).val();
         var b = $(this).parent();
         var state = $(this).children('option:selected').data('state');
         $('#state').val(state);
         $.ajax({
             type: 'GET',
             url: 'getState/' + customer_id,
             data: {
                 'id': customer_id
             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log("state");
                 console.log(data.state);
                 b.find('#state').val(data.state);
             },
             error: function () {}
         });
     });

     //Zip
     $('#customer').on('change', function () {
         var customer_id = $(this).val();
         var a = $(this).parent();
         var zip = $(this).children('option:selected').data('zip');
         $('#zip').val(zip);
         $.ajax({
             type: 'GET',
             url: 'getZip/' + customer_id,
             data: {
                 'id': customer_id
             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log("zip");
                 console.log(data.zip);
                 a.find('#zip').val(data.zip);
             },
             error: function () {}
         });
     });

     //Model
   /*  $('#brand').on('change', function () {
         var brand_id= $(this).val();
         console.log(brand_id);
         var model = $(this).parent();
         var op = " ";
         $.ajax({
             type: 'GET',
             url: 'getModel/'+ brand_id,
             data: {
                 'brand_id': brand_id,

             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log(data);
                 op += ' <option value="">Select Model:</option>';
                 for (var i = 0; i < data.length; i++) {
                     op += '<option value="' + data[i].brand_id + '">' + data[i].model + '</option>';
                 }
                  model.find('#model').html(" ");
                 model.find('#model').append(op);

             },
             error: function () {}
         });
     }); */

     //Size
     $('#model').on('change', function (e) {

        // var device_id = e.target.value;
         var device_id = $(this).val();

         var size = $(this).parent();
         var op = " ";

     $.ajax({
             type: 'get',
             url: 'getSize/' + device_id,
             data: {
                 'device_id': device_id,

             },
             dataType: 'json', //return data will be json
             success: function (data) {
                 console.log(data);
                 op += ' <option value="">Choose Space Size:</option>';
                    for (var i = 0; i < data.length; i++) {
                     op += '<option value="' + data[i].device_id + '">' + data[i].size_1 + '</option>';
                     op += '<option value="' + data[i].device_id + '">' + data[i].size_2 + '</option>';
                     op += '<option value="' + data[i].device_id + '">' + data[i].size_3 + '</option>';
                    }
                 size.find('#size').html(" ");
                 size.find('#size').append(op);

             },
             error: function () {}
         });
     });

     //Colors

    $('#model').on('change', function () {
        var device_id = $(this).val();

        var colors = $(this).parent();
        var op = " ";
        $.ajax({
            type: 'GET',
            url: 'getColor/' + device_id,
            data: {
                'device_id': device_id,

            },
            dataType: 'json', //return data will be json
            success: function (data) {
                console.log(data);
                op += ' <option value="">Select Color:</option>';
                for (var i = 0; i < data.length; i++) {
                    op += '<option value="' + data[i].device_id + '">' + data[i].color_1 + '</option>';
                    op += '<option value="' + data[i].device_id + '">' + data[i].color_2 + '</option>';
                    op += '<option value="' + data[i].device_id + '">' + data[i].color_3 + '</option>';
                    op += '<option value="' + data[i].device_id + '">' + data[i].color_4 + '</option>';
                    op += '<option value="' + data[i].device_id + '">' + data[i].color_5 + '</option>';
                }
                colors.find('#colors').html(" ");
                colors.find('#colors').append(op);

            },
            error: function () { }
        });
    });

    $('#carriers').on('change', function () {
        var carrier_id = $(this).val();
        var a = $(this).parent();
        var msin = $(this).children('option:selected').data('msin');
        $('#msin').val(msin);
        $.ajax({
            type: 'GET',
            url: 'getMSIN/' + carrier_id,
            data: {
                'carrier_id': carrier_id,

            },
            dataType: 'json', //return data will be json
            success: function (data) {
                console.log(data);
                console.log(data.msin);
                a.find('#msin').val(data.msin);
            },
            error: function () {}
        });
    });


});
