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
 * Code collab org trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollabOrgTrait {

    /**
     * Code collab org.
     *
     * @var string
     */
    private $codeCollabOrg;

    /**
     * Get the code collab org.
     *
     * @return string Returns the code collab org.
     */
    public function getCodeCollabOrg() {
        return $this->codeCollabOrg;
    }

    /**
     * Set the code collab org.
     *
     * @param string $codeCollabOrg The code collab org.
     */
    public function setCodeCollabOrg($codeCollabOrg) {
        $this->codeCollabOrg = $codeCollabOrg;
        return $this;
    }
}
