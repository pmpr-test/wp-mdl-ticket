<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0b812328             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Frontend; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Form as FromComponent; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Model\Response; use Pmpr\Module\Ticket\Moderator\Traits\ModeratorTrait; use Pmpr\Module\Ticket\Ticket as Initiator; class Form extends Common { use ModeratorTrait; public function wigskegsqequoeks() { $this->waqewsckuayqguos(Initiator::uuqoeigueqguouek . "\x65\156\x71\165\145\165\x65\137\146\x6f\162\x6d\137\x61\163\163\x65\x74\x73", [$this, "\145\x6e\161\165\145\165\145"])->waqewsckuayqguos(Initiator::uuqoeigueqguouek . "\x72\x65\x6e\144\x65\162\x5f\146\x6f\x72\155\x5f\x68\x74\155\154", [$this, "\161\x79\165\151\x6f\x61\x77\145\x61\x73\x63\x63\161\147\151\157"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(Initiator::uuqoeigueqguouek . "\x67\145\164\x5f\146\x6f\162\x6d\137\x68\x74\x6d\x6c", [$this, "\141\x6d\165\x6d\143\151\x63\x79\151\x75\163\x75\151\x71\165\x63"], 10, 2); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\146\162\x6f\156\164\x65\156\x64\x2d\146\x6f\162\155", "\146\x72\157\x6e\164\x65\x6e\144\55\x66\157\x72\x6d\x2e\x6a\x73")->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $meakksicouekcgoe->qkqeooqcomucuwyk($this, Constants::wyucqaeuuqkesque, Ajax::myikkigscysoykgy); } public function qyuioaweasccqgio(array $ywmkwiwkosakssii = []) { $this->yyoqecggyacaseko($ywmkwiwkosakssii)->render(true); } public function amumcicyiusuiquc($nsmgceoqaqogqmuw, array $ywmkwiwkosakssii = []) : string { return $this->yyoqecggyacaseko($ywmkwiwkosakssii)->render(); } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ Constants::gouqcwikiiygyasc => Constants::ioomakeyqiqowgmk, Constants::mgsccwumkcawaqcy => Constants::yeaekcacwwyyqigq, Constants::iueeekcmggceyscu => __("\x53\145\x6e\144", PR__MDL__TICKET), Constants::ackcaikowcokggsc => [], Constants::ocwsuwyiiasigqaa => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this), ]); $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $mamcqsuyswcogqwg = !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $ccamueccusigaaio = $ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy]; $eaoumsseceiowgsk = $ogougosiwuoqymou->umocagoqumikakom($ccamueccusigaaio); $ikgwqyuyckaewsow = []; switch ($ccamueccusigaaio) { case Constants::qgeesceacsmeqacu: $ikgwqyuyckaewsow = [$ogougosiwuoqymou->uouyygwcgsmygaee(Constants::TEXT)->gswweykyogmsyawy(__("\x54\145\170\164", PR__MDL__TICKET))->qsecygiycssgacqs(4)->jyumyyugiwwiqomk(10)]; $awiacueqaiyewgik = [Response::asywgyemkouimocw, Constants::sgsawoooocqwouiy]; foreach ($awiacueqaiyewgik as $oaeueygsawaagyyk) { if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, $oaeueygsawaagyyk)) { $ikgwqyuyckaewsow[] = $ogougosiwuoqymou->cwiuiiakukcsaakw($oaeueygsawaagyyk)->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } break; case Constants::yeaekcacwwyyqigq: if ($this->xowuwmoiekgcwiaq()->wqmkwyeuqimyiiaw()->kskgqoywkoawosao($uamcoiueqaamsqma)) { $ikgwqyuyckaewsow = [$ogougosiwuoqymou->uouyygwcgsmygaee(Constants::TEXT)->gswweykyogmsyawy(__("\124\x65\170\x74", PR__MDL__TICKET))->qsecygiycssgacqs(4)->jyumyyugiwwiqomk(10)]; if ($mamcqsuyswcogqwg) { $ikgwqyuyckaewsow[] = $ogougosiwuoqymou->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->mkiaygiogeeyogqm()->gswweykyogmsyawy(__("\105\x6d\141\151\x6c", PR__MDL__TICKET))->jyumyyugiwwiqomk(0); } } else { return $ogougosiwuoqymou->yqgagqgesqyuyuqq()->oguessuismosauuu($ogougosiwuoqymou->oockkqiqsssakuug($uamcoiueqaamsqma)); } break; case Constants::skgwuociausakiqe: $ikgwqyuyckaewsow = [$ogougosiwuoqymou->ymuegqgyuagyucws(Constants::vswoiouoaykswgym)->kqqqugemmqagucuq()->jyumyyugiwwiqomk(10)->gswweykyogmsyawy(__("\x54\x72\141\x63\x6b\151\156\x67\x20\103\x6f\x64\x65", PR__MDL__TICKET))]; if ($mamcqsuyswcogqwg) { $ikgwqyuyckaewsow[] = $ogougosiwuoqymou->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->mkiaygiogeeyogqm()->gswweykyogmsyawy(__("\105\155\x61\x69\154", PR__MDL__TICKET))->jyumyyugiwwiqomk(0); } break; } $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(Initiator::uuqoeigueqguouek . "\x66\x72\157\x6d\137\x66\151\145\154\x64\x73", $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk->ewweaossowcqywaw($ikgwqyuyckaewsow); $awiacueqaiyewgik = [Constants::oomaageiyqkaiekk => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc], Constants::omkeqqaweggwcuiq => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc], Constants::ocwsuwyiiasigqaa => $ywmkwiwkosakssii[Constants::ocwsuwyiiasigqaa]]; foreach ($awiacueqaiyewgik as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $aiowsaccomcoikus = $ogougosiwuoqymou->cwiuiiakukcsaakw($ymqmyyeuycgmigyo)->jyumyyugiwwiqomk(999); if (Constants::oomaageiyqkaiekk === $ymqmyyeuycgmigyo) { $aiowsaccomcoikus->mawcogsqogkauasq($eqgoocgaqwqcimie); } else { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } $eaoumsseceiowgsk->mkksewyosgeumwsa($aiowsaccomcoikus); } } $eaoumsseceiowgsk->wqwiougumgqousyg($ywmkwiwkosakssii[Constants::iueeekcmggceyscu]); return $eaoumsseceiowgsk; } }
