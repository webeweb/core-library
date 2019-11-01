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
 * Num caisse spectacle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCaisseSpectacleTrait {

    /**
     * Num caisse spectacle.
     *
     * @var string
     */
    private $numCaisseSpectacle;

    /**
     * Get the num caisse spectacle.
     *
     * @return string Returns the num caisse spectacle.
     */
    public function getNumCaisseSpectacle() {
        return $this->numCaisseSpectacle;
    }

    /**
     * Set the num caisse spectacle.
     *
     * @param string $numCaisseSpectacle The num caisse spectacle.
     */
    public function setNumCaisseSpectacle($numCaisseSpectacle) {
        $this->numCaisseSpectacle = $numCaisseSpectacle;
        return $this;
    }
}
