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
 * Activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringActiviteTrait {

    /**
     * Activite.
     *
     * @var string
     */
    private $activite;

    /**
     * Get the activite.
     *
     * @return string Returns the activite.
     */
    public function getActivite() {
        return $this->activite;
    }

    /**
     * Set the activite.
     *
     * @param string $activite The activite.
     */
    public function setActivite($activite) {
        $this->activite = $activite;
        return $this;
    }
}
