<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43aa826bcb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Container; use Pmpr\Module\Ticket\Model\Ticket; abstract class Common extends Container { public function umqeyekmoagusaiq($igqsaukqcqscimok) : string { $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if (isset($igqsaukqcqscimok[Constants::ckmsuwamgymouaeu])) { goto qmeoaqmsuseueqiy; } $kmekouwmygismoku = $igqsaukqcqscimok[Ticket::asywgyemkouimocw] ?? 0; $igwimgwceysgwimw = ''; if (!$kmekouwmygismoku) { goto ickcmqoiosquugwe; } $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); if ($mkucggyaiaukqoce = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, Constants::meksegaoamowuwoq)) { goto qmiwsequckckoaei; } if ($owaiikyuwwwmswgc = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, Constants::muqaqimusmckkieq)) { goto goeoymmqqqeeoime; } if ($mokawwccycoiqeka = $mmqcgecamywacuwe->igawqaomowicuayw($kmekouwmygismoku, Constants::weayyoewessosyko)) { goto eiawsoasmscmqswa; } goto qgegkeomwscwwiuw; qmiwsequckckoaei: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($mkucggyaiaukqoce); goto qgegkeomwscwwiuw; goeoymmqqqeeoime: $igwimgwceysgwimw = $ewgmommeawggyaek->aeymcyaqkmmukomc($owaiikyuwwwmswgc); goto qgegkeomwscwwiuw; eiawsoasmscmqswa: $igwimgwceysgwimw = $this->caokeucsksukesyo()->gyecsegqciqykomu()->yugsmaqmkekysqmu(trailingslashit($mokawwccycoiqeka) . "\x66\x61\166\x69\x63\x6f\x6e\x2e\x69\x63\x6f"); qgegkeomwscwwiuw: ickcmqoiosquugwe: $igqsaukqcqscimok[Constants::owsgqueosiqycgky] = $igwimgwceysgwimw; goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $igqsaukqcqscimok[Constants::owsgqueosiqycgky] = $ewgmommeawggyaek->aeymcyaqkmmukomc($igqsaukqcqscimok[Constants::ckmsuwamgymouaeu]); ygkcacsyyckescqs: $igqsaukqcqscimok[Constants::yqemseykugmsyeqa] = sprintf(__("\x25\163\40\x61\164\40\x25\x73", PR__MDL__TICKET), "\x6a\x20\106\x20\131", "\110\x3a\x69"); return $this->iuygowkemiiwqmiw("\x63\157\156\x76\x65\162\x73\x61\164\x69\x6f\x6e\x2f\x69\x74\x65\x6d", $igqsaukqcqscimok); } }
