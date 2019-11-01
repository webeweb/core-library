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
 * Aubry1 modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAubry1ModifieTrait {

    /**
     * Aubry1 modifie.
     *
     * @var bool
     */
    private $aubry1Modifie;

    /**
     * Get the aubry1 modifie.
     *
     * @return bool Returns the aubry1 modifie.
     */
    public function getAubry1Modifie() {
        return $this->aubry1Modifie;
    }

    /**
     * Set the aubry1 modifie.
     *
     * @param bool $aubry1Modifie The aubry1 modifie.
     */
    public function setAubry1Modifie($aubry1Modifie) {
        $this->aubry1Modifie = $aubry1Modifie;
        return $this;
    }
}
