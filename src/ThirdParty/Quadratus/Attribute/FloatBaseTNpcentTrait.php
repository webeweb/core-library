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
 * Base t npcent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseTNpcentTrait {

    /**
     * Base t npcent.
     *
     * @var float
     */
    private $baseTNpcent;

    /**
     * Get the base t npcent.
     *
     * @return float Returns the base t npcent.
     */
    public function getBaseTNpcent() {
        return $this->baseTNpcent;
    }

    /**
     * Set the base t npcent.
     *
     * @param float $baseTNpcent The base t npcent.
     */
    public function setBaseTNpcent($baseTNpcent) {
        $this->baseTNpcent = $baseTNpcent;
        return $this;
    }
}
