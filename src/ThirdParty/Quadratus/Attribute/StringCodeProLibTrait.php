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
 * Code pro lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeProLibTrait {

    /**
     * Code pro lib.
     *
     * @var string
     */
    private $codeProLib;

    /**
     * Get the code pro lib.
     *
     * @return string Returns the code pro lib.
     */
    public function getCodeProLib() {
        return $this->codeProLib;
    }

    /**
     * Set the code pro lib.
     *
     * @param string $codeProLib The code pro lib.
     */
    public function setCodeProLib($codeProLib) {
        $this->codeProLib = $codeProLib;
        return $this;
    }
}
