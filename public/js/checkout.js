$(document).ready(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('.razorpay_pay_btn').click(function (e) {
        e.preventDefault();

        var data = {
            '_token' : $('input[name=_token]').val(),
            'name' : $('input[name=name]').val(),
            'lname' : $('input[name=lname]').val(),
            'number' : $('input[name=number]').val(),
            'address' : $('input[name=address]').val(),
            'city' : $('input[name=city]').val(),
            'state' : $('input[name=state]').val(),
            'pincode' : $('input[name=pincode]').val(),

        }


        $.ajax({
            type: "POST",
            url: '/confirm-razorpay-payment',
            data: data,
            success: function (response) {

                if(response.status_code == "no_data_in_cart")
                {
                    window.location.href = "/cart";
                }
                else
                {
                    // console.log(response.total_price);
                    // "amount": (response.total_price * 100),

                    var options = {
                        "key": "rzp_test_9WUlnYtj2paYGR", // Enter the Key ID generated from the Dashboard
                        "amount": (1 * 100),
                        "name": "Aranoz",
                        "description": "Thank you for purchasing",
                        "image": "http://localhost:8000/img/logo.png",
                        "handler": function (razorpay_response){

                            $.ajax({
                                type:"POST",
                                url:"/place-order",
                                data:{
                                    '_token': $('input[name=_token]').val(),
                                    'razorpay_payment_id': razorpay_response.razorpay_payment_id,
                                    'name':response.name,
                                    'lname':response.lname,
                                    'number':response.number,
                                    'address':response.address,
                                    'city':response.city,
                                    'state':response.state,
                                    'pincode':response.pincode,
                                    'place_order_razorpay':true,
                                },
                                success: function(message){
                                    window.location.href = "/thenk-you";
                                }
                            });

                            alert(razorpay_response.razorpay_payment_id);

                        },
                        "prefill": {
                            "name": response.name + response.lname,
                            "email": response.email,
                            "contact": response.number,
                        },
                        "theme": {
                            "color": "#3399cc"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                        rzp1.open();
                        e.preventDefault();


                }
            }
        });

    });
});
