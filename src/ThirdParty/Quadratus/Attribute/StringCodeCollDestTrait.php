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
 * Code coll dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollDestTrait {

    /**
     * Code coll dest.
     *
     * @var string
     */
    private $codeCollDest;

    /**
     * Get the code coll dest.
     *
     * @return string Returns the code coll dest.
     */
    public function getCodeCollDest() {
        return $this->codeCollDest;
    }

    /**
     * Set the code coll dest.
     *
     * @param string $codeCollDest The code coll dest.
     */
    public function setCodeCollDest($codeCollDest) {
        $this->codeCollDest = $codeCollDest;
        return $this;
    }
}
