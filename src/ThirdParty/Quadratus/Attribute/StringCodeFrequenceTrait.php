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
 * Code frequence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFrequenceTrait {

    /**
     * Code frequence.
     *
     * @var string
     */
    private $codeFrequence;

    /**
     * Get the code frequence.
     *
     * @return string Returns the code frequence.
     */
    public function getCodeFrequence() {
        return $this->codeFrequence;
    }

    /**
     * Set the code frequence.
     *
     * @param string $codeFrequence The code frequence.
     */
    public function setCodeFrequence($codeFrequence) {
        $this->codeFrequence = $codeFrequence;
        return $this;
    }
}
