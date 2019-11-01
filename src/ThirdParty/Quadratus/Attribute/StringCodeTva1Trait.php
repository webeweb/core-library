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
 * Code tva1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTva1Trait {

    /**
     * Code tva1.
     *
     * @var string
     */
    private $codeTva1;

    /**
     * Get the code tva1.
     *
     * @return string Returns the code tva1.
     */
    public function getCodeTva1() {
        return $this->codeTva1;
    }

    /**
     * Set the code tva1.
     *
     * @param string $codeTva1 The code tva1.
     */
    public function setCodeTva1($codeTva1) {
        $this->codeTva1 = $codeTva1;
        return $this;
    }
}
