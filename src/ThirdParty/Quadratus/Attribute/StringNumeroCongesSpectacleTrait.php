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
 * Numero conges spectacle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCongesSpectacleTrait {

    /**
     * Numero conges spectacle.
     *
     * @var string
     */
    private $numeroCongesSpectacle;

    /**
     * Get the numero conges spectacle.
     *
     * @return string Returns the numero conges spectacle.
     */
    public function getNumeroCongesSpectacle() {
        return $this->numeroCongesSpectacle;
    }

    /**
     * Set the numero conges spectacle.
     *
     * @param string $numeroCongesSpectacle The numero conges spectacle.
     */
    public function setNumeroCongesSpectacle($numeroCongesSpectacle) {
        $this->numeroCongesSpectacle = $numeroCongesSpectacle;
        return $this;
    }
}
