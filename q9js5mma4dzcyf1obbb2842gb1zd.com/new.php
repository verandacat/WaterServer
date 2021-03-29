<?php
  $redirect[1] = "https://h.accesstrade.net/sp/cc?rk=0100l9vx00b8mb"; //shinano
  $redirect[2] = "https://h.accesstrade.net/sp/cc?rk=0100nbjp00b8mb"; //kirala
  $redirect[3] = "https://track.affiliate-b.com/visit.php?guid=ON&a=t8195i-v2755388&p=0805307"; //aqua
  $redirect[4] = "https://track.affiliate-b.com/visit.php?guid=ON&a=q1398F-630765j&p=1506217y"; //crystal
  $redirect[5] = "https://track.affiliate-b.com/visit.php?guid=ON&a=M6645y-P223157X&p=15062"; //5ban

  $redirect[6] = "https://track.affiliate-b.com/visit.php?guid=ON&a=d2423k-l195973q&p=1506217y"; //energy
  $redirect[7] = "https://h.accesstrade.net/sp/cc?rk=0100o8bw00b8mb"; //premium
  $redirect[8] = "https://h.accesstrade.net/sp/cc?rk=0100mxgx00b8mb"; //suntryサントリー天然水サーバー
  $redirect[9] = "https://h.accesstrade.net/sp/cc?rk=0100mxgx00b8mb"; //suntry-1サントリー天然水サーバー
  $redirect[10] = "http://h.accesstrade.net/sp/cc?rk=0100mpta00bizl"; //creclamio

  $redirect[11] = "https://h.accesstrade.net/sp/cc?rk=0100nxsv00b8mb"; //fujinoyusui
  $redirect[12] = "http://h.accesstrade.net/sp/cc?rk=0100h3ml006pd3"; //ideal
  $redirect[13] = "http://ad.scadnet.com/8Ef5IF/i4/"; //kirin
  $redirect[14] = "http://px.a8.net/svt/ejp?a8mat=1ZIMUV+B0KSII+1Z2W+6FWRL"; //megumiwater
  $redirect[15] = "http://px.a8.net/svt/ejp?a8mat=2BF8BQ+7OB6RU+2M2E+5YRHD"; //sakura

  $redirect[16] = "http://h.accesstrade.net/sp/cc?rk=01005i4800bizl"; //elfile
  $redirect[17] = "http://h.accesstrade.net/sp/cc?rk=01003l4z00bizl"; //fujiseiryu
  $redirect[18] = "http://h.accesstrade.net/sp/cc?rk=0100cnwv00bizl"; //furele
  $redirect[19] = "https://h.accesstrade.net/sp/cc?rk=0100msf900b8mb"; //clicla
  $redirect[20] = "http://www.rentracks.jp/adx/r.html?idx=0.1077.64977.934.1555&dna=24616"; //merqulop

  $redirect[21] = "https://h.accesstrade.net/sp/cc?rk=0100mxgx00b8mb"; //suntry-2
  $redirect[22] = "https://h.accesstrade.net/sp/cc?rk=0100cp0d00b8mb"; //hawaiiwater
  $redirect[23] = "https://h.accesstrade.net/sp/cc?rk=0100fk28006pd3"; //onewaywater
  $redirect[24] = "https://www.hikakude.jp/waterserver/lp/lp0015.html"; //mcmmegumi
  $redirect[25] = "https://track.affiliate-b.com/visit.php?guid=ON&a=y4590v-i136246H&p=0805307"; //urunon

  $redirect[26] = "http://h.accesstrade.net/sp/cc?rk=0100f44800bizl"; //mituuroko
  $redirect[27] = "http://h.accesstrade.net/sp/cc?rk=0100ezmr006pd3"; //aqua-magic
  $redirect[28] = "https://h.accesstrade.net/sp/cc?rk=01003ote006pd3"; //alpina-water
  $redirect[29] = "http://h.accesstrade.net/sp/cc?rk=0100ax0m006pd3"; //b-water
  $redirect[30] = "https://h.accesstrade.net/sp/cc?rk=0100im1l00b8mb"; //aquaclaraアクアクララ

  $redirect[31] = "https://h.accesstrade.net/sp/cc?rk=0100nfqg00b8mb"; //ベビアクア
  $redirect[32] = "https://h.accesstrade.net/sp/cc?rk=0100iudf00b8mb"; //aquaclara-2アクアクララ
  $redirect[33] = "https://h.accesstrade.net/sp/cc?rk=0100ksuz006pd3"; //freciousフレシャス
  $redirect[34] = "https://h.accesstrade.net/sp/cc?rk=0100mvoa006pd3"; //frecious-1フレシャス
  $redirect[35] = "https://h.accesstrade.net/sp/cc?rk=0100jdv400b8mb"; //clytia

  $redirect[36] = "https://h.accesstrade.net/sp/cc?rk=0100hg2x006pd3"; //cosmowater

  $redirect[37] = "http://ad.isaf.jp/bin/w.x?p=1794&b=544&o=530&s=535"; //aquaclara-akb
  $redirect[38] = "https://h.accesstrade.net/sp/cc?rk=0100nmpe006pd3"; //cosmowater
  $redirect[39] = "https://h.accesstrade.net/sp/cc?rk=0100nq54006pd3"; //freciousカフェ機能付き
  $redirect[40] = "https://h.accesstrade.net/sp/cc?rk=0100nt7n006pd3"; //freciousXUCC

  $redirect[41] = "https://h.accesstrade.net/sp/cc?rk=0100nm7n006pd3"; //frecious乗り換え
  $redirect[42] = "https://h.accesstrade.net/sp/cc?rk=0100b2em006pd3"; //frecious dewo

  if( isset($_GET['id']) ){
    $id = intval($_GET['id']);
    header("Location:$redirect[$id]");
  }
?>
