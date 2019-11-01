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
 * Code formule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFormuleTrait {

    /**
     * Code formule.
     *
     * @var string
     */
    private $codeFormule;

    /**
     * Get the code formule.
     *
     * @return string Returns the code formule.
     */
    public function getCodeFormule() {
        return $this->codeFormule;
    }

    /**
     * Set the code formule.
     *
     * @param string $codeFormule The code formule.
     */
    public function setCodeFormule($codeFormule) {
        $this->codeFormule = $codeFormule;
        return $this;
    }
}
