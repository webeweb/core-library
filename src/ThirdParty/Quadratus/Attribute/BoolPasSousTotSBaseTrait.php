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
 * Pas sous tot s base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasSousTotSBaseTrait {

    /**
     * Pas sous tot s base.
     *
     * @var bool
     */
    private $pasSousTotSBase;

    /**
     * Get the pas sous tot s base.
     *
     * @return bool Returns the pas sous tot s base.
     */
    public function getPasSousTotSBase() {
        return $this->pasSousTotSBase;
    }

    /**
     * Set the pas sous tot s base.
     *
     * @param bool $pasSousTotSBase The pas sous tot s base.
     */
    public function setPasSousTotSBase($pasSousTotSBase) {
        $this->pasSousTotSBase = $pasSousTotSBase;
        return $this;
    }
}
