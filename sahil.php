<?php
$mobile_no = 917710038998;
$message = "test";
$url = "http://hapi.smsapi.org/SendSMS.aspx?UserName=Helo_Video&password=123456&MobileNo=".$mobile_no."&SenderID=sample&CDMAHeader=SAMPLE&Message=".$message;

                               $curl = curl_init();
                               // Set some options - we are passing in a useragent too here
                               curl_setopt_array($curl, array(
                                   CURLOPT_RETURNTRANSFER => 1,
                                   CURLOPT_URL => $url
                               ));
                               // Send the request & save response to $resp
                               $resp = curl_exec($curl);
                               // Close request to clear up some resources
                               curl_close($curl);




                               
                               ?>