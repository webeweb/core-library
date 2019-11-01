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
 * Code titre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTitreTrait {

    /**
     * Code titre.
     *
     * @var string
     */
    private $codeTitre;

    /**
     * Get the code titre.
     *
     * @return string Returns the code titre.
     */
    public function getCodeTitre() {
        return $this->codeTitre;
    }

    /**
     * Set the code titre.
     *
     * @param string $codeTitre The code titre.
     */
    public function setCodeTitre($codeTitre) {
        $this->codeTitre = $codeTitre;
        return $this;
    }
}
