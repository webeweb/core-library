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
 * Op relance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpRelanceTrait {

    /**
     * Op relance.
     *
     * @var bool
     */
    private $opRelance;

    /**
     * Get the op relance.
     *
     * @return bool Returns the op relance.
     */
    public function getOpRelance() {
        return $this->opRelance;
    }

    /**
     * Set the op relance.
     *
     * @param bool $opRelance The op relance.
     */
    public function setOpRelance($opRelance) {
        $this->opRelance = $opRelance;
        return $this;
    }
}
