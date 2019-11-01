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
 * Code lib brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibBrutTrait {

    /**
     * Code lib brut.
     *
     * @var string
     */
    private $codeLibBrut;

    /**
     * Get the code lib brut.
     *
     * @return string Returns the code lib brut.
     */
    public function getCodeLibBrut() {
        return $this->codeLibBrut;
    }

    /**
     * Set the code lib brut.
     *
     * @param string $codeLibBrut The code lib brut.
     */
    public function setCodeLibBrut($codeLibBrut) {
        $this->codeLibBrut = $codeLibBrut;
        return $this;
    }
}
