<?php
/*
 * This file is part of the Trident package.
 *
 * (c) Perederko Ruslan <perederko.ruslan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Trident\Components\Metadata\Traits;


use Trident\Components\Metadata\Interfaces\MetadataInterface;

trait MetadataProviderTrait
{
    /**
     * @var $metadata MetadataInterface
     */
    protected $metadata;

    /**
     * @inheritdoc
     */
    public function getMetadata(): MetadataInterface
    {
        return $this->metadata;
    }

    /**
     * @inheritdoc
     */
    public function setMetadata(MetadataInterface $metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @inheritdoc
     */
    public function merge(MetadataInterface $metadata): MetadataInterface
    {
        return $this->metadata;//TODO доработать
    }
}