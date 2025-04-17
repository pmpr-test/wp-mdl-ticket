<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106a879f76             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Moderator; use Pmpr\Module\Ticket\Model\Ticket as Model; use Pmpr\Module\Ticket\Setting; use WP_User; class Ticket extends Common { public function kskgqoywkoawosao(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null) : bool { $yciaosuiyeieceug = true; $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mkucggyaiaukqoce); if (!$mkucggyaiaukqoce) { if (!$this->weysguygiseoukqw(Setting::gkogygosguymmeig)) { $uamcoiueqaamsqma = sprintf(__('Currently, the ability to send new tickets to visitors is disabled, please %s in first.', PR__MDL__TICKET), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Login', PR__MDL__TICKET), $this->caokeucsksukesyo()->issssuygyewuaswa()->gesoiqwieuaqaaqw())); $yciaosuiyeieceug = false; } } else { } return $yciaosuiyeieceug; } public function ggwyugcggywuwcse(&$uamcoiueqaamsqma, $mkucggyaiaukqoce = null, $mksyucucyswaukig = null) : bool { } public function amimkmoyyqiysugw($mksyucucyswaukig) : bool { } public function awkoiwkuqamgaiku() : Model { return Model::symcgieuakksimmu(); } }
