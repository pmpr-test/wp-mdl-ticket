<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705179f5c202             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Frontend; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Form as FromComponent; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Model\Response; use Pmpr\Module\Ticket\Moderator\Traits\ModeratorTrait; use Pmpr\Module\Ticket\Ticket as Initiator; class Form extends Common { use ModeratorTrait; public function wigskegsqequoeks() { $this->waqewsckuayqguos(Initiator::uuqoeigueqguouek . "\145\156\x71\x75\x65\x75\145\137\x66\157\x72\x6d\x5f\x61\x73\163\x65\164\x73", [$this, "\x65\x6e\161\x75\x65\165\x65"])->waqewsckuayqguos(Initiator::uuqoeigueqguouek . "\x72\x65\x6e\x64\145\x72\137\146\157\x72\x6d\137\150\x74\155\154", [$this, "\x71\x79\165\x69\x6f\141\167\x65\141\163\143\x63\x71\147\x69\x6f"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(Initiator::uuqoeigueqguouek . "\x67\145\164\137\146\157\x72\155\x5f\150\x74\155\x6c", [$this, "\x61\155\x75\x6d\x63\x69\x63\171\151\x75\163\x75\x69\161\x75\x63"], 10, 2); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\146\x72\x6f\156\164\145\156\144\x2d\x66\x6f\162\155", $eygsasmqycagyayw->get("\146\162\x6f\156\x74\145\156\144\55\x66\157\162\x6d\56\152\163"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $eygsasmqycagyayw->ieayqiyiuuguowyq("\141\x6a\x61\x78", Ajax::myikkigscysoykgy); } public function qyuioaweasccqgio(array $ywmkwiwkosakssii = []) { $this->yyoqecggyacaseko($ywmkwiwkosakssii)->render(true); } public function amumcicyiusuiquc($nsmgceoqaqogqmuw, array $ywmkwiwkosakssii = []) : string { return $this->yyoqecggyacaseko($ywmkwiwkosakssii)->render(); } public function yyoqecggyacaseko(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ Constants::gouqcwikiiygyasc => Constants::ioomakeyqiqowgmk, Constants::mgsccwumkcawaqcy => Constants::yeaekcacwwyyqigq, Constants::iueeekcmggceyscu => __("\x53\145\156\x64", PR__MDL__TICKET), Constants::ackcaikowcokggsc => [], Constants::ocwsuwyiiasigqaa => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this), ]); $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $mamcqsuyswcogqwg = !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $ccamueccusigaaio = $ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy]; $eaoumsseceiowgsk = $ogougosiwuoqymou->umocagoqumikakom($ccamueccusigaaio); $ikgwqyuyckaewsow = []; switch ($ccamueccusigaaio) { case Constants::qgeesceacsmeqacu: $ikgwqyuyckaewsow = [$ogougosiwuoqymou->uouyygwcgsmygaee(Constants::TEXT)->gswweykyogmsyawy(__("\124\x65\x78\164", PR__MDL__TICKET))->qsecygiycssgacqs(4)->jyumyyugiwwiqomk(10)]; $awiacueqaiyewgik = [Response::asywgyemkouimocw, Constants::sgsawoooocqwouiy]; foreach ($awiacueqaiyewgik as $oaeueygsawaagyyk) { if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, $oaeueygsawaagyyk))) { goto esuiysskoweawsue; } $ikgwqyuyckaewsow[] = $ogougosiwuoqymou->cwiuiiakukcsaakw($oaeueygsawaagyyk)->iygyugseyaqwywyg($eqgoocgaqwqcimie); esuiysskoweawsue: uqqaiagaeqgqgaiy: } uguigkcmukuouway: goto usquiuuyiyqaeyiu; case Constants::yeaekcacwwyyqigq: if ($this->xowuwmoiekgcwiaq()->wqmkwyeuqimyiiaw()->kskgqoywkoawosao($uamcoiueqaamsqma)) { goto aegysmeecgcgayyw; } return $ogougosiwuoqymou->yqgagqgesqyuyuqq()->oguessuismosauuu($ogougosiwuoqymou->oockkqiqsssakuug($uamcoiueqaamsqma)); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $ikgwqyuyckaewsow = [$ogougosiwuoqymou->uouyygwcgsmygaee(Constants::TEXT)->gswweykyogmsyawy(__("\124\145\x78\x74", PR__MDL__TICKET))->qsecygiycssgacqs(4)->jyumyyugiwwiqomk(10)]; if (!$mamcqsuyswcogqwg) { goto gaomwagkcciesyqy; } $ikgwqyuyckaewsow[] = $ogougosiwuoqymou->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->mkiaygiogeeyogqm()->gswweykyogmsyawy(__("\x45\155\141\151\x6c", PR__MDL__TICKET))->jyumyyugiwwiqomk(0); gaomwagkcciesyqy: suqkuqygkkgwyaie: goto usquiuuyiyqaeyiu; case Constants::skgwuociausakiqe: $ikgwqyuyckaewsow = [$ogougosiwuoqymou->ymuegqgyuagyucws(Constants::vswoiouoaykswgym)->kqqqugemmqagucuq()->jyumyyugiwwiqomk(10)->gswweykyogmsyawy(__("\x54\x72\x61\x63\x6b\151\x6e\x67\40\103\157\144\145", PR__MDL__TICKET))]; if (!$mamcqsuyswcogqwg) { goto soaccwqimeksgwiw; } $ikgwqyuyckaewsow[] = $ogougosiwuoqymou->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->mkiaygiogeeyogqm()->gswweykyogmsyawy(__("\x45\155\141\151\154", PR__MDL__TICKET))->jyumyyugiwwiqomk(0); soaccwqimeksgwiw: goto usquiuuyiyqaeyiu; } qicwaskssogcokgm: usquiuuyiyqaeyiu: $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(Initiator::uuqoeigueqguouek . "\146\162\157\x6d\137\146\151\145\154\144\163", $ikgwqyuyckaewsow, $ywmkwiwkosakssii); $eaoumsseceiowgsk->ewweaossowcqywaw($ikgwqyuyckaewsow); $awiacueqaiyewgik = [Constants::oomaageiyqkaiekk => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc], Constants::omkeqqaweggwcuiq => $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc], Constants::ocwsuwyiiasigqaa => $ywmkwiwkosakssii[Constants::ocwsuwyiiasigqaa]]; foreach ($awiacueqaiyewgik as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!$eqgoocgaqwqcimie) { goto giaacoqqqsekcayy; } $aiowsaccomcoikus = $ogougosiwuoqymou->cwiuiiakukcsaakw($ymqmyyeuycgmigyo)->jyumyyugiwwiqomk(999); if (Constants::oomaageiyqkaiekk === $ymqmyyeuycgmigyo) { goto cgiscsqwwgqqaeqi; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $aiowsaccomcoikus->mawcogsqogkauasq($eqgoocgaqwqcimie); syiqkaasoueowwui: $eaoumsseceiowgsk->mkksewyosgeumwsa($aiowsaccomcoikus); giaacoqqqsekcayy: skkamseieeusycye: } wiysogeqqwgioyka: $eaoumsseceiowgsk->wqwiougumgqousyg($ywmkwiwkosakssii[Constants::iueeekcmggceyscu]); return $eaoumsseceiowgsk; } }
