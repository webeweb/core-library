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
 * Mois cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisClotureTrait {

    /**
     * Mois cloture.
     *
     * @var string
     */
    private $moisCloture;

    /**
     * Get the mois cloture.
     *
     * @return string Returns the mois cloture.
     */
    public function getMoisCloture() {
        return $this->moisCloture;
    }

    /**
     * Set the mois cloture.
     *
     * @param string $moisCloture The mois cloture.
     */
    public function setMoisCloture($moisCloture) {
        $this->moisCloture = $moisCloture;
        return $this;
    }
}
