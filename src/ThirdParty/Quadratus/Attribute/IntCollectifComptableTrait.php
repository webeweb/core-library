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
 * Collectif comptable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCollectifComptableTrait {

    /**
     * Collectif comptable.
     *
     * @var int
     */
    private $collectifComptable;

    /**
     * Get the collectif comptable.
     *
     * @return int Returns the collectif comptable.
     */
    public function getCollectifComptable() {
        return $this->collectifComptable;
    }

    /**
     * Set the collectif comptable.
     *
     * @param int $collectifComptable The collectif comptable.
     */
    public function setCollectifComptable($collectifComptable) {
        $this->collectifComptable = $collectifComptable;
        return $this;
    }
}
