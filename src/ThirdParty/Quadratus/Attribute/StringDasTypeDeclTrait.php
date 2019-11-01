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
 * Das type decl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDasTypeDeclTrait {

    /**
     * Das type decl.
     *
     * @var string
     */
    private $dasTypeDecl;

    /**
     * Get the das type decl.
     *
     * @return string Returns the das type decl.
     */
    public function getDasTypeDecl() {
        return $this->dasTypeDecl;
    }

    /**
     * Set the das type decl.
     *
     * @param string $dasTypeDecl The das type decl.
     */
    public function setDasTypeDecl($dasTypeDecl) {
        $this->dasTypeDecl = $dasTypeDecl;
        return $this;
    }
}
