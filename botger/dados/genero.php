<?php

if($type == 'private') {

apiRequest("sendMessage", array('chat_id' => $chat_id, "parse_mode" => "Markdown", "text" => "*Escolha uma das opΓ§Γ΅es:*",
'reply_markup' => array('inline_keyboard' => array(                                                                                                                                                    
                                                      //linha 1
                                                     array(
                                                         array('text'=>'ππ»ββ Dados de Homem ππ»ββ',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'homem']))//botΓ£o com callback                                                                                                            
                                                      ),
                                                      //linha 2
                                                     array(
                                                         array('text'=>'ππ»ββ Dados de Mulher ππ»ββ',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'mulher']))//botΓ£o com callback                                                                                                                                                              
                                                      ),
                                                     //linha 3
                                                     array(
                                                         array('text'=>'π  Apagar  π',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'apagar']))//botΓ£o com callback                                                   
                                                      )
                                                          
                                            )
                                    )));

}else{

apiRequest("sendMessage", array('chat_id' => $chat_id, "parse_mode" => "Markdown", "text" => "*Escolha uma das opΓ§Γ΅es:*", "reply_to_message_id" => $message_id,
'reply_markup' => array('inline_keyboard' => array(                                                                                                                                                    
                                                      //linha 1
                                                     array(
                                                         array('text'=>'ππ»ββ Dados de Homem ππ»ββ',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'homem']))//botΓ£o com callback                                                                                                            
                                                      ),
                                                      //linha 2
                                                     array(
                                                         array('text'=>'ππ»ββ Dados de Mulher ππ»ββ',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'mulher']))//botΓ£o com callback                                                                                                                                                              
                                                      ),
                                                     //linha 3
                                                     array(
                                                         array('text'=>'π  Apagar  π',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'apagar']))//botΓ£o com callback                                                   
                                                      )
                                                          
                                            )
                                    )));

}

?>