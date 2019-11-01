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
 * Heure sup2 influ cassation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureSup2InfluCassationTrait {

    /**
     * Heure sup2 influ cassation.
     *
     * @var string
     */
    private $heureSup2InfluCassation;

    /**
     * Get the heure sup2 influ cassation.
     *
     * @return string Returns the heure sup2 influ cassation.
     */
    public function getHeureSup2InfluCassation() {
        return $this->heureSup2InfluCassation;
    }

    /**
     * Set the heure sup2 influ cassation.
     *
     * @param string $heureSup2InfluCassation The heure sup2 influ cassation.
     */
    public function setHeureSup2InfluCassation($heureSup2InfluCassation) {
        $this->heureSup2InfluCassation = $heureSup2InfluCassation;
        return $this;
    }
}
