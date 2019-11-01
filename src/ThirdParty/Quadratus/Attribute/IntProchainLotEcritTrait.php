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
 * Prochain lot ecrit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainLotEcritTrait {

    /**
     * Prochain lot ecrit.
     *
     * @var int
     */
    private $prochainLotEcrit;

    /**
     * Get the prochain lot ecrit.
     *
     * @return int Returns the prochain lot ecrit.
     */
    public function getProchainLotEcrit() {
        return $this->prochainLotEcrit;
    }

    /**
     * Set the prochain lot ecrit.
     *
     * @param int $prochainLotEcrit The prochain lot ecrit.
     */
    public function setProchainLotEcrit($prochainLotEcrit) {
        $this->prochainLotEcrit = $prochainLotEcrit;
        return $this;
    }
}
