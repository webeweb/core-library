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
 * Ldap ads path trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLdapAdsPathTrait {

    /**
     * Ldap ads path.
     *
     * @var string
     */
    private $ldapAdsPath;

    /**
     * Get the ldap ads path.
     *
     * @return string Returns the ldap ads path.
     */
    public function getLdapAdsPath() {
        return $this->ldapAdsPath;
    }

    /**
     * Set the ldap ads path.
     *
     * @param string $ldapAdsPath The ldap ads path.
     */
    public function setLdapAdsPath($ldapAdsPath) {
        $this->ldapAdsPath = $ldapAdsPath;
        return $this;
    }
}
