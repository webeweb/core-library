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
 * Groupe gi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeGiTrait {

    /**
     * Groupe gi.
     *
     * @var string
     */
    private $groupeGi;

    /**
     * Get the groupe gi.
     *
     * @return string Returns the groupe gi.
     */
    public function getGroupeGi() {
        return $this->groupeGi;
    }

    /**
     * Set the groupe gi.
     *
     * @param string $groupeGi The groupe gi.
     */
    public function setGroupeGi($groupeGi) {
        $this->groupeGi = $groupeGi;
        return $this;
    }
}
