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
 * Code extension secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeExtensionSecuTrait {

    /**
     * Code extension secu.
     *
     * @var string
     */
    private $codeExtensionSecu;

    /**
     * Get the code extension secu.
     *
     * @return string Returns the code extension secu.
     */
    public function getCodeExtensionSecu() {
        return $this->codeExtensionSecu;
    }

    /**
     * Set the code extension secu.
     *
     * @param string $codeExtensionSecu The code extension secu.
     */
    public function setCodeExtensionSecu($codeExtensionSecu) {
        $this->codeExtensionSecu = $codeExtensionSecu;
        return $this;
    }
}
