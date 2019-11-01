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
 * Groupe interne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeInterneTrait {

    /**
     * Groupe interne.
     *
     * @var string
     */
    private $groupeInterne;

    /**
     * Get the groupe interne.
     *
     * @return string Returns the groupe interne.
     */
    public function getGroupeInterne() {
        return $this->groupeInterne;
    }

    /**
     * Set the groupe interne.
     *
     * @param string $groupeInterne The groupe interne.
     */
    public function setGroupeInterne($groupeInterne) {
        $this->groupeInterne = $groupeInterne;
        return $this;
    }
}
