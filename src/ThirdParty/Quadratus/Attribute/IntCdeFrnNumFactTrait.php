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
 * Cde frn num fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCdeFrnNumFactTrait {

    /**
     * Cde frn num fact.
     *
     * @var int
     */
    private $cdeFrnNumFact;

    /**
     * Get the cde frn num fact.
     *
     * @return int Returns the cde frn num fact.
     */
    public function getCdeFrnNumFact() {
        return $this->cdeFrnNumFact;
    }

    /**
     * Set the cde frn num fact.
     *
     * @param int $cdeFrnNumFact The cde frn num fact.
     */
    public function setCdeFrnNumFact($cdeFrnNumFact) {
        $this->cdeFrnNumFact = $cdeFrnNumFact;
        return $this;
    }
}
