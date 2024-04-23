<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use WBW\Library\Common\Traits\Strings\StringDescriptionTrait;
use WBW\Library\Common\Traits\Strings\StringIdTrait;
use WBW\Library\System\Serializer\JsonSerializer;

/**
 * Operating system.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class OperatingSystem implements OperatingSystemInterface {

    use StringIdTrait;
    use StringDescriptionTrait;

    /**
     * Codename.
     *
     * @var string|null
     */
    protected $codename;

    /**
     * Release.
     *
     * @var string|null
     */
    protected $release;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getCodename(): ?string {
        return $this->codename;
    }

    /**
     * {@inheritDoc}
     */
    public function getRelease(): ?string {
        return $this->release;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeOperatingSystem($this);
    }

    /**
     * Set the codename.
     *
     * @param string|null $codename The codename.
     * @return OperatingSystemInterface Returns this operating system.
     */
    public function setCodename(?string $codename): OperatingSystemInterface {
        $this->codename = $codename;
        return $this;
    }

    /**
     * Set the release.
     *
     * @param string|null $release The release.
     * @return OperatingSystemInterface Returns this operating system.
     */
    public function setRelease(?string $release): OperatingSystemInterface {
        $this->release = $release;
        return $this;
    }
}
