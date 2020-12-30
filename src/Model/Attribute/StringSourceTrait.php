<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String source trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringSourceTrait {

    /**
     * Source.
     *
     * @var string|null
     */
    protected $source;

    /**
     * Get the source.
     *
     * @return string|null Returns the source.
     */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Set the source.
     *
     * @param string|null $source The source.
     */
    public function setSource(?string $source): self {
        $this->source = $source;
        return $this;
    }
}
