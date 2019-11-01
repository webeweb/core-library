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
 * Heure sup5 influ cassation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureSup5InfluCassationTrait {

    /**
     * Heure sup5 influ cassation.
     *
     * @var string
     */
    private $heureSup5InfluCassation;

    /**
     * Get the heure sup5 influ cassation.
     *
     * @return string Returns the heure sup5 influ cassation.
     */
    public function getHeureSup5InfluCassation() {
        return $this->heureSup5InfluCassation;
    }

    /**
     * Set the heure sup5 influ cassation.
     *
     * @param string $heureSup5InfluCassation The heure sup5 influ cassation.
     */
    public function setHeureSup5InfluCassation($heureSup5InfluCassation) {
        $this->heureSup5InfluCassation = $heureSup5InfluCassation;
        return $this;
    }
}
