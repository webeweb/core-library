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
 * Code comptable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeComptableTrait {

    /**
     * Code comptable.
     *
     * @var string
     */
    private $codeComptable;

    /**
     * Get the code comptable.
     *
     * @return string Returns the code comptable.
     */
    public function getCodeComptable() {
        return $this->codeComptable;
    }

    /**
     * Set the code comptable.
     *
     * @param string $codeComptable The code comptable.
     */
    public function setCodeComptable($codeComptable) {
        $this->codeComptable = $codeComptable;
        return $this;
    }
}
