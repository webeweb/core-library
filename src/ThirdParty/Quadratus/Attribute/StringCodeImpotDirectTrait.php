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
 * Code impot direct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeImpotDirectTrait {

    /**
     * Code impot direct.
     *
     * @var string
     */
    private $codeImpotDirect;

    /**
     * Get the code impot direct.
     *
     * @return string Returns the code impot direct.
     */
    public function getCodeImpotDirect() {
        return $this->codeImpotDirect;
    }

    /**
     * Set the code impot direct.
     *
     * @param string $codeImpotDirect The code impot direct.
     */
    public function setCodeImpotDirect($codeImpotDirect) {
        $this->codeImpotDirect = $codeImpotDirect;
        return $this;
    }
}
