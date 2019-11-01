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
 * Imput epargne ret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImputEpargneRetTrait {

    /**
     * Imput epargne ret.
     *
     * @var bool
     */
    private $imputEpargneRet;

    /**
     * Get the imput epargne ret.
     *
     * @return bool Returns the imput epargne ret.
     */
    public function getImputEpargneRet() {
        return $this->imputEpargneRet;
    }

    /**
     * Set the imput epargne ret.
     *
     * @param bool $imputEpargneRet The imput epargne ret.
     */
    public function setImputEpargneRet($imputEpargneRet) {
        $this->imputEpargneRet = $imputEpargneRet;
        return $this;
    }
}
