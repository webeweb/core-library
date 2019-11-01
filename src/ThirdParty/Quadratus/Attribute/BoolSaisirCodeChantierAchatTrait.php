<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Saisir code chantier achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisirCodeChantierAchatTrait {

    /**
     * Saisir code chantier achat.
     *
     * @var bool
     */
    private $saisirCodeChantierAchat;

    /**
     * Get the saisir code chantier achat.
     *
     * @return bool Returns the saisir code chantier achat.
     */
    public function getSaisirCodeChantierAchat() {
        return $this->saisirCodeChantierAchat;
    }

    /**
     * Set the saisir code chantier achat.
     *
     * @param bool $saisirCodeChantierAchat The saisir code chantier achat.
     */
    public function setSaisirCodeChantierAchat($saisirCodeChantierAchat) {
        $this->saisirCodeChantierAchat = $saisirCodeChantierAchat;
        return $this;
    }
}
