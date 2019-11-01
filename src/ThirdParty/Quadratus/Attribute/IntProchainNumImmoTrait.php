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
 * Prochain num immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumImmoTrait {

    /**
     * Prochain num immo.
     *
     * @var int
     */
    private $prochainNumImmo;

    /**
     * Get the prochain num immo.
     *
     * @return int Returns the prochain num immo.
     */
    public function getProchainNumImmo() {
        return $this->prochainNumImmo;
    }

    /**
     * Set the prochain num immo.
     *
     * @param int $prochainNumImmo The prochain num immo.
     */
    public function setProchainNumImmo($prochainNumImmo) {
        $this->prochainNumImmo = $prochainNumImmo;
        return $this;
    }
}
