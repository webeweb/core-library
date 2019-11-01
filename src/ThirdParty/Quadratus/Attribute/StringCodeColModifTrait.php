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
 * Code col modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeColModifTrait {

    /**
     * Code col modif.
     *
     * @var string
     */
    private $codeColModif;

    /**
     * Get the code col modif.
     *
     * @return string Returns the code col modif.
     */
    public function getCodeColModif() {
        return $this->codeColModif;
    }

    /**
     * Set the code col modif.
     *
     * @param string $codeColModif The code col modif.
     */
    public function setCodeColModif($codeColModif) {
        $this->codeColModif = $codeColModif;
        return $this;
    }
}
