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
 * Code coll trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollTrait {

    /**
     * Code coll.
     *
     * @var string
     */
    private $codeColl;

    /**
     * Get the code coll.
     *
     * @return string Returns the code coll.
     */
    public function getCodeColl() {
        return $this->codeColl;
    }

    /**
     * Set the code coll.
     *
     * @param string $codeColl The code coll.
     */
    public function setCodeColl($codeColl) {
        $this->codeColl = $codeColl;
        return $this;
    }
}
