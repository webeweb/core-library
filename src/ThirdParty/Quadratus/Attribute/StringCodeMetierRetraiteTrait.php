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
 * Code metier retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMetierRetraiteTrait {

    /**
     * Code metier retraite.
     *
     * @var string
     */
    private $codeMetierRetraite;

    /**
     * Get the code metier retraite.
     *
     * @return string Returns the code metier retraite.
     */
    public function getCodeMetierRetraite() {
        return $this->codeMetierRetraite;
    }

    /**
     * Set the code metier retraite.
     *
     * @param string $codeMetierRetraite The code metier retraite.
     */
    public function setCodeMetierRetraite($codeMetierRetraite) {
        $this->codeMetierRetraite = $codeMetierRetraite;
        return $this;
    }
}
