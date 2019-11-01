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
 * Gerer int cpt cour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGererIntCptCourTrait {

    /**
     * Gerer int cpt cour.
     *
     * @var bool
     */
    private $gererIntCptCour;

    /**
     * Get the gerer int cpt cour.
     *
     * @return bool Returns the gerer int cpt cour.
     */
    public function getGererIntCptCour() {
        return $this->gererIntCptCour;
    }

    /**
     * Set the gerer int cpt cour.
     *
     * @param bool $gererIntCptCour The gerer int cpt cour.
     */
    public function setGererIntCptCour($gererIntCptCour) {
        $this->gererIntCptCour = $gererIntCptCour;
        return $this;
    }
}
