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
 * Type saisie ab cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSaisieAbCpTrait {

    /**
     * Type saisie ab cp.
     *
     * @var string
     */
    private $typeSaisieAbCp;

    /**
     * Get the type saisie ab cp.
     *
     * @return string Returns the type saisie ab cp.
     */
    public function getTypeSaisieAbCp() {
        return $this->typeSaisieAbCp;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string $typeSaisieAbCp The type saisie ab cp.
     */
    public function setTypeSaisieAbCp($typeSaisieAbCp) {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }
}
