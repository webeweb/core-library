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
 * Etat das rect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatDasRectTrait {

    /**
     * Etat das rect.
     *
     * @var string
     */
    private $etatDasRect;

    /**
     * Get the etat das rect.
     *
     * @return string Returns the etat das rect.
     */
    public function getEtatDasRect() {
        return $this->etatDasRect;
    }

    /**
     * Set the etat das rect.
     *
     * @param string $etatDasRect The etat das rect.
     */
    public function setEtatDasRect($etatDasRect) {
        $this->etatDasRect = $etatDasRect;
        return $this;
    }
}
