<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b724cc9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Ticket\Model\Request; use Pmpr\Module\Ticket\Model\Respond; use Pmpr\Module\Ticket\Model\Response; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Setting; use Pmpr\Module\Ticket\Ticket as Initiator; trait SubmissionTrait { public final function qismogqiwywsucie(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $sogksuscggsicmac = false; if (isset($icwicymcioeyeyek[Constants::TEXT]) && $icwicymcioeyeyek[Constants::TEXT]) { if (!isset($icwicymcioeyeyek[Ticket::miwkyequoaigisoa])) { $qymookwyyeasqocu = Response::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT]]); if (!is_wp_error($qymookwyyeasqocu)) { $icwicymcioeyeyek[Ticket::miwkyequoaigisoa] = $qymookwyyeasqocu[Constants::gouqcwikiiygyasc]; } else { $uamcoiueqaamsqma = __("\x43\141\156\40\156\157\164\40\x63\x72\x65\141\x74\145\40\x72\x65\x73\x70\157\156\163\145\x2c\40\x70\154\145\x61\x73\145\40\162\x65\x70\x6f\x72\164\x20\164\x68\151\163\x20\x69\x73\163\165\145\56", PR__MDL__TICKET); } } if (isset($icwicymcioeyeyek[Ticket::miwkyequoaigisoa])) { $sogksuscggsicmac = Respond::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ckmsuwamgymouaeu => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(), Respond::asywgyemkouimocw => $icwicymcioeyeyek[Respond::asywgyemkouimocw], Ticket::miwkyequoaigisoa => $icwicymcioeyeyek[Ticket::miwkyequoaigisoa]]); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = false; $uamcoiueqaamsqma = __("\103\x61\x6e\x20\x6e\157\164\40\143\x72\x65\141\x74\x65\x20\162\x65\163\160\x6f\156\x64\54\x20\160\x6c\x65\141\x73\x65\x20\162\145\x70\x6f\x72\164\40\164\150\151\163\40\x69\163\x73\165\x65\56", PR__MDL__TICKET); } else { $this->ewcsyqaaigkicgse(Initiator::uuqoeigueqguouek . "\x72\x65\x73\x70\157\x6e\x64\x5f\163\x75\x62\155\151\164\x74\145\x64\137\163\x75\143\143\x65\163\163\x66\165\x6c\x6c\171", $sogksuscggsicmac, $icwicymcioeyeyek); } } } return $sogksuscggsicmac; } public final function nsswikmyaucycmcw(&$uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], bool $gioggcykgoikcwiy = true, bool $cwwowqyuwccuykom = false) { $sogksuscggsicmac = false; if (isset($icwicymcioeyeyek[Constants::TEXT], $icwicymcioeyeyek[Request::asywgyemkouimocw])) { $kskgqoywkoawosao = true; if ($gioggcykgoikcwiy) { if (isset($icwicymcioeyeyek[Constants::sgsawoooocqwouiy])) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $kqowykcomaagagow = $mmqcgecamywacuwe->iekyeyicoyyawomk()->qccooyeomgokwsma(Constants::sgsawoooocqwouiy, $icwicymcioeyeyek[Constants::sgsawoooocqwouiy]); $kskgqoywkoawosao = $icwicymcioeyeyek[Request::asywgyemkouimocw] == $mmqcgecamywacuwe->mwyqswsaeeewsosm($kqowykcomaagagow); } else { $kskgqoywkoawosao = false; $uamcoiueqaamsqma = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } if ($kskgqoywkoawosao) { $sogksuscggsicmac = Request::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($this->ocksiywmkyaqseou(Initiator::uuqoeigueqguouek . "\x72\145\x71\165\145\163\x74\137\x73\165\x62\x6d\x69\x73\163\151\x6f\x6e\137\x64\141\x74\141", $icwicymcioeyeyek), $cwwowqyuwccuykom); if (!$sogksuscggsicmac[Constants::ckcawaoawwioqecq] || !$sogksuscggsicmac[Constants::gouqcwikiiygyasc]) { $uamcoiueqaamsqma = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; $sogksuscggsicmac = false; } } else { if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = __("\103\x61\156\40\x6e\x6f\x74\40\x73\x75\142\x6d\x69\164\40\x79\x6f\165\162\x20\x72\x65\x71\x75\x65\x73\x74\x2c\x20\x70\x6c\x65\141\163\145\x20\x72\145\146\162\x65\163\x68\x20\160\x61\147\145\40\141\x6e\144\x20\x74\162\x79\40\141\x67\141\x69\156\56", PR__MDL__TICKET); } } } else { $uamcoiueqaamsqma = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } public final function gkwywsooooucwuiy(&$uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], bool $cwwowqyuwccuykom = false) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $icwicymcioeyeyek[Constants::sgsawoooocqwouiy] = strtolower($yyauwyaeewsickwk->uniqid()); $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $sogksuscggsicmac = $mmqcgecamywacuwe->gssiscqyqsacmeca()->gsegsiocqmsoayii($this->ocksiywmkyaqseou(Initiator::uuqoeigueqguouek . "\164\x69\x63\153\x65\164\137\x73\165\142\x6d\151\163\163\151\157\x6e\137\144\x61\x74\141", $icwicymcioeyeyek), $cwwowqyuwccuykom); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq] && $sogksuscggsicmac[Constants::gouqcwikiiygyasc]) { $kmekouwmygismoku = $sogksuscggsicmac[Constants::gouqcwikiiygyasc]; $icwicymcioeyeyek[Request::asywgyemkouimocw] = $kmekouwmygismoku; if ($aqmwamyiwgeeymqa = $this->nsswikmyaucycmcw($uamcoiueqaamsqma, $icwicymcioeyeyek, false, $cwwowqyuwccuykom)) { $sogksuscggsicmac[Constants::qgeesceacsmeqacu] = $aqmwamyiwgeeymqa; } else { $sogksuscggsicmac = false; $mmqcgecamywacuwe->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($kmekouwmygismoku); } } else { $uamcoiueqaamsqma = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; $sogksuscggsicmac = false; } if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = $yyauwyaeewsickwk->qquwggyuqouqumam(Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::cisgcggusgaawook, __("\131\157\x75\x72\x20\162\x65\161\165\145\163\164\40\x73\x75\142\x6d\151\164\x74\145\x64\x20\x73\x75\x63\143\x65\x73\163\146\165\x6c\x6c\x79\x2e", PR__MDL__TICKET)), [Constants::sgsawoooocqwouiy => strtoupper($icwicymcioeyeyek[Constants::sgsawoooocqwouiy])]); } return $sogksuscggsicmac; } }
