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
 * Prix net tr5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixNetTr5Trait {

    /**
     * Prix net tr5.
     *
     * @var bool
     */
    private $prixNetTr5;

    /**
     * Get the prix net tr5.
     *
     * @return bool Returns the prix net tr5.
     */
    public function getPrixNetTr5() {
        return $this->prixNetTr5;
    }

    /**
     * Set the prix net tr5.
     *
     * @param bool $prixNetTr5 The prix net tr5.
     */
    public function setPrixNetTr5($prixNetTr5) {
        $this->prixNetTr5 = $prixNetTr5;
        return $this;
    }
}
