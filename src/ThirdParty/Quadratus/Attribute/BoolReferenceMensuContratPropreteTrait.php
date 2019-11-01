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
 * Reference mensu contrat proprete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReferenceMensuContratPropreteTrait {

    /**
     * Reference mensu contrat proprete.
     *
     * @var bool
     */
    private $referenceMensuContratProprete;

    /**
     * Get the reference mensu contrat proprete.
     *
     * @return bool Returns the reference mensu contrat proprete.
     */
    public function getReferenceMensuContratProprete() {
        return $this->referenceMensuContratProprete;
    }

    /**
     * Set the reference mensu contrat proprete.
     *
     * @param bool $referenceMensuContratProprete The reference mensu contrat proprete.
     */
    public function setReferenceMensuContratProprete($referenceMensuContratProprete) {
        $this->referenceMensuContratProprete = $referenceMensuContratProprete;
        return $this;
    }
}
