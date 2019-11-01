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
 * Fichiers publier web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFichiersPublierWebTrait {

    /**
     * Fichiers publier web.
     *
     * @var string
     */
    private $fichiersPublierWeb;

    /**
     * Get the fichiers publier web.
     *
     * @return string Returns the fichiers publier web.
     */
    public function getFichiersPublierWeb() {
        return $this->fichiersPublierWeb;
    }

    /**
     * Set the fichiers publier web.
     *
     * @param string $fichiersPublierWeb The fichiers publier web.
     */
    public function setFichiersPublierWeb($fichiersPublierWeb) {
        $this->fichiersPublierWeb = $fichiersPublierWeb;
        return $this;
    }
}
