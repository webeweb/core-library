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
 * Saisie propriete mess trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntSaisieProprieteMessTrait {

    /**
     * Saisie propriete mess.
     *
     * @var int
     */
    private $saisieProprieteMess;

    /**
     * Get the saisie propriete mess.
     *
     * @return int Returns the saisie propriete mess.
     */
    public function getSaisieProprieteMess() {
        return $this->saisieProprieteMess;
    }

    /**
     * Set the saisie propriete mess.
     *
     * @param int $saisieProprieteMess The saisie propriete mess.
     */
    public function setSaisieProprieteMess($saisieProprieteMess) {
        $this->saisieProprieteMess = $saisieProprieteMess;
        return $this;
    }
}
