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
 * No piece origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoPieceOrigineTrait {

    /**
     * No piece origine.
     *
     * @var string
     */
    private $noPieceOrigine;

    /**
     * Get the no piece origine.
     *
     * @return string Returns the no piece origine.
     */
    public function getNoPieceOrigine() {
        return $this->noPieceOrigine;
    }

    /**
     * Set the no piece origine.
     *
     * @param string $noPieceOrigine The no piece origine.
     */
    public function setNoPieceOrigine($noPieceOrigine) {
        $this->noPieceOrigine = $noPieceOrigine;
        return $this;
    }
}
