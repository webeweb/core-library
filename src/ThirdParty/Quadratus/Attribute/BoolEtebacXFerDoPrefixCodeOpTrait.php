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
 * Etebac x fer do prefix code op trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtebacXFerDoPrefixCodeOpTrait {

    /**
     * Etebac x fer do prefix code op.
     *
     * @var bool
     */
    private $etebacXFerDoPrefixCodeOp;

    /**
     * Get the etebac x fer do prefix code op.
     *
     * @return bool Returns the etebac x fer do prefix code op.
     */
    public function getEtebacXFerDoPrefixCodeOp() {
        return $this->etebacXFerDoPrefixCodeOp;
    }

    /**
     * Set the etebac x fer do prefix code op.
     *
     * @param bool $etebacXFerDoPrefixCodeOp The etebac x fer do prefix code op.
     */
    public function setEtebacXFerDoPrefixCodeOp($etebacXFerDoPrefixCodeOp) {
        $this->etebacXFerDoPrefixCodeOp = $etebacXFerDoPrefixCodeOp;
        return $this;
    }
}
