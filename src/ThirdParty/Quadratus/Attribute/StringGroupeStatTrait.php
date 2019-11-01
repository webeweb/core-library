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
 * Groupe stat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeStatTrait {

    /**
     * Groupe stat.
     *
     * @var string
     */
    private $groupeStat;

    /**
     * Get the groupe stat.
     *
     * @return string Returns the groupe stat.
     */
    public function getGroupeStat() {
        return $this->groupeStat;
    }

    /**
     * Set the groupe stat.
     *
     * @param string $groupeStat The groupe stat.
     */
    public function setGroupeStat($groupeStat) {
        $this->groupeStat = $groupeStat;
        return $this;
    }
}
