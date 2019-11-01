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
 * Prix net tr4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixNetTr4Trait {

    /**
     * Prix net tr4.
     *
     * @var bool
     */
    private $prixNetTr4;

    /**
     * Get the prix net tr4.
     *
     * @return bool Returns the prix net tr4.
     */
    public function getPrixNetTr4() {
        return $this->prixNetTr4;
    }

    /**
     * Set the prix net tr4.
     *
     * @param bool $prixNetTr4 The prix net tr4.
     */
    public function setPrixNetTr4($prixNetTr4) {
        $this->prixNetTr4 = $prixNetTr4;
        return $this;
    }
}
