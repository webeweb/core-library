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
 * Code famille frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFamilleFrnTrait {

    /**
     * Code famille frn.
     *
     * @var string
     */
    private $codeFamilleFrn;

    /**
     * Get the code famille frn.
     *
     * @return string Returns the code famille frn.
     */
    public function getCodeFamilleFrn() {
        return $this->codeFamilleFrn;
    }

    /**
     * Set the code famille frn.
     *
     * @param string $codeFamilleFrn The code famille frn.
     */
    public function setCodeFamilleFrn($codeFamilleFrn) {
        $this->codeFamilleFrn = $codeFamilleFrn;
        return $this;
    }
}
