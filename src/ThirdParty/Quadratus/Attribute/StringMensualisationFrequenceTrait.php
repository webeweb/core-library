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
 * Mensualisation frequence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMensualisationFrequenceTrait {

    /**
     * Mensualisation frequence.
     *
     * @var string
     */
    private $mensualisationFrequence;

    /**
     * Get the mensualisation frequence.
     *
     * @return string Returns the mensualisation frequence.
     */
    public function getMensualisationFrequence() {
        return $this->mensualisationFrequence;
    }

    /**
     * Set the mensualisation frequence.
     *
     * @param string $mensualisationFrequence The mensualisation frequence.
     */
    public function setMensualisationFrequence($mensualisationFrequence) {
        $this->mensualisationFrequence = $mensualisationFrequence;
        return $this;
    }
}
