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
 * Code origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrigineTrait {

    /**
     * Code origine.
     *
     * @var string
     */
    private $codeOrigine;

    /**
     * Get the code origine.
     *
     * @return string Returns the code origine.
     */
    public function getCodeOrigine() {
        return $this->codeOrigine;
    }

    /**
     * Set the code origine.
     *
     * @param string $codeOrigine The code origine.
     */
    public function setCodeOrigine($codeOrigine) {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }
}
