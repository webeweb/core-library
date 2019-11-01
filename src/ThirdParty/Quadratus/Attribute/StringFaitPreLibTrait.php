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
 * Fait pre lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitPreLibTrait {

    /**
     * Fait pre lib.
     *
     * @var string
     */
    private $faitPreLib;

    /**
     * Get the fait pre lib.
     *
     * @return string Returns the fait pre lib.
     */
    public function getFaitPreLib() {
        return $this->faitPreLib;
    }

    /**
     * Set the fait pre lib.
     *
     * @param string $faitPreLib The fait pre lib.
     */
    public function setFaitPreLib($faitPreLib) {
        $this->faitPreLib = $faitPreLib;
        return $this;
    }
}
