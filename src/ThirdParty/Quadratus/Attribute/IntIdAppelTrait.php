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
 * Id appel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdAppelTrait {

    /**
     * Id appel.
     *
     * @var int
     */
    private $idAppel;

    /**
     * Get the id appel.
     *
     * @return int Returns the id appel.
     */
    public function getIdAppel() {
        return $this->idAppel;
    }

    /**
     * Set the id appel.
     *
     * @param int $idAppel The id appel.
     */
    public function setIdAppel($idAppel) {
        $this->idAppel = $idAppel;
        return $this;
    }
}
