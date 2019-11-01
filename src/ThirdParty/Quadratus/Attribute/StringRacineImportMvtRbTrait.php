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
 * Racine import mvt rb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRacineImportMvtRbTrait {

    /**
     * Racine import mvt rb.
     *
     * @var string
     */
    private $racineImportMvtRb;

    /**
     * Get the racine import mvt rb.
     *
     * @return string Returns the racine import mvt rb.
     */
    public function getRacineImportMvtRb() {
        return $this->racineImportMvtRb;
    }

    /**
     * Set the racine import mvt rb.
     *
     * @param string $racineImportMvtRb The racine import mvt rb.
     */
    public function setRacineImportMvtRb($racineImportMvtRb) {
        $this->racineImportMvtRb = $racineImportMvtRb;
        return $this;
    }
}
