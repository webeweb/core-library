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
 * Droit ajout trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitAjoutTrait {

    /**
     * Droit ajout.
     *
     * @var bool
     */
    private $droitAjout;

    /**
     * Get the droit ajout.
     *
     * @return bool Returns the droit ajout.
     */
    public function getDroitAjout() {
        return $this->droitAjout;
    }

    /**
     * Set the droit ajout.
     *
     * @param bool $droitAjout The droit ajout.
     */
    public function setDroitAjout($droitAjout) {
        $this->droitAjout = $droitAjout;
        return $this;
    }
}
