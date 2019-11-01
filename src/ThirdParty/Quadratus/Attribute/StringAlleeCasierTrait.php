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
 * Allee casier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAlleeCasierTrait {

    /**
     * Allee casier.
     *
     * @var string
     */
    private $alleeCasier;

    /**
     * Get the allee casier.
     *
     * @return string Returns the allee casier.
     */
    public function getAlleeCasier() {
        return $this->alleeCasier;
    }

    /**
     * Set the allee casier.
     *
     * @param string $alleeCasier The allee casier.
     */
    public function setAlleeCasier($alleeCasier) {
        $this->alleeCasier = $alleeCasier;
        return $this;
    }
}
