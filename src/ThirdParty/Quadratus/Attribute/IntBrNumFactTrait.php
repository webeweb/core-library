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
 * Br num fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBrNumFactTrait {

    /**
     * Br num fact.
     *
     * @var int
     */
    private $brNumFact;

    /**
     * Get the br num fact.
     *
     * @return int Returns the br num fact.
     */
    public function getBrNumFact() {
        return $this->brNumFact;
    }

    /**
     * Set the br num fact.
     *
     * @param int $brNumFact The br num fact.
     */
    public function setBrNumFact($brNumFact) {
        $this->brNumFact = $brNumFact;
        return $this;
    }
}
