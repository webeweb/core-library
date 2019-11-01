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
 * Code popul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePopulTrait {

    /**
     * Code popul.
     *
     * @var string
     */
    private $codePopul;

    /**
     * Get the code popul.
     *
     * @return string Returns the code popul.
     */
    public function getCodePopul() {
        return $this->codePopul;
    }

    /**
     * Set the code popul.
     *
     * @param string $codePopul The code popul.
     */
    public function setCodePopul($codePopul) {
        $this->codePopul = $codePopul;
        return $this;
    }
}
