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
 * Code tache rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTacheRemplTrait {

    /**
     * Code tache rempl.
     *
     * @var string
     */
    private $codeTacheRempl;

    /**
     * Get the code tache rempl.
     *
     * @return string Returns the code tache rempl.
     */
    public function getCodeTacheRempl() {
        return $this->codeTacheRempl;
    }

    /**
     * Set the code tache rempl.
     *
     * @param string $codeTacheRempl The code tache rempl.
     */
    public function setCodeTacheRempl($codeTacheRempl) {
        $this->codeTacheRempl = $codeTacheRempl;
        return $this;
    }
}
