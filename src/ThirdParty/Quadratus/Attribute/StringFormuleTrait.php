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
 * Formule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFormuleTrait {

    /**
     * Formule.
     *
     * @var string
     */
    private $formule;

    /**
     * Get the formule.
     *
     * @return string Returns the formule.
     */
    public function getFormule() {
        return $this->formule;
    }

    /**
     * Set the formule.
     *
     * @param string $formule The formule.
     */
    public function setFormule($formule) {
        $this->formule = $formule;
        return $this;
    }
}
