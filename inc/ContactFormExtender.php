<?php

/**
 * User: anushkar
 * Date: 12/16/18
 * Time: 1:15 PM
 */
wp_enqueue_script('divi-con-ext',DIVICONEXT_DIR."js/script.js",array('jquery'),'1.0.0',true);

add_filter('the_content', 'func_divi_con_ext');
if(!function_exists('func_divi_con_ext')){
    function func_divi_con_ext($content){
        global $wpdb;
        global $post;




        if(strpos($content,'et_pb_contact_form') !== false) {

            if(isset($_POST['et_pb_contactform_submit_0'])){



                //$response_email_text = substr($post->post_content,strpos($post->post_content,'[et_pb_text _builder_version="3.18.7" module_id="response_email_text"]')+70);
                $response_email_text = substr($content,strpos($content,'module_id="response_email_text"'));
                $response_email_text = substr($response_email_text,strpos($response_email_text,']')+1);
                $response_email_text = substr($response_email_text,0,strpos($response_email_text,'[/et_pb_text]'));

                //return $response_email_text;



                $headers = array('Content-Type: text/html; charset=UTF-8');

                add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );
                add_filter( 'wp_mail_from_name', 'wpse27856_set_from_name' );
                add_filter( 'wp_mail_from', 'wpse27856_set_from_email' );


                $email_sentstatus  = wp_mail($_POST['et_pb_contact_email_0'],
                        __( 'Thank you for contacting ', 'divi_cont_ext' ).' '.get_bloginfo('name')
                ,$response_email_text,$headers);

               remove_filter( 'wp_mail_content_type','wpse27856_set_content_type' );
                remove_filter( 'wp_mail_from_name', 'wpse27856_set_from_name' );
                remove_filter( 'wp_mail_from', 'wpse27856_set_from_email' );

               
            }


        }


        return $content;
    }
}

function wpse27856_set_content_type(){
    return "text/html";
}


function wpse27856_set_from_name( $name )
{
    return get_bloginfo('name');
}

function wpse27856_set_from_email( $email ) {
    return 'ceo@paraguayresidency.com';
}


