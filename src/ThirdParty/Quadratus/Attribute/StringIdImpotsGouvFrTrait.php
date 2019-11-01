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
 * Id impots gouv fr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdImpotsGouvFrTrait {

    /**
     * Id impots gouv fr.
     *
     * @var string
     */
    private $idImpotsGouvFr;

    /**
     * Get the id impots gouv fr.
     *
     * @return string Returns the id impots gouv fr.
     */
    public function getIdImpotsGouvFr() {
        return $this->idImpotsGouvFr;
    }

    /**
     * Set the id impots gouv fr.
     *
     * @param string $idImpotsGouvFr The id impots gouv fr.
     */
    public function setIdImpotsGouvFr($idImpotsGouvFr) {
        $this->idImpotsGouvFr = $idImpotsGouvFr;
        return $this;
    }
}
