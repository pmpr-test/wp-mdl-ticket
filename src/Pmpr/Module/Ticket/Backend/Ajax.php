<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a99cbefdf2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Backend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Model\Respond; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Ticket as Initiator; use Pmpr\Module\Ticket\Traits\SubmissionTrait; class Ajax extends Common { use SubmissionTrait; const wiysygukkaksueso = Initiator::uuqoeigueqguouek . "\142\x61\x63\x6b\145\x6e\144\x5f"; const kkgocwccwyueqioi = self::wiysygukkaksueso . "\x73\165\142\x6d\x69\164\137\162\145\163\160\157\x6e\163\145"; const myikkigscysoykgy = ["\163\x75\142\155\151\x74\137\x72\x65\x73\160\x6f\x6e\163\x65" => self::kkgocwccwyueqioi]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kkgocwccwyueqioi, [$this, "\145\x69\167\x65\141\143\x79\x6f\x61\171\x6b\167\153\x79\x73\x6d"]); } public function eiweacyoaykwkysm() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); $occymigcemkqucuw = false; if (!is_wp_error($keccaugmemegoimu)) { $icwicymcioeyeyek = $eiicaiwgqkgsekce->yyqgamuwwakgciey(); $sogksuscggsicmac = $this->qismogqiwywsucie($iswcokucwmiosiaq, $icwicymcioeyeyek); if ($sogksuscggsicmac && is_array($sogksuscggsicmac)) { $occymigcemkqucuw = true; $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea instanceof Respond) { $mcmciwgeuccgyuqm = Respond::symcgieuakksimmu(); $keccaugmemegoimu = $this->umqeyekmoagusaiq([Constants::TEXT => $mcmciwgeuccgyuqm->iekyeyicoyyawomk()->geyekyouismwgauc(Ticket::miwkyequoaigisoa, $siquossayskcwkea, Constants::TEXT), Constants::ckmsuwamgymouaeu => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::ckmsuwamgymouaeu), Constants::CREATED_AT => $mcmciwgeuccgyuqm->waecsyqmwascmqoa($siquossayskcwkea, Constants::CREATED_AT)]); } } } if (!$occymigcemkqucuw && $keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mumsqekeeuykyemy($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
