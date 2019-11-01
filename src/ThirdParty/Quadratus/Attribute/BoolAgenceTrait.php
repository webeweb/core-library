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
 * Agence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAgenceTrait {

    /**
     * Agence.
     *
     * @var bool
     */
    private $agence;

    /**
     * Get the agence.
     *
     * @return bool Returns the agence.
     */
    public function getAgence() {
        return $this->agence;
    }

    /**
     * Set the agence.
     *
     * @param bool $agence The agence.
     */
    public function setAgence($agence) {
        $this->agence = $agence;
        return $this;
    }
}
