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
 * Cle acces trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesTrait {

    /**
     * Cle acces.
     *
     * @var string
     */
    private $cleAcces;

    /**
     * Get the cle acces.
     *
     * @return string Returns the cle acces.
     */
    public function getCleAcces() {
        return $this->cleAcces;
    }

    /**
     * Set the cle acces.
     *
     * @param string $cleAcces The cle acces.
     */
    public function setCleAcces($cleAcces) {
        $this->cleAcces = $cleAcces;
        return $this;
    }
}
