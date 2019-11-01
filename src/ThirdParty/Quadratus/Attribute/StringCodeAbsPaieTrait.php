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
 * Code abs paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAbsPaieTrait {

    /**
     * Code abs paie.
     *
     * @var string
     */
    private $codeAbsPaie;

    /**
     * Get the code abs paie.
     *
     * @return string Returns the code abs paie.
     */
    public function getCodeAbsPaie() {
        return $this->codeAbsPaie;
    }

    /**
     * Set the code abs paie.
     *
     * @param string $codeAbsPaie The code abs paie.
     */
    public function setCodeAbsPaie($codeAbsPaie) {
        $this->codeAbsPaie = $codeAbsPaie;
        return $this;
    }
}
