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
 * Prix achat bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixAchatBtTrait {

    /**
     * Prix achat bt.
     *
     * @var float
     */
    private $prixAchatBt;

    /**
     * Get the prix achat bt.
     *
     * @return float Returns the prix achat bt.
     */
    public function getPrixAchatBt() {
        return $this->prixAchatBt;
    }

    /**
     * Set the prix achat bt.
     *
     * @param float $prixAchatBt The prix achat bt.
     */
    public function setPrixAchatBt($prixAchatBt) {
        $this->prixAchatBt = $prixAchatBt;
        return $this;
    }
}
