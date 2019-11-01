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
 * Code etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEtebacTrait {

    /**
     * Code etebac.
     *
     * @var string
     */
    private $codeEtebac;

    /**
     * Get the code etebac.
     *
     * @return string Returns the code etebac.
     */
    public function getCodeEtebac() {
        return $this->codeEtebac;
    }

    /**
     * Set the code etebac.
     *
     * @param string $codeEtebac The code etebac.
     */
    public function setCodeEtebac($codeEtebac) {
        $this->codeEtebac = $codeEtebac;
        return $this;
    }
}
