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
 * Prochain num aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumAffTrait {

    /**
     * Prochain num aff.
     *
     * @var int
     */
    private $prochainNumAff;

    /**
     * Get the prochain num aff.
     *
     * @return int Returns the prochain num aff.
     */
    public function getProchainNumAff() {
        return $this->prochainNumAff;
    }

    /**
     * Set the prochain num aff.
     *
     * @param int $prochainNumAff The prochain num aff.
     */
    public function setProchainNumAff($prochainNumAff) {
        $this->prochainNumAff = $prochainNumAff;
        return $this;
    }
}
