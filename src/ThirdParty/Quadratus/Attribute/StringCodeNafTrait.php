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
 * Code naf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNafTrait {

    /**
     * Code naf.
     *
     * @var string
     */
    private $codeNaf;

    /**
     * Get the code naf.
     *
     * @return string Returns the code naf.
     */
    public function getCodeNaf() {
        return $this->codeNaf;
    }

    /**
     * Set the code naf.
     *
     * @param string $codeNaf The code naf.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }
}
