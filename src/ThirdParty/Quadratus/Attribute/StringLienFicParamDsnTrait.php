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
 * Lien fic param dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLienFicParamDsnTrait {

    /**
     * Lien fic param dsn.
     *
     * @var string
     */
    private $lienFicParamDsn;

    /**
     * Get the lien fic param dsn.
     *
     * @return string Returns the lien fic param dsn.
     */
    public function getLienFicParamDsn() {
        return $this->lienFicParamDsn;
    }

    /**
     * Set the lien fic param dsn.
     *
     * @param string $lienFicParamDsn The lien fic param dsn.
     */
    public function setLienFicParamDsn($lienFicParamDsn) {
        $this->lienFicParamDsn = $lienFicParamDsn;
        return $this;
    }
}
