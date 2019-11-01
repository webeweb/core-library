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
 * Type travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTravailTrait {

    /**
     * Type travail.
     *
     * @var string
     */
    private $typeTravail;

    /**
     * Get the type travail.
     *
     * @return string Returns the type travail.
     */
    public function getTypeTravail() {
        return $this->typeTravail;
    }

    /**
     * Set the type travail.
     *
     * @param string $typeTravail The type travail.
     */
    public function setTypeTravail($typeTravail) {
        $this->typeTravail = $typeTravail;
        return $this;
    }
}
