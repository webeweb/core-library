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
 * Social btq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialBtqTrait {

    /**
     * Social btq.
     *
     * @var string
     */
    private $socialBtq;

    /**
     * Get the social btq.
     *
     * @return string Returns the social btq.
     */
    public function getSocialBtq() {
        return $this->socialBtq;
    }

    /**
     * Set the social btq.
     *
     * @param string $socialBtq The social btq.
     */
    public function setSocialBtq($socialBtq) {
        $this->socialBtq = $socialBtq;
        return $this;
    }
}
