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
 * Num fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumFactTrait {

    /**
     * Num fact.
     *
     * @var int
     */
    private $numFact;

    /**
     * Get the num fact.
     *
     * @return int Returns the num fact.
     */
    public function getNumFact() {
        return $this->numFact;
    }

    /**
     * Set the num fact.
     *
     * @param int $numFact The num fact.
     */
    public function setNumFact($numFact) {
        $this->numFact = $numFact;
        return $this;
    }
}
