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
 * Version controle dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVersionControleDadsuTrait {

    /**
     * Version controle dadsu.
     *
     * @var int
     */
    private $versionControleDadsu;

    /**
     * Get the version controle dadsu.
     *
     * @return int Returns the version controle dadsu.
     */
    public function getVersionControleDadsu() {
        return $this->versionControleDadsu;
    }

    /**
     * Set the version controle dadsu.
     *
     * @param int $versionControleDadsu The version controle dadsu.
     */
    public function setVersionControleDadsu($versionControleDadsu) {
        $this->versionControleDadsu = $versionControleDadsu;
        return $this;
    }
}
