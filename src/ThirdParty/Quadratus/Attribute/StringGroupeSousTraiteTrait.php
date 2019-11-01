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
 * Groupe sous traite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeSousTraiteTrait {

    /**
     * Groupe sous traite.
     *
     * @var string
     */
    private $groupeSousTraite;

    /**
     * Get the groupe sous traite.
     *
     * @return string Returns the groupe sous traite.
     */
    public function getGroupeSousTraite() {
        return $this->groupeSousTraite;
    }

    /**
     * Set the groupe sous traite.
     *
     * @param string $groupeSousTraite The groupe sous traite.
     */
    public function setGroupeSousTraite($groupeSousTraite) {
        $this->groupeSousTraite = $groupeSousTraite;
        return $this;
    }
}
