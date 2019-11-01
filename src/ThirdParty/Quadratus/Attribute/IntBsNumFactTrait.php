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
 * Bs num fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBsNumFactTrait {

    /**
     * Bs num fact.
     *
     * @var int
     */
    private $bsNumFact;

    /**
     * Get the bs num fact.
     *
     * @return int Returns the bs num fact.
     */
    public function getBsNumFact() {
        return $this->bsNumFact;
    }

    /**
     * Set the bs num fact.
     *
     * @param int $bsNumFact The bs num fact.
     */
    public function setBsNumFact($bsNumFact) {
        $this->bsNumFact = $bsNumFact;
        return $this;
    }
}
