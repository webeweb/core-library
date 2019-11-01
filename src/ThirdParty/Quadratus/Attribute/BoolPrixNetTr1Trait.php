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
 * Prix net tr1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixNetTr1Trait {

    /**
     * Prix net tr1.
     *
     * @var bool
     */
    private $prixNetTr1;

    /**
     * Get the prix net tr1.
     *
     * @return bool Returns the prix net tr1.
     */
    public function getPrixNetTr1() {
        return $this->prixNetTr1;
    }

    /**
     * Set the prix net tr1.
     *
     * @param bool $prixNetTr1 The prix net tr1.
     */
    public function setPrixNetTr1($prixNetTr1) {
        $this->prixNetTr1 = $prixNetTr1;
        return $this;
    }
}
