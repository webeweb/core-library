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
 * Compagnie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompagnieTrait {

    /**
     * Compagnie.
     *
     * @var string
     */
    private $compagnie;

    /**
     * Get the compagnie.
     *
     * @return string Returns the compagnie.
     */
    public function getCompagnie() {
        return $this->compagnie;
    }

    /**
     * Set the compagnie.
     *
     * @param string $compagnie The compagnie.
     */
    public function setCompagnie($compagnie) {
        $this->compagnie = $compagnie;
        return $this;
    }
}
