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
 * Appli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAppliTrait {

    /**
     * Appli.
     *
     * @var string
     */
    private $appli;

    /**
     * Get the appli.
     *
     * @return string Returns the appli.
     */
    public function getAppli() {
        return $this->appli;
    }

    /**
     * Set the appli.
     *
     * @param string $appli The appli.
     */
    public function setAppli($appli) {
        $this->appli = $appli;
        return $this;
    }
}
