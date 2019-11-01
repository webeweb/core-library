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
 * Code remplacant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRemplacantTrait {

    /**
     * Code remplacant.
     *
     * @var string
     */
    private $codeRemplacant;

    /**
     * Get the code remplacant.
     *
     * @return string Returns the code remplacant.
     */
    public function getCodeRemplacant() {
        return $this->codeRemplacant;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }
}
