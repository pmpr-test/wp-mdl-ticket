<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4310c2c816             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Module\Ticket\Setting; abstract class Common { use HelperTrait, SettingTrait, WrapperTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); } public abstract function awkoiwkuqamgaiku(); public abstract function kskgqoywkoawosao(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null) : bool; public abstract function ggwyugcggywuwcse(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null, $mksyucucyswaukig = null) : bool; public abstract function amimkmoyyqiysugw($mksyucucyswaukig) : bool; public function gwgquisewwigiccc() : bool { $kkyowocuyokioeqy = false; if ($this->mamcqsuyswcogqwg()) { goto ueigkucgaucgeimc; } $mqamowqmoasqycgc = (array) $this->weysguygiseoukqw(Setting::iuieaumekoeiaqoy, []); if (!$mqamowqmoasqycgc) { goto wgewmqieuamsoayy; } foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto ugqaaewwmkocwwgy; } $kkyowocuyokioeqy = true; goto igooksugieceoege; ugqaaewwmkocwwgy: omqiayeucoioqoao: } igooksugieceoege: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $kkyowocuyokioeqy = true; kqgcyoscsusgoaqi: ueigkucgaucgeimc: return $kkyowocuyokioeqy; } public function mamcqsuyswcogqwg() : bool { return !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); } public function skyukysqukkqauaa() : bool { $skyukysqukkqauaa = false; if ($this->mamcqsuyswcogqwg()) { goto qmuwoecuacmkwgem; } $sgsoauswowssimyk = (array) $this->weysguygiseoukqw(Setting::qkimicaweacyckyg, []); foreach ($sgsoauswowssimyk as $oeucsuyqysaciasy) { if (!$this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg($oeucsuyqysaciasy)) { goto wakmayaoqoskekqy; } $skyukysqukkqauaa = true; goto sggawugoykqcmsug; wakmayaoqoskekqy: wkeuuycukmuqiaom: } sggawugoykqcmsug: qmuwoecuacmkwgem: return $skyukysqukkqauaa; } public function imgymusqgccqsqqq($oicysemckysmigee) : ?object { $mksyucucyswaukig = null; if (is_numeric($oicysemckysmigee)) { goto mwsmsguqqkcwiiuk; } if (is_object($oicysemckysmigee)) { goto eeauyscekuckoues; } goto owmuceyswmgueasi; mwsmsguqqkcwiiuk: $mksyucucyswaukig = $this->awkoiwkuqamgaiku()->akkkoiiymmamsauc($oicysemckysmigee); goto owmuceyswmgueasi; eeauyscekuckoues: $mksyucucyswaukig = $oicysemckysmigee; owmuceyswmgueasi: return $mksyucucyswaukig; } }
