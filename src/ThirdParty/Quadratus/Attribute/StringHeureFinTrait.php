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
 * Heure fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHeureFinTrait {

    /**
     * Heure fin.
     *
     * @var string
     */
    private $heureFin;

    /**
     * Get the heure fin.
     *
     * @return string Returns the heure fin.
     */
    public function getHeureFin() {
        return $this->heureFin;
    }

    /**
     * Set the heure fin.
     *
     * @param string $heureFin The heure fin.
     */
    public function setHeureFin($heureFin) {
        $this->heureFin = $heureFin;
        return $this;
    }
}
