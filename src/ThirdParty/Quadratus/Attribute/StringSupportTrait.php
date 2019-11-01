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
 * Support trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSupportTrait {

    /**
     * Support.
     *
     * @var string
     */
    private $support;

    /**
     * Get the support.
     *
     * @return string Returns the support.
     */
    public function getSupport() {
        return $this->support;
    }

    /**
     * Set the support.
     *
     * @param string $support The support.
     */
    public function setSupport($support) {
        $this->support = $support;
        return $this;
    }
}
