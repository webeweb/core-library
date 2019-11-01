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
 * Code metier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMetierTrait {

    /**
     * Code metier.
     *
     * @var string
     */
    private $codeMetier;

    /**
     * Get the code metier.
     *
     * @return string Returns the code metier.
     */
    public function getCodeMetier() {
        return $this->codeMetier;
    }

    /**
     * Set the code metier.
     *
     * @param string $codeMetier The code metier.
     */
    public function setCodeMetier($codeMetier) {
        $this->codeMetier = $codeMetier;
        return $this;
    }
}
