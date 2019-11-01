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
 * Fct interrogation cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctInterrogationCptTrait {

    /**
     * Fct interrogation cpt.
     *
     * @var bool
     */
    private $fctInterrogationCpt;

    /**
     * Get the fct interrogation cpt.
     *
     * @return bool Returns the fct interrogation cpt.
     */
    public function getFctInterrogationCpt() {
        return $this->fctInterrogationCpt;
    }

    /**
     * Set the fct interrogation cpt.
     *
     * @param bool $fctInterrogationCpt The fct interrogation cpt.
     */
    public function setFctInterrogationCpt($fctInterrogationCpt) {
        $this->fctInterrogationCpt = $fctInterrogationCpt;
        return $this;
    }
}
