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
 * Type taux intemperie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTauxIntemperieTrait {

    /**
     * Type taux intemperie.
     *
     * @var string
     */
    private $typeTauxIntemperie;

    /**
     * Get the type taux intemperie.
     *
     * @return string Returns the type taux intemperie.
     */
    public function getTypeTauxIntemperie() {
        return $this->typeTauxIntemperie;
    }

    /**
     * Set the type taux intemperie.
     *
     * @param string $typeTauxIntemperie The type taux intemperie.
     */
    public function setTypeTauxIntemperie($typeTauxIntemperie) {
        $this->typeTauxIntemperie = $typeTauxIntemperie;
        return $this;
    }
}
