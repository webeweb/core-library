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
 * Dec mois prep fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDecMoisPrepFactTrait {

    /**
     * Dec mois prep fact.
     *
     * @var int
     */
    private $decMoisPrepFact;

    /**
     * Get the dec mois prep fact.
     *
     * @return int Returns the dec mois prep fact.
     */
    public function getDecMoisPrepFact() {
        return $this->decMoisPrepFact;
    }

    /**
     * Set the dec mois prep fact.
     *
     * @param int $decMoisPrepFact The dec mois prep fact.
     */
    public function setDecMoisPrepFact($decMoisPrepFact) {
        $this->decMoisPrepFact = $decMoisPrepFact;
        return $this;
    }
}
