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
 * Code fam art trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFamArtTrait {

    /**
     * Code fam art.
     *
     * @var string
     */
    private $codeFamArt;

    /**
     * Get the code fam art.
     *
     * @return string Returns the code fam art.
     */
    public function getCodeFamArt() {
        return $this->codeFamArt;
    }

    /**
     * Set the code fam art.
     *
     * @param string $codeFamArt The code fam art.
     */
    public function setCodeFamArt($codeFamArt) {
        $this->codeFamArt = $codeFamArt;
        return $this;
    }
}
