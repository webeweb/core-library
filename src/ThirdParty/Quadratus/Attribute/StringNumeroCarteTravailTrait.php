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
 * Numero carte travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCarteTravailTrait {

    /**
     * Numero carte travail.
     *
     * @var string
     */
    private $numeroCarteTravail;

    /**
     * Get the numero carte travail.
     *
     * @return string Returns the numero carte travail.
     */
    public function getNumeroCarteTravail() {
        return $this->numeroCarteTravail;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string $numeroCarteTravail The numero carte travail.
     */
    public function setNumeroCarteTravail($numeroCarteTravail) {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }
}
