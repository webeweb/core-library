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
 * Mois cloture cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisClotureCpTrait {

    /**
     * Mois cloture cp.
     *
     * @var string
     */
    private $moisClotureCp;

    /**
     * Get the mois cloture cp.
     *
     * @return string Returns the mois cloture cp.
     */
    public function getMoisClotureCp() {
        return $this->moisClotureCp;
    }

    /**
     * Set the mois cloture cp.
     *
     * @param string $moisClotureCp The mois cloture cp.
     */
    public function setMoisClotureCp($moisClotureCp) {
        $this->moisClotureCp = $moisClotureCp;
        return $this;
    }
}
