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
 * Tx com invisible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTxComInvisibleTrait {

    /**
     * Tx com invisible.
     *
     * @var bool
     */
    private $txComInvisible;

    /**
     * Get the tx com invisible.
     *
     * @return bool Returns the tx com invisible.
     */
    public function getTxComInvisible() {
        return $this->txComInvisible;
    }

    /**
     * Set the tx com invisible.
     *
     * @param bool $txComInvisible The tx com invisible.
     */
    public function setTxComInvisible($txComInvisible) {
        $this->txComInvisible = $txComInvisible;
        return $this;
    }
}
