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
 * Visu salaires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisuSalairesTrait {

    /**
     * Visu salaires.
     *
     * @var bool
     */
    private $visuSalaires;

    /**
     * Get the visu salaires.
     *
     * @return bool Returns the visu salaires.
     */
    public function getVisuSalaires() {
        return $this->visuSalaires;
    }

    /**
     * Set the visu salaires.
     *
     * @param bool $visuSalaires The visu salaires.
     */
    public function setVisuSalaires($visuSalaires) {
        $this->visuSalaires = $visuSalaires;
        return $this;
    }
}
