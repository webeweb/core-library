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
 * Code coll org trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollOrgTrait {

    /**
     * Code coll org.
     *
     * @var string
     */
    private $codeCollOrg;

    /**
     * Get the code coll org.
     *
     * @return string Returns the code coll org.
     */
    public function getCodeCollOrg() {
        return $this->codeCollOrg;
    }

    /**
     * Set the code coll org.
     *
     * @param string $codeCollOrg The code coll org.
     */
    public function setCodeCollOrg($codeCollOrg) {
        $this->codeCollOrg = $codeCollOrg;
        return $this;
    }
}
