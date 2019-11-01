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
 * Code tva2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTva2Trait {

    /**
     * Code tva2.
     *
     * @var string
     */
    private $codeTva2;

    /**
     * Get the code tva2.
     *
     * @return string Returns the code tva2.
     */
    public function getCodeTva2() {
        return $this->codeTva2;
    }

    /**
     * Set the code tva2.
     *
     * @param string $codeTva2 The code tva2.
     */
    public function setCodeTva2($codeTva2) {
        $this->codeTva2 = $codeTva2;
        return $this;
    }
}
