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
 * Licencie55ans trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLicencie55ansTrait {

    /**
     * Licencie55ans.
     *
     * @var bool
     */
    private $licencie55ans;

    /**
     * Get the licencie55ans.
     *
     * @return bool Returns the licencie55ans.
     */
    public function getLicencie55ans() {
        return $this->licencie55ans;
    }

    /**
     * Set the licencie55ans.
     *
     * @param bool $licencie55ans The licencie55ans.
     */
    public function setLicencie55ans($licencie55ans) {
        $this->licencie55ans = $licencie55ans;
        return $this;
    }
}
