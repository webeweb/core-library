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
 * Code type brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBrutTrait {

    /**
     * Code type brut.
     *
     * @var string
     */
    private $codeTypeBrut;

    /**
     * Get the code type brut.
     *
     * @return string Returns the code type brut.
     */
    public function getCodeTypeBrut() {
        return $this->codeTypeBrut;
    }

    /**
     * Set the code type brut.
     *
     * @param string $codeTypeBrut The code type brut.
     */
    public function setCodeTypeBrut($codeTypeBrut) {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }
}
