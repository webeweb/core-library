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
 * Heure sup4 influ cassation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureSup4InfluCassationTrait {

    /**
     * Heure sup4 influ cassation.
     *
     * @var string
     */
    private $heureSup4InfluCassation;

    /**
     * Get the heure sup4 influ cassation.
     *
     * @return string Returns the heure sup4 influ cassation.
     */
    public function getHeureSup4InfluCassation() {
        return $this->heureSup4InfluCassation;
    }

    /**
     * Set the heure sup4 influ cassation.
     *
     * @param string $heureSup4InfluCassation The heure sup4 influ cassation.
     */
    public function setHeureSup4InfluCassation($heureSup4InfluCassation) {
        $this->heureSup4InfluCassation = $heureSup4InfluCassation;
        return $this;
    }
}
