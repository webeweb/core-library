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
 * Visu evenements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisuEvenementsTrait {

    /**
     * Visu evenements.
     *
     * @var bool
     */
    private $visuEvenements;

    /**
     * Get the visu evenements.
     *
     * @return bool Returns the visu evenements.
     */
    public function getVisuEvenements() {
        return $this->visuEvenements;
    }

    /**
     * Set the visu evenements.
     *
     * @param bool $visuEvenements The visu evenements.
     */
    public function setVisuEvenements($visuEvenements) {
        $this->visuEvenements = $visuEvenements;
        return $this;
    }
}
