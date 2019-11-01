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
 * Ref guid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefGuidTrait {

    /**
     * Ref guid.
     *
     * @var string
     */
    private $refGuid;

    /**
     * Get the ref guid.
     *
     * @return string Returns the ref guid.
     */
    public function getRefGuid() {
        return $this->refGuid;
    }

    /**
     * Set the ref guid.
     *
     * @param string $refGuid The ref guid.
     */
    public function setRefGuid($refGuid) {
        $this->refGuid = $refGuid;
        return $this;
    }
}
