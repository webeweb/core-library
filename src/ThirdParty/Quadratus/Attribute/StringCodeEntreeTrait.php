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
 * Code entree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEntreeTrait {

    /**
     * Code entree.
     *
     * @var string
     */
    private $codeEntree;

    /**
     * Get the code entree.
     *
     * @return string Returns the code entree.
     */
    public function getCodeEntree() {
        return $this->codeEntree;
    }

    /**
     * Set the code entree.
     *
     * @param string $codeEntree The code entree.
     */
    public function setCodeEntree($codeEntree) {
        $this->codeEntree = $codeEntree;
        return $this;
    }
}
