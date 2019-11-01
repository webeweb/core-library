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
 * Super facturable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuperFacturableTrait {

    /**
     * Super facturable.
     *
     * @var bool
     */
    private $superFacturable;

    /**
     * Get the super facturable.
     *
     * @return bool Returns the super facturable.
     */
    public function getSuperFacturable() {
        return $this->superFacturable;
    }

    /**
     * Set the super facturable.
     *
     * @param bool $superFacturable The super facturable.
     */
    public function setSuperFacturable($superFacturable) {
        $this->superFacturable = $superFacturable;
        return $this;
    }
}
