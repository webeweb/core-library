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
 * Frequence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFrequenceTrait {

    /**
     * Frequence.
     *
     * @var string
     */
    private $frequence;

    /**
     * Get the frequence.
     *
     * @return string Returns the frequence.
     */
    public function getFrequence() {
        return $this->frequence;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }
}
