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
 * Indemn lic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemnLicTrait {

    /**
     * Indemn lic.
     *
     * @var bool
     */
    private $indemnLic;

    /**
     * Get the indemn lic.
     *
     * @return bool Returns the indemn lic.
     */
    public function getIndemnLic() {
        return $this->indemnLic;
    }

    /**
     * Set the indemn lic.
     *
     * @param bool $indemnLic The indemn lic.
     */
    public function setIndemnLic($indemnLic) {
        $this->indemnLic = $indemnLic;
        return $this;
    }
}
