<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0b812328             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Backend\Backend; use Pmpr\Module\Ticket\Frontend\Frontend; use Pmpr\Module\Ticket\Model\ElectedResponse; use Pmpr\Module\Ticket\Model\Ticket as TicketModel; use Pmpr\Module\Ticket\Model\Response; use Pmpr\Module\Ticket\Panel\Panel; use Pmpr\Module\Ticket\REST\REST; class Ticket extends ComponentInitiator { const uuqoeigueqguouek = Constants::yeaekcacwwyyqigq . Constants::wassgkgmoyygyaya; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x54\151\143\153\145\x74", PR__MDL__TICKET); }, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { TicketModel::symcgieuakksimmu(); Response::symcgieuakksimmu(); ElectedResponse::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->gimisysaiasieees()) { REST::symcgieuakksimmu(); } Backend::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x70\141\156\x65\x6c") && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->gimisysaiasieees()) { Panel::symcgieuakksimmu(); } } }
