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
 * Cd assiette trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdAssietteTrait {

    /**
     * Cd assiette.
     *
     * @var string
     */
    private $cdAssiette;

    /**
     * Get the cd assiette.
     *
     * @return string Returns the cd assiette.
     */
    public function getCdAssiette() {
        return $this->cdAssiette;
    }

    /**
     * Set the cd assiette.
     *
     * @param string $cdAssiette The cd assiette.
     */
    public function setCdAssiette($cdAssiette) {
        $this->cdAssiette = $cdAssiette;
        return $this;
    }
}
