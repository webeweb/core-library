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
 * Jour fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourFactTrait {

    /**
     * Jour fact.
     *
     * @var string
     */
    private $jourFact;

    /**
     * Get the jour fact.
     *
     * @return string Returns the jour fact.
     */
    public function getJourFact() {
        return $this->jourFact;
    }

    /**
     * Set the jour fact.
     *
     * @param string $jourFact The jour fact.
     */
    public function setJourFact($jourFact) {
        $this->jourFact = $jourFact;
        return $this;
    }
}
