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
 * Dec tva type reglement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDecTvaTypeReglementTrait {

    /**
     * Dec tva type reglement.
     *
     * @var int
     */
    private $decTvaTypeReglement;

    /**
     * Get the dec tva type reglement.
     *
     * @return int Returns the dec tva type reglement.
     */
    public function getDecTvaTypeReglement() {
        return $this->decTvaTypeReglement;
    }

    /**
     * Set the dec tva type reglement.
     *
     * @param int $decTvaTypeReglement The dec tva type reglement.
     */
    public function setDecTvaTypeReglement($decTvaTypeReglement) {
        $this->decTvaTypeReglement = $decTvaTypeReglement;
        return $this;
    }
}
