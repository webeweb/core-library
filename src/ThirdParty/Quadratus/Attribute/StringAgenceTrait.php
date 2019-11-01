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
trait StringAgenceTrait {

    /**
     * Agence.
     *
     * @var string
     */
    private $agence;

    /**
     * Get the agence.
     *
     * @return string Returns the agence.
     */
    public function getAgence() {
        return $this->agence;
    }

    /**
     * Set the agence.
     *
     * @param string $agence The agence.
     */
    public function setAgence($agence) {
        $this->agence = $agence;
        return $this;
    }
}
