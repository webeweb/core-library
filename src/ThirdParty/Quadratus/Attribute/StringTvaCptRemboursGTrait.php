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
 * Tva cpt rembours g trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptRemboursGTrait {

    /**
     * Tva cpt rembours g.
     *
     * @var string
     */
    private $tvaCptRemboursG;

    /**
     * Get the tva cpt rembours g.
     *
     * @return string Returns the tva cpt rembours g.
     */
    public function getTvaCptRemboursG() {
        return $this->tvaCptRemboursG;
    }

    /**
     * Set the tva cpt rembours g.
     *
     * @param string $tvaCptRemboursG The tva cpt rembours g.
     */
    public function setTvaCptRemboursG($tvaCptRemboursG) {
        $this->tvaCptRemboursG = $tvaCptRemboursG;
        return $this;
    }
}
