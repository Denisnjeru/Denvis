{"intent":"sale","payer":{"payment_method":"paypal"}\n,"redirect_urls":{"return_url":"http://susannazanatta.com/arrakisphp/execute-payment?success=true","cancel_url":"http://susannazanatta.com/arrakisphp/execute-payment?success=false"}\n,"transactions":[{"amount":{"currency":"USD","total":"38.30","details":{"shipping":"15.00","tax":"1.30","subtotal":"22.00"}\n}\n,"item_list":{"items":[{"name":"Cloves","currency":"USD","quantity":1,"price":"1.10","sku":"cloves-whole"}\n],"shipping_address":{"city":"Admin city","state":"NSW","postal_code":"2000","line1":"Admin line 1","line2":"Admin line 2","phone":"0477056687","recipient_name":"Admin First Admin Last"}\n}\n,"description":12}\n]}\n{"name":"VALIDATION_ERROR","details":[{"field":"transactions[0].item_list.shipping_address.country_code","issue":"Country code must be 2-character ISO 3166-1 value (upper case)"}\n,{"field":"transactions[0]","issue":"Item amount must add up to specified amount subtotal (or total if amount details not specified)"}\n,{"field":"transactions[0].item_list.shipping_address.country_code","issue":"Required field missing"}\n],"message":"Invalid request - see details","information_link":"https://developer.paypal.com/webapps/developer/docs/api/#VALIDATION_ERROR","debug_id":"65bc798f9a246"}\n