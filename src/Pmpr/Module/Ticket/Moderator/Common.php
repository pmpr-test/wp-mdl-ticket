<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8a978e6e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Module\Ticket\Setting; abstract class Common { use HelperTrait, SettingTrait, WrapperTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); } public abstract function awkoiwkuqamgaiku(); public abstract function kskgqoywkoawosao(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null) : bool; public abstract function ggwyugcggywuwcse(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null, $mksyucucyswaukig = null) : bool; public abstract function amimkmoyyqiysugw($mksyucucyswaukig) : bool; public function gwgquisewwigiccc() : bool { $kkyowocuyokioeqy = false; if ($this->mamcqsuyswcogqwg()) { goto mkwskuycuyguqqok; } $mqamowqmoasqycgc = (array) $this->weysguygiseoukqw(Setting::iuieaumekoeiaqoy, []); if (!$mqamowqmoasqycgc) { goto cuykwgmswkskqkyi; } foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto csscmcacoikwsecs; } $kkyowocuyokioeqy = true; goto myoicgcuugciueis; csscmcacoikwsecs: asmecuqiyyswueqe: } myoicgcuugciueis: goto kuicqywysciceggs; cuykwgmswkskqkyi: $kkyowocuyokioeqy = true; kuicqywysciceggs: mkwskuycuyguqqok: return $kkyowocuyokioeqy; } public function mamcqsuyswcogqwg() : bool { return !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function skyukysqukkqauaa() : bool { $skyukysqukkqauaa = false; if ($this->mamcqsuyswcogqwg()) { goto yowsmsiyimmimemc; } $sgsoauswowssimyk = (array) $this->weysguygiseoukqw(Setting::qkimicaweacyckyg, []); foreach ($sgsoauswowssimyk as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto kwagwqyusyiyoaqs; } $skyukysqukkqauaa = true; goto sciwggaeogcoesiu; kwagwqyusyiyoaqs: eqkauqciwewmgeoi: } sciwggaeogcoesiu: yowsmsiyimmimemc: return $skyukysqukkqauaa; } public function imgymusqgccqsqqq($oicysemckysmigee) : ?object { $mksyucucyswaukig = null; if (is_numeric($oicysemckysmigee)) { goto iomcaiwewsawiamu; } if (is_object($oicysemckysmigee)) { goto sqiciiuwmykocycc; } goto kiqogmwcgcamwiig; iomcaiwewsawiamu: $mksyucucyswaukig = $this->awkoiwkuqamgaiku()->akkkoiiymmamsauc($oicysemckysmigee); goto kiqogmwcgcamwiig; sqiciiuwmykocycc: $mksyucucyswaukig = $oicysemckysmigee; kiqogmwcgcamwiig: return $mksyucucyswaukig; } }
