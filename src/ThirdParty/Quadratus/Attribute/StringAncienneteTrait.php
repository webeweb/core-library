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
 * Anciennete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAncienneteTrait {

    /**
     * Anciennete.
     *
     * @var string
     */
    private $anciennete;

    /**
     * Get the anciennete.
     *
     * @return string Returns the anciennete.
     */
    public function getAnciennete() {
        return $this->anciennete;
    }

    /**
     * Set the anciennete.
     *
     * @param string $anciennete The anciennete.
     */
    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
        return $this;
    }
}
