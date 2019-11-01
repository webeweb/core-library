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
 * Bibliotheque novaxel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBibliothequeNovaxelTrait {

    /**
     * Bibliotheque novaxel.
     *
     * @var string
     */
    private $bibliothequeNovaxel;

    /**
     * Get the bibliotheque novaxel.
     *
     * @return string Returns the bibliotheque novaxel.
     */
    public function getBibliothequeNovaxel() {
        return $this->bibliothequeNovaxel;
    }

    /**
     * Set the bibliotheque novaxel.
     *
     * @param string $bibliothequeNovaxel The bibliotheque novaxel.
     */
    public function setBibliothequeNovaxel($bibliothequeNovaxel) {
        $this->bibliothequeNovaxel = $bibliothequeNovaxel;
        return $this;
    }
}
