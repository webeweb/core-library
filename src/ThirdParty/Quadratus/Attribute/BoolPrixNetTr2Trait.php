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
 * Prix net tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixNetTr2Trait {

    /**
     * Prix net tr2.
     *
     * @var bool
     */
    private $prixNetTr2;

    /**
     * Get the prix net tr2.
     *
     * @return bool Returns the prix net tr2.
     */
    public function getPrixNetTr2() {
        return $this->prixNetTr2;
    }

    /**
     * Set the prix net tr2.
     *
     * @param bool $prixNetTr2 The prix net tr2.
     */
    public function setPrixNetTr2($prixNetTr2) {
        $this->prixNetTr2 = $prixNetTr2;
        return $this;
    }
}
