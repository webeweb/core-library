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
 * Prix net tr3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixNetTr3Trait {

    /**
     * Prix net tr3.
     *
     * @var bool
     */
    private $prixNetTr3;

    /**
     * Get the prix net tr3.
     *
     * @return bool Returns the prix net tr3.
     */
    public function getPrixNetTr3() {
        return $this->prixNetTr3;
    }

    /**
     * Set the prix net tr3.
     *
     * @param bool $prixNetTr3 The prix net tr3.
     */
    public function setPrixNetTr3($prixNetTr3) {
        $this->prixNetTr3 = $prixNetTr3;
        return $this;
    }
}
