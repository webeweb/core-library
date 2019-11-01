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
 * Code prime tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeTpTrait {

    /**
     * Code prime tp.
     *
     * @var string
     */
    private $codePrimeTp;

    /**
     * Get the code prime tp.
     *
     * @return string Returns the code prime tp.
     */
    public function getCodePrimeTp() {
        return $this->codePrimeTp;
    }

    /**
     * Set the code prime tp.
     *
     * @param string $codePrimeTp The code prime tp.
     */
    public function setCodePrimeTp($codePrimeTp) {
        $this->codePrimeTp = $codePrimeTp;
        return $this;
    }
}
