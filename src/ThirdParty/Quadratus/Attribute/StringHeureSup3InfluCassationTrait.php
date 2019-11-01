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
 * Heure sup3 influ cassation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureSup3InfluCassationTrait {

    /**
     * Heure sup3 influ cassation.
     *
     * @var string
     */
    private $heureSup3InfluCassation;

    /**
     * Get the heure sup3 influ cassation.
     *
     * @return string Returns the heure sup3 influ cassation.
     */
    public function getHeureSup3InfluCassation() {
        return $this->heureSup3InfluCassation;
    }

    /**
     * Set the heure sup3 influ cassation.
     *
     * @param string $heureSup3InfluCassation The heure sup3 influ cassation.
     */
    public function setHeureSup3InfluCassation($heureSup3InfluCassation) {
        $this->heureSup3InfluCassation = $heureSup3InfluCassation;
        return $this;
    }
}
