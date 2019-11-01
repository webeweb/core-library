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
 * Prochain lot traite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainLotTraiteTrait {

    /**
     * Prochain lot traite.
     *
     * @var int
     */
    private $prochainLotTraite;

    /**
     * Get the prochain lot traite.
     *
     * @return int Returns the prochain lot traite.
     */
    public function getProchainLotTraite() {
        return $this->prochainLotTraite;
    }

    /**
     * Set the prochain lot traite.
     *
     * @param int $prochainLotTraite The prochain lot traite.
     */
    public function setProchainLotTraite($prochainLotTraite) {
        $this->prochainLotTraite = $prochainLotTraite;
        return $this;
    }
}
