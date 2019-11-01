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
 * Cpt accompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCptAccompteTrait {

    /**
     * Cpt accompte.
     *
     * @var int
     */
    private $cptAccompte;

    /**
     * Get the cpt accompte.
     *
     * @return int Returns the cpt accompte.
     */
    public function getCptAccompte() {
        return $this->cptAccompte;
    }

    /**
     * Set the cpt accompte.
     *
     * @param int $cptAccompte The cpt accompte.
     */
    public function setCptAccompte($cptAccompte) {
        $this->cptAccompte = $cptAccompte;
        return $this;
    }
}
