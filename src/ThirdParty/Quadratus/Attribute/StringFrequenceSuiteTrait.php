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
 * Frequence suite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFrequenceSuiteTrait {

    /**
     * Frequence suite.
     *
     * @var string
     */
    private $frequenceSuite;

    /**
     * Get the frequence suite.
     *
     * @return string Returns the frequence suite.
     */
    public function getFrequenceSuite() {
        return $this->frequenceSuite;
    }

    /**
     * Set the frequence suite.
     *
     * @param string $frequenceSuite The frequence suite.
     */
    public function setFrequenceSuite($frequenceSuite) {
        $this->frequenceSuite = $frequenceSuite;
        return $this;
    }
}
