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
 * z rbt ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzRbtVilleTrait {

    /**
     * z rbt ville.
     *
     * @var string
     */
    private $zRbtVille;

    /**
     * Get the z rbt ville.
     *
     * @return string Returns the z rbt ville.
     */
    public function getzRbtVille() {
        return $this->zRbtVille;
    }

    /**
     * Set the z rbt ville.
     *
     * @param string $zRbtVille The z rbt ville.
     */
    public function setzRbtVille($zRbtVille) {
        $this->zRbtVille = $zRbtVille;
        return $this;
    }
}
