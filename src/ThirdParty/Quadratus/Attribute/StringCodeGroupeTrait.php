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
 * Code groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeGroupeTrait {

    /**
     * Code groupe.
     *
     * @var string
     */
    private $codeGroupe;

    /**
     * Get the code groupe.
     *
     * @return string Returns the code groupe.
     */
    public function getCodeGroupe() {
        return $this->codeGroupe;
    }

    /**
     * Set the code groupe.
     *
     * @param string $codeGroupe The code groupe.
     */
    public function setCodeGroupe($codeGroupe) {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }
}
