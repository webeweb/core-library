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
 * Jour debut transfert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntJourDebutTransfertTrait {

    /**
     * Jour debut transfert.
     *
     * @var int
     */
    private $jourDebutTransfert;

    /**
     * Get the jour debut transfert.
     *
     * @return int Returns the jour debut transfert.
     */
    public function getJourDebutTransfert() {
        return $this->jourDebutTransfert;
    }

    /**
     * Set the jour debut transfert.
     *
     * @param int $jourDebutTransfert The jour debut transfert.
     */
    public function setJourDebutTransfert($jourDebutTransfert) {
        $this->jourDebutTransfert = $jourDebutTransfert;
        return $this;
    }
}
