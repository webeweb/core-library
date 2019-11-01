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
 * Reduction fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReductionFillonTrait {

    /**
     * Reduction fillon.
     *
     * @var bool
     */
    private $reductionFillon;

    /**
     * Get the reduction fillon.
     *
     * @return bool Returns the reduction fillon.
     */
    public function getReductionFillon() {
        return $this->reductionFillon;
    }

    /**
     * Set the reduction fillon.
     *
     * @param bool $reductionFillon The reduction fillon.
     */
    public function setReductionFillon($reductionFillon) {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }
}
