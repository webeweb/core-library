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
 * Lib cotis cne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCotisCneTrait {

    /**
     * Lib cotis cne.
     *
     * @var string
     */
    private $libCotisCne;

    /**
     * Get the lib cotis cne.
     *
     * @return string Returns the lib cotis cne.
     */
    public function getLibCotisCne() {
        return $this->libCotisCne;
    }

    /**
     * Set the lib cotis cne.
     *
     * @param string $libCotisCne The lib cotis cne.
     */
    public function setLibCotisCne($libCotisCne) {
        $this->libCotisCne = $libCotisCne;
        return $this;
    }
}
