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
 * Niveau apparition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNiveauApparitionTrait {

    /**
     * Niveau apparition.
     *
     * @var int
     */
    private $niveauApparition;

    /**
     * Get the niveau apparition.
     *
     * @return int Returns the niveau apparition.
     */
    public function getNiveauApparition() {
        return $this->niveauApparition;
    }

    /**
     * Set the niveau apparition.
     *
     * @param int $niveauApparition The niveau apparition.
     */
    public function setNiveauApparition($niveauApparition) {
        $this->niveauApparition = $niveauApparition;
        return $this;
    }
}
