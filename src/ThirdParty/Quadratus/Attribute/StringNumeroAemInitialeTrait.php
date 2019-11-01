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
 * Numero aem initiale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroAemInitialeTrait {

    /**
     * Numero aem initiale.
     *
     * @var string
     */
    private $numeroAemInitiale;

    /**
     * Get the numero aem initiale.
     *
     * @return string Returns the numero aem initiale.
     */
    public function getNumeroAemInitiale() {
        return $this->numeroAemInitiale;
    }

    /**
     * Set the numero aem initiale.
     *
     * @param string $numeroAemInitiale The numero aem initiale.
     */
    public function setNumeroAemInitiale($numeroAemInitiale) {
        $this->numeroAemInitiale = $numeroAemInitiale;
        return $this;
    }
}
