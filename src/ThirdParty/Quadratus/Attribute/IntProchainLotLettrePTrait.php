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
 * Prochain lot lettre p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainLotLettrePTrait {

    /**
     * Prochain lot lettre p.
     *
     * @var int
     */
    private $prochainLotLettreP;

    /**
     * Get the prochain lot lettre p.
     *
     * @return int Returns the prochain lot lettre p.
     */
    public function getProchainLotLettreP() {
        return $this->prochainLotLettreP;
    }

    /**
     * Set the prochain lot lettre p.
     *
     * @param int $prochainLotLettreP The prochain lot lettre p.
     */
    public function setProchainLotLettreP($prochainLotLettreP) {
        $this->prochainLotLettreP = $prochainLotLettreP;
        return $this;
    }
}
