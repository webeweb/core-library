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
 * Cde client num fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCdeClientNumFactTrait {

    /**
     * Cde client num fact.
     *
     * @var int
     */
    private $cdeClientNumFact;

    /**
     * Get the cde client num fact.
     *
     * @return int Returns the cde client num fact.
     */
    public function getCdeClientNumFact() {
        return $this->cdeClientNumFact;
    }

    /**
     * Set the cde client num fact.
     *
     * @param int $cdeClientNumFact The cde client num fact.
     */
    public function setCdeClientNumFact($cdeClientNumFact) {
        $this->cdeClientNumFact = $cdeClientNumFact;
        return $this;
    }
}
