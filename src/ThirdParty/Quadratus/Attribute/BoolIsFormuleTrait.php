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
 * Is formule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsFormuleTrait {

    /**
     * Is formule.
     *
     * @var bool
     */
    private $isFormule;

    /**
     * Get the is formule.
     *
     * @return bool Returns the is formule.
     */
    public function getIsFormule() {
        return $this->isFormule;
    }

    /**
     * Set the is formule.
     *
     * @param bool $isFormule The is formule.
     */
    public function setIsFormule($isFormule) {
        $this->isFormule = $isFormule;
        return $this;
    }
}
