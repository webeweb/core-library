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
 * Numero ligne anal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroLigneAnalTrait {

    /**
     * Numero ligne anal.
     *
     * @var int
     */
    private $numeroLigneAnal;

    /**
     * Get the numero ligne anal.
     *
     * @return int Returns the numero ligne anal.
     */
    public function getNumeroLigneAnal() {
        return $this->numeroLigneAnal;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int $numeroLigneAnal The numero ligne anal.
     */
    public function setNumeroLigneAnal($numeroLigneAnal) {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }
}
