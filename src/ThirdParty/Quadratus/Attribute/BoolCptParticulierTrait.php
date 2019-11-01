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
 * Cpt particulier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCptParticulierTrait {

    /**
     * Cpt particulier.
     *
     * @var bool
     */
    private $cptParticulier;

    /**
     * Get the cpt particulier.
     *
     * @return bool Returns the cpt particulier.
     */
    public function getCptParticulier() {
        return $this->cptParticulier;
    }

    /**
     * Set the cpt particulier.
     *
     * @param bool $cptParticulier The cpt particulier.
     */
    public function setCptParticulier($cptParticulier) {
        $this->cptParticulier = $cptParticulier;
        return $this;
    }
}
