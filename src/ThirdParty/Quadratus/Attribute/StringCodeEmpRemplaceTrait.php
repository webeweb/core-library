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
 * Code emp remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEmpRemplaceTrait {

    /**
     * Code emp remplace.
     *
     * @var string
     */
    private $codeEmpRemplace;

    /**
     * Get the code emp remplace.
     *
     * @return string Returns the code emp remplace.
     */
    public function getCodeEmpRemplace() {
        return $this->codeEmpRemplace;
    }

    /**
     * Set the code emp remplace.
     *
     * @param string $codeEmpRemplace The code emp remplace.
     */
    public function setCodeEmpRemplace($codeEmpRemplace) {
        $this->codeEmpRemplace = $codeEmpRemplace;
        return $this;
    }
}
