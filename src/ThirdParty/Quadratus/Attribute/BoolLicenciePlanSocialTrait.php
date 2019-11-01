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
 * Licencie plan social trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLicenciePlanSocialTrait {

    /**
     * Licencie plan social.
     *
     * @var bool
     */
    private $licenciePlanSocial;

    /**
     * Get the licencie plan social.
     *
     * @return bool Returns the licencie plan social.
     */
    public function getLicenciePlanSocial() {
        return $this->licenciePlanSocial;
    }

    /**
     * Set the licencie plan social.
     *
     * @param bool $licenciePlanSocial The licencie plan social.
     */
    public function setLicenciePlanSocial($licenciePlanSocial) {
        $this->licenciePlanSocial = $licenciePlanSocial;
        return $this;
    }
}
